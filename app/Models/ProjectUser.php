<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    use HasFactory;

    protected $table = 'project_user';
    protected $fillable = [
        'project_id',
        'user_id',
        'marital_status',
        'number_of_family_members',
        'net_income',
        'address',
        'health_status',
        'status',
    ];



    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
