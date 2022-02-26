<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class FrontAboutController extends Controller
{
    public function index(){
        return view('frontend.aboutPages.about.index');
    }
}
