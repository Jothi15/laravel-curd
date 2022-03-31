<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function test(Request $request){

        // dd($request->all());
        return  'My name is' . ' ' . $request->get('admin');
    }
}
