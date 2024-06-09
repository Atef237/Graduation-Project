<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorProject extends Model
{
    use HasFactory;

    protected $table = 'donor_project';

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
