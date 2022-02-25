<?php

namespace App\Http\Controllers\admin\homePage;

use App\Http\Controllers\Controller;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->get();
        return view('admin.homePage.slider.index',compact('sliders'));
    }

    public function AddSlider(){
        return view('admin.homePage.slider.create');
    }
}
