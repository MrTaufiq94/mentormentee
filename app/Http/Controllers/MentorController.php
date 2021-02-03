<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use File;
use Storage;

class MentorController extends Controller
{
    public function index()
    {
        

            // $mentor=Mentor::all();
            // $mentor=Mentor::paginate(5); //by default 15
            $mentors = \App\Models\Mentor::paginate();
           // dd($trainings);  //cara debug dump & die
           return view('mentors.index', compact('mentors'));
           //recources/views/cars/index.blade.php
    
        
    }
}
