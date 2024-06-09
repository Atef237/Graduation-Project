<?php

namespace App\Models\old;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Room extends Model implements HasMedia
{
    use HasFactory;
    use Translatable;
    use  InteractsWithMedia ;
    public $translatedAttributes = ['name','description'];
    protected $fillable = array(
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'night_price',
        'floor_number'  ,
        'beds_number' ,
        'is_children_available',
        'hotel_id',
        'room_category_id',
        'is_active'
    );

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function category()
    {
        return $this->belongsTo(RoomCategory::class,'room_category_id');
    }
}
