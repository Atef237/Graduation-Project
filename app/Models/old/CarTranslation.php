<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class CarTranslation extends Model implements HasMedia
{
    use HasFactory;
    use  InteractsWithMedia ;
    protected $fillable = [ 'name','description','driver_name','locale'];

}
