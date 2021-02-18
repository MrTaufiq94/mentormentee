<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Mentor;
use App\Models\MentorPL;
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

    public function show($nostaff)
    {
        // $this->authorize('view', $mentor);
        // find id on table using model
        //$training = Training::find($id);
        // this function is using Binding Model

        // return to view

  
        // $mentor = DB::table('RKD_Mentor')->find('00527');
        // return view('test.index', compact('mentors'));
        $mentor = Mentor::find($nostaff)->getStudent;
        // $mentor = \App\Models\Mentor::paginate();
        return view('mentors.mentormentee')->with('mentor', $mentor);

        // return Mentor::find($nostaff)->getStudent; yg asal
        

        
    }

    public function getStudent($nostaff)
    {
        // $this->authorize('view', $mentor);
        // find id on table using model
        //$training = Training::find($id);
        // this function is using Binding Model

        // return to view

  
        // $mentor = DB::table('RKD_Mentor')->find('00527');
        // return view('test.index', compact('mentors'));
        $mentor = Mentor::find($nostaff);
        // $mentor = \App\Models\Mentor::paginate();
        return view('test.index')->with('mentor', $mentor);

        // return Mentor::find($nostaff)->getStudent; yg asal
        

        
    }
}
