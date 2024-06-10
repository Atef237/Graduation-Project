<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;


class DonationScope extends Model
{
    use HasFactory;
    protected  $table = 'donation_scopes';

    protected $fillable = [
        'name',
        'admin_id',
        'status'
    ];
}
