<?php


namespace App\Services;

use App\Models\Domain;
use App\Models\Visit;
use Illuminate\Http\Request;
use App\Jobs\FacebookPageVisit;
use Illuminate\Support\Facades\Log;

class visitService
{
    public static function registerVisit(Request $request){
        $visit = new Visit();
        $visit->fbclid = $request->get('fbclid') ?? null;
        $visit->gclid = $request->get('gclid')?? null;
        $visit->campaign_key = $request->get('key') ?? null;
        $visit->user_agent = $request->userAgent();
        $visit->ip = $request->getClientIp();
        $visit->placement = $request->get('placement') ?? null;
        $visit->querystring = $request->getRequestUri();
        $visit->domain_id = Domain::whereName($request->getHttpHost())->first()->id ?? null;
        $visit->save();
        $visit->refresh();
        Log::debug("visit registered for id = " . $visit->id);
        return $visit;
    }


}
