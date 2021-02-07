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

    public function show(Mentor $mentor)
    {
        // $this->authorize('view', $mentor);
        // find id on table using model
        //$training = Training::find($id);
        // this function is using Binding Model

        // return to view
        $mentor = Mentor::find($NoStaf);
        return view('mentors.mentormentee', compact('mentor'));
    }
}
