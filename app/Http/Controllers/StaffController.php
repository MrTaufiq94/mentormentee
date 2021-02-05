<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use File;
use Storage;

class StaffController extends Controller
{
    public function index()
    {
        

            // $mentor=Mentor::all();
            // $mentor=Mentor::paginate(5); //by default 15
            $staffs = \App\Models\Staff::paginate();
           // dd($trainings);  //cara debug dump & die
           return view('staffs.index', compact('staffs'));
           //recources/views/cars/index.blade.php
    
        
    }
}
