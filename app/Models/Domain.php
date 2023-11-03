<?php

namespace App\Models;

use App\Models\ForgeSite;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Domain
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $name
 * @property string|null $host_ip
 * @property string|null $hostname
 * @property string|null $queue_name
 * @property string|null $fbpixel
 * @property string|null $fbtoken
 * @method static \Illuminate\Database\Eloquent\Builder|Domain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain query()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereFbpixel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereFbtoken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereHostIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereHostname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereQueueName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $forge_site_id
 * @property-read ForgeSite|null $forgeSite
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereForgeSiteId($value)
 */
class Domain extends Model
{
    use HasFactory;
    public function forgeSite(){
        return $this->belongsTo(ForgeSite::class);
    }
}
