<?php
 
use App\Models\Data;
use App\Models\Post;
 
use App\Models\data1;
use App\Http\Controllers\just;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\justController;
use App\Http\Controllers\studController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\imageController;
use App\Http\Controllers\StudsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\relationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Resouce Route
Route::resource("/teacher",TeacherController::class);

Route::resource("/sample",StudsController::class);



Route::get("/restore/{id}",[StudsController::class,'restoreTask']);


Route::get("/students",[studentController::class,'index']);
Route::get("/student/create",[StudentController::class,'create']);
Route::post("/student/store",[StudentController::class, 'store']);
Route::get("/student/{id}",[StudentController::class, 'show']);
Route::get("/student/edit/{id}",[StudentController::class, 'edit']);
Route::put("/student/{id}",[StudentController::class, 'update']);




// Route::get("/hello",function() {
//     return "hello world";
// });

Route::get('/month/{num}', function ($num) {
    if($num==1){
        return 'Jan';
    }else if($num==2){
        return 'Feb';
    }

});
 
Route::get('user',function(){
    return auth::user();
});

Route::get('/abot', function () {
    return view('wel');
});
 


Route::get('/first/{id}',[just::class,'first']);
Route::get("/about",[just::class,'sample']);
Route::get("/abouts",[just::class,'index']);
Route::get("/about/create",[just::class,'create']);
Route::post("/about/example",[just::class,'example']);
Route::get("data-edit/{id}",[just::class,'edit']);
Route::get("data-delete/{id}",[just::class,'delete']);
Route::get("show/{id}",[just::class,'show']);
Route::put("/stud/{id}",[StudentController::class, 'update']);



Route::get("/abouts",[studController::class,'index']);
Route::get("/abouts/form",[studController::class,'create']);
Route::post("/abouts/store",[studController::class,'store']);
Route::get("shows/{id}",[studController::class,'show']);
Route::get("/abouts/edit/{id}",[studController::class, 'edit']);
Route::put("/stud/{id}",[studController::class, 'update']);



Route::view('home','home')->middleware('age');
Route::view('users','users')->middleware('age');
Route::view('just','just')->middleware('age');
 

 
Route::get('test',[TestController::class,'test'])->middleware('Test');


// Route::middleware(['Test'])->group(function(){
//     Route::get('test',[TestController::class,'test']);

// }) ;


 


Route::get('/image',[imageController::class,'imageUploadForm'] );
Route::post('/store',[imageController::class,'imageUpload']);


Route::get('/post',[StudsController::class,'addpost']);
Route::get('/post/{id}',[StudsController::class,'addposts']);

Route::get('/ones',[StudsController::class,'one']);


Route::get('/one', function () {
    
    return Data::find(1)->load('Student');
    
});


Route::get('/twos', function () {
    // return view('welcome');

   return Post::find(1)->load("address");
});


Route::get('/gets', function () {
    // return view('welcome');

   return data1::find(1)->load("student1");
});

 

Route::get('/get',[relationController::class,'index']);