<?php


use App\Http\Controllers\Controller;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
     return view('welcome');
});

Route::get('/test',function(){
    $i=0;
    $fruits=['banana','apple','orange'];
    return view('test',['age'=> 19,'i'=>$i,'fruits'=>$fruits]);
});

Route::get('/logic',testController::class . '@welcome');


Route::get('/crud',function(){
    return view('crud');
});

