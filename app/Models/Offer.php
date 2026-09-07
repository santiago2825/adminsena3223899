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
    'program_id'
    ];
    public function program(){
        return $this->belongsTo('App\Models\Program');
    }

}
