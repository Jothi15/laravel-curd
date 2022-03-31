<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class studController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stud = Data::get();
        return view('students.studs',compact('stud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.studform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        $data = new Data;
        $data->name = $request->input('name');
        $data->address = $request->input('address');
        $data->image = $request->input('image_Url');
        

        if($request->hasfile('image_Url'))
        {
            $file = $request->file('image_Url');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/data/', $filename);
            $data->image = $filename;
        }

        $data->save();
        return redirect()->back()->with('message',' Image Upload Successfully');
            
         return redirect('/abouts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stud = data::find($id);
        return view('students.studshow',compact('stud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $stud = data::find($id);
          return view('students.studedit',compact('stud'));

          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        data::where("id",$id)->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        return redirect("/abouts");
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
