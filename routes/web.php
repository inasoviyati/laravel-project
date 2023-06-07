<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BAPController;
use App\Http\Controllers\UserController;


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

// Route::get('/instructor', function(){
//   return view('admin/instructor'); 
      
//   });

  Route::get('/', function(){
    return view('admin/index'); 
        
    });

    Route::resources([
      'instructor'=> InstructorController::class,
      'student'=> StudentController::class,
      'bap'=> BAPController::class,


      
    ]);
    
        

