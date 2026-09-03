<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{

    use HasFactory;

    protected $fillable = [
        'course_number',
        'day',
        'program_id',
    ];
    public function apprentices(){
        return $this->hasMany('App\Models\Apprentice');
    }
    public function program(){
        return $this->belongsTo('App\Models\Program');
    }
    public function environments(){
        return $this->belongsToMany('App\Models\Environment');
    }
    public function teachers(){
        return $this->belongsToMany('App\Models\Teacher');
    }
}
