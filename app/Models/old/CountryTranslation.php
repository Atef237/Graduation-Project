<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CountryTranslation extends Model
{
    use HasFactory;
    protected $fillable = [ 'name','locale'];

}
