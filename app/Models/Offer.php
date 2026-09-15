<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
    'description',
    'state',
    'start_date',
    'end_date',
    ];
    public function programs(){
        return $this->hasMany('App\Models\Program');
    }

}
