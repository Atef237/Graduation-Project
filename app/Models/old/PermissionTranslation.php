<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PermissionTranslation
 *
 * @property int $id
 * @property int $permission_id
 * @property string $locale
 * @property string|null $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation wherePermissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermissionTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PermissionTranslation extends Model
{
    use HasFactory;
    protected $fillable = [ 'title','locale','description'];

}
