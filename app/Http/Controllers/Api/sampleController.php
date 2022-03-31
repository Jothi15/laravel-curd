<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Http\Request;

class sampleController extends Controller
{
    function index(){
        $sample=Data::all();

        return $sample;
          
    }
     

    function store(Request $request)
    {
        data::create([
            'name'=>$request->name,
            'address'=>$request->address,
            
        ]);
         return "Data Successfully Saved";
 
 
    }
        function destroy($id)
        {
            data::destroy($id);
            return "Data Delete successfully";


        }



}
