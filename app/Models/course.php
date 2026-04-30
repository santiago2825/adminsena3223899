<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    public function apprentices(){
        return $this->hasMany('App\Models\Apprentice');
    }
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }
    public function training_center(){
        return $this->belongsTo('App\Models\Training_center');
    }
    public function teachers(){
        return $this->belongsToMany('App\Models\Teacher');
    }
}
