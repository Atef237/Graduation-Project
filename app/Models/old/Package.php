<?php

namespace App\Models\old;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Package extends Model implements HasMedia
{
    use HasFactory;
    use  InteractsWithMedia ;
    use Translatable;

    public $translatedAttributes = ['name','description','driver_name'];
    protected $fillable = array(
        'admin_id',
        'updated_by',
        'hotel_id',
        'room_id',
        'car_id',
        'residence_days',
        'price',
        'currency',
        'start_date',
        'expire_date'
    );
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function car()
    {
        return $this->belongsTo(Car::class);
    }


}
