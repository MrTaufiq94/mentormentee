<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staf;

class StafController extends Controller
{
    public function index()
    {
        

            // $mentor=Mentor::all();
            // $mentor=Mentor::paginate(5); //by default 15
            $stafs = \App\Models\Staf::paginate();
           // dd($trainings);  //cara debug dump & die
           return view('stafs.index', compact('stafs'));
           //recources/views/cars/index.blade.php
    
        
    }
}
