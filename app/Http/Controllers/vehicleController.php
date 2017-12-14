<?php

namespace App\Http\Controllers;

use App\vehicle;
use Illuminate\Http\Request;

class vehicleController extends Controller
{
    public function helloworld(Request $request){
        return vehicle::all(['model','xlm','name']);
    }
    //
}
