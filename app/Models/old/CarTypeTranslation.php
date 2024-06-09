<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CarTypeTranslation extends Model
{
    use HasFactory;
    protected $fillable = ['name','locale'];

}
