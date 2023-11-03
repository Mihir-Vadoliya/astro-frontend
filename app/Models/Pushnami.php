<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Pushnami
 *
 * @property int $id
 * @property int|null $forge_site_id
 * @property string $website
 * @property string|null $fe_script_tag_id Frontend script tag
 * @property string|null $manifest_script_tag_id Manifest script tag
 * @property string|null $sw_url Service Worker URL
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ForgeSite|null $forgeSite
 * @method static \Illuminate\Database\Eloquent\Builder|Pushnami newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pushnami newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pushnami query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pushnami whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pushnami whereFeScriptTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pushnami whereForgeSiteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pushnami whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pushnami whereManifestScriptTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pushnami whereSwUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pushnami whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pushnami whereWebsite($value)
 * @mixin \Eloquent
 */
class Pushnami extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function forgeSite(){
        return $this->belongsTo(ForgeSite::class);
    }
}
