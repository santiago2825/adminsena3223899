<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'teacher_id',
        'training_center_id'
    ];


    public function computer(){
        return $this->hasMany('App\Models\computer');
    }
    public function training_centers(){
        return $this->belongsTo('App\Models\Training_center');
    }
    public function courses(){
        return $this->hasMany('App\Models\course');
    }
    public function teachers(){
        return $this->belongsToMany('App\Models\Teacher');
    }
}
