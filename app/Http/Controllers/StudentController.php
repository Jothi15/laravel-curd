<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index() {

        $student = "jothi";
        $age = 25;

         return view('students.index',compact('student','age'));
    }


    function create() {
        return view('students.createStudent');
    }


    function store(Request $request){
    
  
        Student::create([
            "name" => $request->name,
            "class" => $request->class,
        ]);
 

        return redirect()->back();
        
    }

}
