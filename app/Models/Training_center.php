<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_center extends Model
{
    protected $fillable=[
        'name',
        'location',
        'imagen_url',
        'imagen_public_id',
    ];


    use HasFactory;
    public function environments(){
        return $this->hasMany('App\Models\Environment');
    }
    public function programs(){
        return $this->hasMany('App\Models\Program');
    }
}
