<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class imageController extends Controller
{
    public function imageUploadForm(){
        return view('students.image');
    }

    public function imageUpload(Request $request){
        Data::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'image'=>$request->image
        ]);
        $request->validate([
            'image'=>'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        return back()
        ->withSuccess('You have succesfully uploaded the image!')
        ->withImageName( $imageName );
    }
}
