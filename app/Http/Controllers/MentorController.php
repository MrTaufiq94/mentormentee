<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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

    public function show()
    {
        // $this->authorize('view', $mentor);
        // find id on table using model
        //$training = Training::find($id);
        // this function is using Binding Model

        // return to view
        // $mentors = Mentor::find('00527');
        // dd($student);
        // $mentor = DB::table('RKD_Mentor')->find('00527');
        // return view('test.index', compact('mentors'));
        return "One to many";
        
    }
}
