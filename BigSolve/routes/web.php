<?php

use App\Http\Controllers\WebController;

use App\Http\Controllers\AdminController;

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
Route::redirect('/','en');

Route::get('/{local}',[WebController::class,'welcome']);

Route::get('{local}/partnership/',[WebController::class,'partnership'])->name('partnership');

Route::get('{local}/volunteer/',[WebController::class,'volunteer'])->name('volunteer');


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

Route::post('/register', [WebController::class, 'register']);

Route::post('/volunteering/{local}', [WebController::class, 'volunteering']);

Route::get('/login/{local}', [WebController::class, 'index']);

Route::get('/current/{local}', [WebController::class, 'current']);

Route::get('/logout/{local}', [WebController::class, 'logout']);

Route::get('/admin/{local}', [WebController::class, 'adminHome'])->middleware('usertype');

Route::post('postlogin/{local}', [WebController::class, 'login']);

Route::get('/adminPartner/{local}', [AdminController::class, 'adminPartner']);