<?php

namespace App\Http\Controllers;

use App\Repositories\LandingpageRepository;
use App\Services\visitService;
use App\Trackers\BinomClickApi;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;
use stdClass;
use Str;
use View;

class BinomLanderController extends Controller
{
    private LandingpageRepository $repository;

    public function __construct()
    {
        $this->repository = new LandingpageRepository();

        View::addNamespace('lander', config('offers.path'));
    }

    /**
     * @param Request $request
     * @param int     $designId
     * @param string  $country
     *
     * @return bool|\Illuminate\Auth\Access\Response|Application|ResponseFactory|Factory|\Illuminate\Contracts\View\View|Response|string
     */
    public function landingpageView(Request $request, int $designId, string $country)
    {
        // get the config for the given offer
        $config = $this->repository->loadLandingpageConfigFile($designId);

        if (!$config) {
            return response("No config found in landers view for  {$designId} ");
        }
        // what is the domain the user visited ? and does it exists in the config file ??
        $currentDomain = $request->getHttpHost();
        if (!$this->repository->validateDomain($currentDomain, $config)) {
            Log::error("Domain {$currentDomain} is not allowed for design {$designId}");
            return redirect()->route('home');

        }
        Log::error("Domain allowed for " . $currentDomain);
        
        $gtmContainer = $this->repository->loadLandingpageGTMContainer($currentDomain);
        if ($gtmContainer){
            $gtmContainerId = $gtmContainer->GTM;
        } else {
            $gtmContainerId = false;

        }
        // language from request else get default language or user language
        $lang = $this->repository->getLanguage($request, $config);
        $texts = $this->repository->loadLandingpageLanguageFile($designId, $lang);

        if ($texts) {
            $texts = json_decode(json_encode($texts));
        }
        $country = $this->repository->getCountry($country, $config);
        // get the country and get the page!
        $viewFile = sprintf('landers.%s.%s.%s', 'landingpages', $designId, $lang);

        if (View::exists($viewFile)) {
            // register the visit and all details
            $uuid = Str::uuid();
            //$visitDetails = visitService::registerVisit($request,$uuid);

            // we need to forward this for the buyer logic.
            $querystring = $request->getRequestUri();

            //   if (is_null($visitDetails->binom_uclick_id) && !is_null($visitDetails->campaign_key)) {
            // get the the binom details for this visit.
            $campaignKey = $request->get('key') ?? null;
            $optionalParameters = [
                "x-redir-pixel-url" => $currentDomain ?? "",
                "domain" => $currentDomain ?? "",
            ];
            //https://dealstrack.online/click.php?key=9531q75fjhapc0kozlrc&pixel={pixel}&adset.name={{adset.name}}&ad.name={{ad.name}}&x-redir-pixel-url={domain}&ad.id={{ad.id}}&source=FB&adset.id={{adset.id}}&spath={path}&t8={{t8}}
            $binomTracker = new BinomClickApi($campaignKey, $optionalParameters);

            $campaignData = $binomTracker->getDataClick();


            // register the click in Binom
            $fireClick = $binomTracker->setLPClick();
            if ($binomTracker) {
                $trackingDetails = $campaignData; // get all clickdata
                $binom_click_id = $trackingDetails['clickid'] ?? 1;
                //Log::debug("Binom returns  " . serialize($trackingDetails));
                   //  $visitDetails->binom_uclick_id = $trackingDetails['uclick'] ?? 1;
                  //   $visitDetails->binom_click_id = $trackingDetails['clickid'] ?? 1;
                  //   $visitDetails->binom_country_code = $trackingDetails['geo']['country_code'] ?? 'US';
                  //   $visitDetails->country_id = $trackingDetails['geo']['country_id'] ?? 233;
                //     $visitDetails->save();
            }
            // }
            // if facebook then facebook = true and pixel is grabbed from URL

            $facebook = false; //default

            if ($request->has('placement')){
                if ($request->get('placement') == "Facebook") {
                    $facebook = true;
                    $fbPixel = $request->get('pixel', "");
                }
            }
            if ($request->has('aff_sub')){
                if ($request->get('aff_sub') == "Facebook") {
                    $facebook = true;
                    $fbPixel = $request->get('pixel', "");
                }
            }
            
            return view($viewFile)->with(
                [
                    'uuid' => $uuid,
                    'texts' => $texts ?? new stdClass(),
                    'country' => $country,
                    'language' => $lang,
                    'design_id' => $designId,
                    'gtmContainerId' => $gtmContainerId ?? '',
                    'astrologist' => $config['astrologist'] ?? '',
                    'placement' => $request->get('placement') ?? $request->get('aff_sub') ?? '',
                    'visit_id' => null,//$visitDetails->id ?? null,
                    'facebook' => $facebook ?? null,
                    'querystring' => $querystring ?? null,
                    'pixel' => $fbPixel ?? null,
                    'binom_click_id' => $binom_click_id ?? null,
                    'campaign_id' => isset($trackingDetails['campaign']) ? $trackingDetails['campaign']['campaign_id'] : null,
                ]
            );
        }

        return "View not configured for design {$designId}";
    }
}
