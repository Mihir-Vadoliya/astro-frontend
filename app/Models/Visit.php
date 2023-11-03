<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Visit
 *
 * @property int $id
 * @property int|null $campaign_id
 * @property int|null $offer_id
 * @property int|null $traffic_source_id
 * @property string|null $campaign_key
 * @property string|null $fbclid
 * @property string|null $gclid
 * @property string|null $binom_uclick_id
 * @property string|null $ip
 * @property mixed|null $ipv6
 * @property string|null $user_agent
 * @property string|null $querystring
 * @property string|null $source_url
 * @property int|null $domain_id
 * @property int|null $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Visit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereBinomClickId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereCampaignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereCampaignKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereDomainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereFbclid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereGclid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereIpv6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereQuerystring($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereSourceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereTrafficSourceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereUserAgent($value)
 * @mixin \Eloquent
 * @property string|null $binom_click_id
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereBinomUclickId($value)
 * @property string|null $placement
 * @property-read \App\Models\Domain|null $domain
 * @method static \Illuminate\Database\Eloquent\Builder|Visit wherePlacement($value)
 * @property string|null $binom_country_code
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereBinomCountryCode($value)
 */
class Visit extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $id;

    public function domain(){
        return $this->hasOne(Domain::class,'id','domain_id');
    }

}
