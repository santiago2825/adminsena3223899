<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'center_id'
    ];

    public function course(){
        return $this->hasMany('App\Models\course');
    }
    public function areas(){
        return $this->belongsToMany('App\Models\Area');
    }
    public function training_centers(){
        return $this->belongsTo('App\Models\Training_center');
    }
}
