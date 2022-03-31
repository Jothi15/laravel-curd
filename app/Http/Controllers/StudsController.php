<?php

namespace App\Http\Controllers;

use App\Models\Data;
 
use App\Models\data1;
use App\Models\Student;
use App\Models\student1;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
 

class StudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $sample = Data::paginate(3);
          //$sample = Data::get();
        return view('students.studs',compact('sample'));
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
        
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);
           
        data::create([
           'name' => $request->name,
           'address' => $request->address,
        ]);
       
         return redirect('/sample');
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(data $sample)
    {
        // $stud = data::find($id);
        return view('students.studshow',compact('sample'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(data $sample)   
    {
       // $sample = data::find($id);
          return view('students.studedit',compact('sample'));
          

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
       $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        data::where("id",$id)->update([
            'name' => $request->name,
            'address' => $request->address,

        ]);

        return redirect('sample/');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // $stud = data::find($id);
          data::destroy($id);
          Session::flash('message','Data is Deleted');
          Session::flash('class','danger');
    return redirect()->back();
    }
    public function restoreTask($id)
    {
       // $stud = data::find($id);
          data::onlyTrashed()->find($id)->restore();
    return redirect()->back(); 
    }


     public function addpost()
     {
         $response = http::get('https://jsonplaceholder.typicode.com/posts');
         return $response->json();
     }
     public function addposts($id)
     {
         $response = http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
         return $response->json();
     }


    //   public function one()
    //   {
    //          return data1::find(1)->load('student1');
        
    //     }

}
