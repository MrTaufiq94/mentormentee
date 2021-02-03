<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;

class MentorController extends Controller
{
    public function index()
    {
        

            $mentor=Mentor::all();
            //$lokasi=Lokasi::paginate(3); //by default 15
           // dd($trainings);  //cara debug dump & die
           return view('mentors.index', compact('mentor'));
           //recources/views/cars/index.blade.php
    
        
    }
}
