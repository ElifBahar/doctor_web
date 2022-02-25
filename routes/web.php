<?php

use App\Http\Controllers\admin\homePage\SliderController;
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

Route::get('/', function () {
    return view('frontend.home');
});



Route::group((['prefix' => 'panel', 'middleware' => ['auth:sanctum', 'verified']]), function (){
    Route::get('/home',function (){
        return view('admin.dashboard.home');
    })->name('dashboard');


    Route::group(['prefix' => 'home'], function(){

        Route::get('/slider',[SliderController::class,'index'])->name('slider-index');
        Route::get('/slider/add',[SliderController::class, 'AddSlider'])->name('slider-add');

    });

});
