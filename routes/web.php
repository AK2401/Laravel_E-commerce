<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OprationController;
use App\Http\Controllers\frontcontroller;
use App\Http\Controllers\OderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\usercontroller;


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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if(Auth::user()->user_type==0)
    {
        return redirect('/');
    }
    else
    {
        return view('back.admin.dashboard');
    }
})->name('dashboard');


// back end pages routes

Route::get('/add',[OprationController::class,'create']);
Route::post('/add',[OprationController::class,'store']);
Route::get('/view',[OprationController::class,'show']);
Route::get('/update/{id}',[OprationController::class,'edit']);
Route::post('/update',[OprationController::class,'update']);
Route::get('/delete/{id}',[OprationController::class,'destroy']);
Route::get('/userprofile',[OprationController::class,'index']);


 //front end pages routes
 
Route::get('/',[frontcontroller::class,'home']);
Route::get('/order',[frontcontroller::class,'order']);
Route::get('/cart',[frontcontroller::class,'cart']);
Route::get('/contact',[frontcontroller::class,'contact']);




//fornt end oder routes

Route::get('/orderview',[OderController::class,'index']);
Route::get('/about/{id}',[OderController::class,'frontindex']);
Route::get('/about/{product_id}/{user_id}',[OderController::class,'store']);
Route::get('/oder/delete/{id}',[OderController::class,'destroy']);

Route::get('admin/oder/delete/{id}',[OderController::class,'delete']);


//fornt end cart routes

Route::get('/cart/add/{product_id}/{user_id}',[CartController::class,'store']);
Route::get('/cart',[CartController::class,'index']);
Route::get('/delete/{id}',[CartController::class,'destroy']);

//userscontroller rotutes

Route::post('/contact',[usercontroller::class,'update']);
