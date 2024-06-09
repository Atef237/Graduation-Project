<?php

namespace App\Models\old;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Hotel extends Model implements HasMedia
{
    use HasFactory;
    use Translatable;
    use  InteractsWithMedia;

    public $translatedAttributes = ['name'];
    protected $fillable = array(
        'phone',
        'website',
        'info',
        'lng',
        'lat',
        'country_id',
        'city_id',
        'hotel_category_id',
        'is_active'
    );

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(HotelCategory::class, 'hotel_category_id');
    }
}
