<?php

namespace App\Http\Controllers\admin\homePage;

use App\Http\Controllers\Controller;
use App\Models\HomeWorkingDays;

class HPMainController extends Controller
{
    public function workingDays(){
        $workingDays = HomeWorkingDays::get();
        return view("admin.homePage.workingDays.index",compact('workingDays'));
    }
}
