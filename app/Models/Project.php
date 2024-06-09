<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Project extends Model implements HasMedia
{
    use HasFactory;
    use  InteractsWithMedia ;

    protected $table = 'project';

    protected $fillable=[
        'name',
        'admin_id',
        'donation_scope_id',
        'financial_balance'
    ];


    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }


    public function donation_scope()
    {
        return $this->belongsTo(DonationScope::class, 'donation_scope_id', 'id');
    }
}
