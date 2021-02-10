<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Mentor;
use File;
use Storage;

class StudentController extends Controller
{
    public function index()
    {
        

            // $mentor=Mentor::all();
            // $mentor=Mentor::paginate(5); //by default 15
            // $students = DB::table('students')
            // ->select(DB::raw('count(*) as student_count, StatusPL_Kod'))
            // ->where('StatusPL_Kod', '=', '01')
            // ->get();
            $students = \App\Models\Student::paginate();
           // dd($trainings);  //cara debug dump & die
           return view('students.index', compact('students'));
           //recources/views/cars/index.blade.php
    
        
    }

    public function show()
    {
        // $this->authorize('view', $mentor);
        // find id on table using model
        //$training = Training::find($id);
        // this function is using Binding Model

        // return to view
        $mentors = Mentor::find('00527');
        // dd($student);
        // $mentor = DB::table('RKD_Mentor')->find('00527');
        return view('test.index', compact('mentors'));
        
    }
}
