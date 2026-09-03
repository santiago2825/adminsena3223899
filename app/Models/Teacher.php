<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'document',
        'email',
        'user_id',
    ];
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function environments(){
        return $this->belongsToMany('App\Models\Environment');
    }
    public function courses(){
        return $this->belongsToMany('App\Models\course');
    }
}
