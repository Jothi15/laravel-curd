<?php

namespace App\Http\Controllers;

use App\Models\Pen;
use App\Models\Paper;
use Illuminate\Http\Request;

class penController extends Controller
{
    public function index()
    {
       Pen::create([ "title" => "Hello world", "decription" => "decription new world", "address_id" => "1", "status" => "1"]);
     Paper::create([
         'address' => "JP Nagar",
         'phone' => "1234567890",
     ]);
    }
}
