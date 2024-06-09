<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class PackageTranslation extends Model implements HasMedia
{
    use HasFactory;
    use  InteractsWithMedia ;
    protected $fillable = [ 'name','description','locale'];

}
