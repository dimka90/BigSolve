<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

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
// Route::redirect('/','en');
Route::get('/{local}',[WebController::class,'welcome']);
Route::get('/partnership/{local}',[WebController::class,'partnership']);
Route::get('/volunteer/{local}',[WebController::class,'volunteer']);


// Route::group(['prefix'=>'{local}'],function (){

    // Route::get('/', function () {
    //     // App::setLocale('hs');
    //     // dd(App::getLocale());
    //     return view('welcome');
    // // });
    // Route::get('/partnership',[WebController::class,'partnership']);
    //     // App::setLocale('en');
        // dd(App::getLocale()
 
// });