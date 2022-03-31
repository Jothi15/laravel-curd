<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Address;
use Illuminate\Http\Request;

class relationController extends Controller
{
    public function index()
    {
       Post::create([ "title" => "Hello world", "decription" => "decription new world", "address_id" => "1", "status" => "1"]);
     Address::create([
         'address' => "JP Nagar",
         'phone' => "1234567890",
     ]);
    }
}
