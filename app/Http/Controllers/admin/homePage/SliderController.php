<?php

namespace App\Http\Controllers\admin\homePage;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->get();
        return view('admin.homePage.slider.index',compact('sliders'));
    }

    public function AddSlider(){
        return view('admin.homePage.slider.create');
    }

    public function StoreSlider(Request $request){
        $slider_image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(1920,1088)->save('image/slider/'.$name_gen);

        $last_img = 'image/slider/'.$name_gen;

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('slider-index')->with('success','Slider görseli başarıyla eklendi.');
    }
}
