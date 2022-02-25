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

    public function SliderEdit($id){
        $sliders = Slider::find($id);
        return view('admin.homePage.slider.edit',compact('sliders'));
    }

    public function SliderUpdate(Request $request, $id){
        $validateData =  $request->validate([
            'title' => 'required|min:4',
            'description' => 'required'
        ],
            [
                'title.required' => 'Lütfen başlık giriniz.',
                'title.min' => 'Başlık en az 4 karakterden oluşmalıdır.'
            ]);

        $old_image = $request->old_image;

        $slider_image = $request->file('image');

        if($slider_image){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($slider_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/slider/';
            $last_img = $up_location.$img_name;
            $slider_image->move($up_location,$img_name);

            unlink($old_image);
            Slider::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);

            return Redirect()->back()->with('success','Slider görseli başarıyla güncellendi');

        }else{
            Slider::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'created_at' => Carbon::now()
            ]);

            return Redirect()->back()->with('success','Slider görseli başarıyla güncellendi');

        }


    }

    public function SliderDelete($id){
        $slider_item = Slider::find($id);
        $slider_image = $slider_item->image;
        unlink($slider_image);


        Slider::find($id)->delete();

        return Redirect()->back()->with('success','Slider görseli başarıyla silindi.');
    }
}
