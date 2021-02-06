<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use File;
use Storage;

class StudentController extends Controller
{
    public function index()
    {
        

            // $mentor=Mentor::all();
            // $mentor=Mentor::paginate(5); //by default 15
            $students = \App\Models\Student::paginate();
           // dd($trainings);  //cara debug dump & die
           return view('students.index', compact('students'));
           //recources/views/cars/index.blade.php
    
        
    }
}
