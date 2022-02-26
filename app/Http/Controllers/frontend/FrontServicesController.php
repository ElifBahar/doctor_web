<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class FrontServicesController extends Controller
{
    public function indexClinical(){

        return view('frontend.services.clinicalServices.index');
    }
}
