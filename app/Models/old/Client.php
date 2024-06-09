<?php

namespace App\Models\old;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Client extends Model implements HasMedia
{
    use HasFactory;
    use  InteractsWithMedia ;

    protected $fillable =[
        'name',
        'email',
        'phone',
        'nationality',
    ];

    public function reservations(){
        return $this->hasMany(Reservation::class,'client_id');
    }

}
