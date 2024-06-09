<?php

namespace App\Models\old;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Car extends Model implements HasMedia
{
    use HasFactory;
    use Translatable;
    use  InteractsWithMedia ;
    public $translatedAttributes = ['name','description','driver_name'];
    protected $fillable = array(
        'manufacturing_year',
        'license_number',
        'driver_phone',
        'day_rent_price',
        'country_id',
        'city_id',
        'car_brand_id',
        'car_type_id',
        'is_active'
    );

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function car_brand()
    {
        return $this->belongsTo(CarBrand::class,'car_brand_id');
    }
    public function car_type()
    {
        return $this->belongsTo(CarType::class,'car_type_id');
    }
}
