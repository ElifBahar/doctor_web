<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\HomeAbout;
use App\Models\Slider;

class FrontHomeController extends Controller
{
    public function index(){
        $sliders = Slider::get();
        $about_me = HomeAbout::latest()->first();

        return view('frontend.home',compact('sliders','about_me'));
    }
}
