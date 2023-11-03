<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\ForgeSite
 *
 * @property int $id
 * @property int $server_id
 * @property string|null $name
 * @property string|null $directory
 * @property int $wildcards
 * @property string|null $status
 * @property int $quick_deploy
 * @property string|null $deployment_status
 * @property int|null $is_secured
 * @property mixed|null $tags
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite query()
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereDeploymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereDirectory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereIsSecured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereQuickDeploy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereServerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ForgeSite whereWildcards($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Pushnami|null $pushnami
 * @property-read \App\Models\Server $server
 */
class ForgeSite extends Model
{
    use HasFactory;
    protected $casts = ['is_secured' => 'boolean'];
    protected $guarded = [];

    public function pushnami(){
        return $this->hasOne(Pushnami::class);
    }
    public function server(){
        return $this->belongsTo(Server::class);
    }
}
