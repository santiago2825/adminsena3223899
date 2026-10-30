<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    protected $fillable=[
        'number',
        'brand',
        'imagen_url',
        'imagen_public_id',
        'environment_id',
    ];
    
    use HasFactory;
    public function environment(){
        return $this->belongsTo(Environment::class);
    }
}
