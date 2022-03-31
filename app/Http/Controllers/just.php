<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use PHPUnit\Util\InvalidDataSetException;

class just extends Controller
{
    function sample() {
        $name = 'jothi';
        $age =  25;
        $address = 'Bangalore';
        return view('students.samples',compact('name','age','address'));
   }
  
   function create(){
    $data = data::get();
       return view('students.form',compact('data'));
   }

   function show(){

    $data = data::get();
    return $data;

   }
   function example(Request $request){
      
    data::create([
     "name" => $request->name,
       "address" => $request->address,
    ]); 
    return redirect()->back();

   }
   function edit($id){
       $data = data::find($id);
       

       return view('students.edit',compact('data'));

       return redirect()->back();
       
   }
function delete($id){

    $data = data::findOrFail($id);
    $data->delete();
    return redirect()->back();
    
}
}


 
 