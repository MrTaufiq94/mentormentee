<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\MentorPL;
use App\Models\Student;

class MentorPLController extends Controller
{
    public function show($nostaff)
    {
        // $this->authorize('view', $mentor);
        // find id on table using model
        //$training = Training::find($id);
        // this function is using Binding Model

        // return to view

  
        // $mentor = DB::table('RKD_Mentor')->find('00527');
        // return view('test.index', compact('mentors'));
        $mentor = Mentor::find($nostaff);
        
        // $student = Student::first();
        // dd($student);
        
        //$mentee = MentorPL::where('NoStaf','01459')->first();
        dd($mentor->student);
        // $mentor = \App\Models\Mentor::paginate();
        return view('mentors.mentormentee', compact(['mentor']));

        // return Mentor::find($nostaff)->getStudent; yg asal
        

        
    }
}
