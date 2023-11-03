<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Server
 *
 * @property int $id
 * @property string $name
 * @property string|null $color
 * @property string|null $type
 * @property string|null $size
 * @property string|null $region
 * @property string|null $ip_address
 * @property string|null $private_ip_address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Server newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Server newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Server query()
 * @method static \Illuminate\Database\Eloquent\Builder|Server whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Server whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Server whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Server whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Server whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Server wherePrivateIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Server whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Server whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Server whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Server whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Server extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $hidden = ['created_at','updated_at'];
}
