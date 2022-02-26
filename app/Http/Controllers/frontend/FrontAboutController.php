<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class FrontAboutController extends Controller
{
    public function indexAbout(){
        return view('frontend.aboutPages.about.index');
    }

    public function indexEducation(){
        return view('frontend.aboutPages.education.index');
    }
}
