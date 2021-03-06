<?php

use App\Http\Controllers\admin\homePage\AboutController;
use App\Http\Controllers\admin\homePage\HPMainController;
use App\Http\Controllers\admin\homePage\SliderController;
use App\Http\Controllers\frontend\FrontAboutController;
use App\Http\Controllers\frontend\FrontHomeController;
use App\Http\Controllers\frontend\FrontServicesController;
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

/*Route::get('/', function () {
    return view('frontend.home');
});

*/

Route::get('/',[FrontHomeController::class,'index'])->name('front-home');
Route::get('/bahar', function (){
    return view("front.home");
});
Route::get('/about',[FrontAboutController::class,'indexAbout'])->name('front-about-index');
Route::get('/about/education',[FrontAboutController::class,'indexEducation'])->name('front-about-education-index');


Route::get('/services/clinical',[FrontServicesController::class,'indexClinical'])->name('front-services-clinical-index');

Route::group((['prefix' => 'panel', 'middleware' => ['auth:sanctum', 'verified']]), function (){
    Route::get('/home',function (){
        return view('admin.dashboard.home');
    })->name('dashboard');


    Route::group(['prefix' => 'home'], function(){

        Route::get('/slider',[SliderController::class,'index'])->name('slider-index');
        Route::get('/slider/add',[SliderController::class, 'AddSlider'])->name('slider-add');
        Route::post('/slider/store',[SliderController::class, 'StoreSlider'])->name('slider-store');
        Route::get('/slider/edit/{id}',[SliderController::class, 'SliderEdit'])->name('slider-edit');
        Route::post('/slider/update/{id}',[SliderController::class, 'SliderUpdate'])->name('slider-update');
        Route::get('/slider/delete/{id}',[SliderController::class, 'SliderDelete'])->name('slider-delete');

        // Home About
        Route::get('/about',[AboutController::class, 'index'])->name('about-index');
        Route::get('/about/add',[AboutController::class, 'AddAbout'])->name('about-add');
        Route::post('/about/store',[AboutController::class, 'StoreAbout'])->name('about-store');
        Route::get('/about/edit/{id}',[AboutController::class, 'AboutEdit'])->name('about-edit');
        Route::post('/about/update/{id}',[AboutController::class, 'AboutUpdate'])->name('about-update');
        Route::get('/about/delete/{id}',[AboutController::class, 'AboutDelete'])->name('about-delete');

        Route::get('/workingTimes',[HPMainController::class, 'workingDays'])->name('workingDays-index');
    });

});
