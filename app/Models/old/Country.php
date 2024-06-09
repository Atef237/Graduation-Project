<?php

namespace App\Models\old;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Country extends Model implements HasMedia
{
    use HasFactory;
    use Translatable;
    use  InteractsWithMedia ;
    public $translatedAttributes = [ 'name'];
    protected $fillable = array('code_name', 'lng', 'lat', 'phone_key', 'is_active');

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
