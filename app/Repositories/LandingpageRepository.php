<?php

namespace App\Repositories;

use Arr;
use File;
use Illuminate\Http\Request;

/**
 * App\Repositories\LandingpageRepository
 */
class LandingpageRepository
{
    /**
     * @param $country
     * @param $offer
     * @param $lander
     *
     * @return false|mixed
     */
    public function loadConfigFile($country, $offer, $lander)
    {
        $path = sprintf(
            '%s/%s/%s/%s/config.json',
            config('offers.path'),
            $country,
            $offer,
            $lander
        );

        if (! File::exists($path)) {
            return false;
        }

        return json_decode(file_get_contents($path), true);
    }

    /**
     * @param $design_id
     *
     * @return false|mixed
     */
    public function loadLandingpageConfigFile($design_id)
    {
        
        $path = sprintf(
            '%s/%s/%s/config.json',
            'landers',
            'landingpages',
            $design_id
        );

        if (! File::exists($path)) {
            return false;
        }

        return json_decode(file_get_contents($path), true);
    }

    /**
     * @param $design_id
     * @param $lang
     *
     * @return false|mixed
     */
    public function loadLandingpageLanguageFile($design_id, $lang)
    {
        $path = sprintf(
            '%s/%s/%s/%s.language.json',
            'landers',
            'landingpages',
            $design_id,
            $lang
        );

        if (! File::exists($path)) {
            return false;
        }
        $json=str_replace('},

            ]',"}

            ]",file_get_contents($path));
            $data = json_decode($json);
            
        return json_decode(file_get_contents($path), true);
    }

    public function loadLandingpageGTMContainer($domain)
    {
        $directory = \Storage::path('google');
        $files = \Storage::allFiles('google');
        $gtmContainerFile = 'google/gtmcontainer.json';

        $file = \Storage::exists($gtmContainerFile);
        if (!$file) {
            return false;
        } else {
            $domains =  \Storage::get($gtmContainerFile);
        }
        $domainsObject = json_decode($domains);
        return $domainsObject->$domain ?? false;
    }

    /**
     * @param $config
     *
     * @return false|mixed|string
     */
    public function guessLanguage($config)
    {
        //@todo get language based on customer uuid.
        $acceptLanguages = request()->server('HTTP_ACCEPT_LANGUAGE');
        
        $languages = collect(explode(',', $acceptLanguages))->map(function ($langItem) {
            return explode(';', $langItem)[0];
        });
        
        $offerLanguages = Arr::get($config, 'languages', null);

        $bestLanguageMatch = $offerLanguages[0];

        foreach ($languages as $language) {
            if (in_array(substr($language, 0, 2), $offerLanguages)) {
                $bestLanguageMatch = substr($language, 0, 2);
                break;
            }
        }
        return $bestLanguageMatch;
    }

    /**
     * Validate domain
     *
     * @param string $currentDomain
     * @param array  $config
     *
     * @return bool
     */
    public function validateDomain(string $currentDomain, array $config): bool
    {
        if (! $config['domains']) {
            return true;
        }
        
        foreach ($config['domains'] as $domain) {
            if ($domain === $currentDomain) {
                return true;
            }
        }

        return false;
    }

    /**
     * Validate language
     *
     * @param Request $request
     * @param array   $config
     *
     * @return string
     */
    public function getLanguage(Request $request, array $config): string
    {   
        $language = $request->get('lang', $this->guessLanguage($config));
        // verify the language
        if ($config['languages']) {
            if (! in_array($language, $config['languages'])) {
                $language = $config['languages'][0];
            }
        }

        return $language;
    }

    /**
     * Get country
     *
     * @param string $currentCountry
     * @param array  $config
     *
     * @return mixed
     */
    public function getCountry(string $currentCountry, array $config): string
    {
        // verify the country
        foreach ($config['countries'] as $country) {
            if ($country === $currentCountry) {
                return $currentCountry;
            }
        }

        return $config['countries'][0];
    }
}
