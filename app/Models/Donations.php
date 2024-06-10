<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;

    protected $table = 'donations';

    protected $fillable = ['donor_id','project_id','amount','status'];

    public function donor()
    {
        return $this->belongsTo(User::class,'donor_id');
    }


    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }
}
