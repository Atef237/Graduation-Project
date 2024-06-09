<?php

namespace App\Models\old;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable = array('phone_key', 'lng', 'lat','country_id','is_active');

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
