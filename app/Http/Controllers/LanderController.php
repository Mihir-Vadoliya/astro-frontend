<?php

namespace App\Http\Controllers;

use App\Backend\Client;
use App\Country;
use App\Http\Controllers\Api\LeadController;
use App\Repositories\LandingpageRepository;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Str;

class LanderController extends Controller
{
    private LandingpageRepository $repository;

    public function __construct()
    {
        $this->repository = new LandingpageRepository();
    }

    /**
     * @param         $design_id
     * @param Request $request
     *
     * @return Application|ResponseFactory|JsonResponse|Response
     */
    public function insertLandingpageLead($design_id, Request $request)
    {
        $config = $this->repository->loadLandingpageConfigFile($design_id);
        if (! $config) {
            return response("No config found in landers view for  {$design_id} ");
        }
        $requestData = [
            'uuid'           => $request->uuid ?? Str::uuid(),
            'gender'         => $request->gender == 'male' ? "M" : "F",
            'country'        => $request->country ?? null,
            'language'       => $request->language ?? null,
            'ip'             => $request->ip() ?? 'unknown',
            'user_agent'     => $request->userAgent() ?? 'unknown',
            'landingpageurl' => $request->fullUrl() ?? 'unknown',
            'campaign_id'    => 1,
            'first_name'     => $request->first_name ?? null,
            'last_name'      => $request->last_name ?? null,
            'city'           => $request->city,
            'phone'          => $request->phone,
            'timezome'       => $request->timezone ?? null,
            'year'           => $request->year,
            'month'          => $request->month,
            'day'            => $request->day,
            'tobhr'          => $request->tobhr,
            'tobmin'         => $request->tobmin,
            'concerns'       => $request->concerns,
            'email'          => $request->email,
            'offer'          => $config['offer_id'] ?? null,
            'lander'         => $lander ?? null,
            'astrologist'    => $config['astrologist'] ?? "lydia",
            'visit_id'       => $request->visit ?? null,
            'coreg'          => $request->coreg ?? null,
            'design_id'      => $design_id,
        ];

        $backendApi = new Client();
        $result     = $backendApi->storeLandingpageLead($requestData);

        return response()->json($result);
    }

    /**
     * @param int $customerId
     *
     * @return JsonResponse
     * @throws GuzzleException
     */
    public function checkStatus(int $customerId)
    {
        $backendApi = new Client();
        $result     = $backendApi->checkStatus($customerId);

        return response()->json($result);
    }

}
