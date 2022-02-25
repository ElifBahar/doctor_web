<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;

class FrontHomeController extends Controller
{
    public function index(){
        $sliders = Slider::get();

        return view('frontend.home',compact('sliders'));
    }
}
