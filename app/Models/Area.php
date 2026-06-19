<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    protected $fillable=[
        'name',
    ];
    
    use HasFactory;
    public function courses(){
        return $this->hasMany('App\Models\course');
    }
    public function teachers(){
        return $this->hasMany('App\Models\Teacher');
    }
}
