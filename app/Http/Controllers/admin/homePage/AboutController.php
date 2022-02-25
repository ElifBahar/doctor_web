<?php

namespace App\Http\Controllers\admin\homePage;

use App\Http\Controllers\Controller;
use App\Models\HomeAbout;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts = HomeAbout::latest()->get();
        return view('admin.homePage.about.index',compact('abouts'));
    }

    public function AddAbout(){
        return view('admin.homePage.about.create');
    }

    public function StoreAbout(Request $request){

        HomeAbout::insert([
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('about-index')->with('success','Hakkımda Başaarıyla Oluşturuldu');

    }
}
