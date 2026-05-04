<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;

class Consult extends Controller
{
    public function Consultas(){
        $david = Apprentice::find(1);
        return $david;
    }
        
    
}
