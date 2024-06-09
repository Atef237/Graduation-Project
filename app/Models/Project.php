<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model
{
    use HasFactory;

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
