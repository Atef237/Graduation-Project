<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CarBrandTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['name','locale'];

}
