<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;


class SliderController extends Controller
{
    public function list(){
        $slider=Slider::all();
        return view('backend.sliders.list',compact('slider'));
    }
    public function add(){
        return view('backend.sliders.addslide');
    }
    public function postadd(Request $request){
        $slide = new Slider;
        $slide->name = $request->name;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            // $Hinh= rand(4)."_".$name;
            // while (file_exists("upload/slide/".$Hinh)) {
            //     $Hinh= rand(4)."_".$name;
            // }
            $file->move('upload/slide/',$name);
            $slide->image=$name;
        }
        // $slide->image= $request->image;
        // dd($request->image);
        // dd($request->name);
        $slide->save();
        return redirect()->to('admin/list-slider');
    }
    public function showslide(){
        $showslides = Slider::all();
        return view('fontend.layouts.trangchu',compact('showslides'));
        
    }
    public function deleteSlide($id){
        $dele=Slider::find($id);
        // dd($dele->delete());
        $dele->delete();
        return redirect()->to ('/admin/list-slider');
        
    }
}
