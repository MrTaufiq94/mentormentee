<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        

            $location=Location::all();
            //$lokasi=Lokasi::paginate(3); //by default 15
           // dd($trainings);  //cara debug dump & die
           return view('locations.index', compact('location'));
           //recources/views/cars/index.blade.php
    
        
    }
}
