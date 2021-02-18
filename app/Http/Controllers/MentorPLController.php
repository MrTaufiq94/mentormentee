<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\MentorPL;

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
        // $mentor = \App\Models\Mentor::paginate();
        return view('mentors.mentormentee')->with('mentor', $mentor);

        // return Mentor::find($nostaff)->getStudent; yg asal
        

        
    }
}
