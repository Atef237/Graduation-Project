<?php

namespace App\Models\old;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelCategory extends Model
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = array('is_active');

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

}
