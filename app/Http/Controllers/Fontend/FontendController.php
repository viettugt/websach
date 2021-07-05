<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;



class FontendController extends Controller
{
    public function home(){
        return view('fontend.layouts.home');
    }
    public function homepage(){
        $showslides = Slider::all();
        $cate = Category::all();
        $showpro = Product::all();
        return view('fontend.layouts.trangchu',compact('showslides','cate','showpro'));
    }
    public function introduce(){
        $cate= Category::all();
        return view('fontend.layouts.gioithieu',compact('cate'));
    }
    public function tutorial(){
        $cate= Category::all();
        return view('fontend.layouts.huongdan',compact('cate'));
    }
    public function policy(){
        $cate= Category::all();
        return view('fontend.layouts.chinhsach',compact('cate'));
    }
    public function contact(){
        $cate= Category::all();
        return view('fontend.layouts.lienhe',compact('cate'));
    }
    public function detail($id){
        $cate= Category::all();
        $detailpr = Product::find($id);
        return view('fontend.layouts.chitietsanpham',compact('detailpr','cate'));
    }
}
