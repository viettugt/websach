<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\tintuc;
use Cart;



class FontendController extends Controller
{
    public function home(){
        $listCart = Cart::content();
        return view('fontend.layouts.home', compact('listCart'));
    }
    public function homepage(){
        $listCart = Cart::content();
        $showslides = Slider::all();
        $cate = Category::all();
        $showpro = Product::all();
        $pro1 = Product::where('cate_id',1)->take(6)->get();
        $pro2 = Product::where('cate_id',2)->take(6)->get();
        $pro3 = Product::where('cate_id',3)->take(6)->get();
        $pro4 = Product::where('cate_id',4)->take(6)->get();
        $pro5 = Product::where('cate_id',5)->take(6)->get();
        $pro6 = Product::where('cate_id',6)->take(6)->get();
        $pro7 = Product::where('cate_id',7)->take(6)->get();
        $pro8 = Product::where('cate_id',8)->take(6)->get();
        $tintuc = tintuc::all();
        return view('fontend.layouts.trangchu',compact('listCart','showslides','cate','showpro','pro1','pro2','pro3','pro4','pro5','pro6','pro7','pro8','tintuc'));
    }
    public function introduce(){
        $listCart = Cart::content();
        $cate= Category::all();
        return view('fontend.layouts.gioithieu',compact('cate','listCart'));
    }
    public function tutorial(){
        $listCart = Cart::content();
        $cate= Category::all();
        return view('fontend.layouts.huongdan',compact('cate','listCart'));
    }
    public function policy(){
        $listCart = Cart::content();
        $cate= Category::all();
        return view('fontend.layouts.chinhsach',compact('cate','listCart'));
    }
    public function contact(){
        $listCart = Cart::content();
        $cate= Category::all();
        return view('fontend.layouts.lienhe',compact('cate','listCart'));
    }
    public function detail($id){
        $listCart = Cart::content();
        $cate= Category::all();
        $detailpr = Product::find($id);
        $pro1 = Product::where('cate_id',1)->take(6)->get();
        return view('fontend.layouts.chitietsanpham',compact('detailpr','cate','listCart','pro1'));
    }
    public function danhmucsach($id){
        $listCart = Cart::content();
        $cate= Category::all();
        $pro1 = Product::where('cate_id',$id)->take(20)->get();
        $list_product = Product::paginate(1);
        return view('fontend.layouts.detail',compact('cate','pro1','list_product'));
    }
    public function tintuc(){
        $listCart = Cart::content();
        $cate= Category::all();
        $tintuc=tintuc::all();
        return view('fontend.layouts.tintuc',compact('cate','listCart','tintuc'));
        
    }
    public function getAddCart($id){
        $product = Product::find($id);
        $addCart = Cart::add(['id' => $id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'options' => ['image' => $product->image]]);
        
        return back()->with('thongbao_cart','Sản phẩm đã được thêm vào giỏ hàng');
    }
    public function deleteCart($id){
        if($id == 'all'){
            Cart::destroy();
        }else{
            Cart::remove($id);
        }
        return back();
    }
    public function detailTintuc($id){
        $listCart = Cart::content();
        $cate= Category::all();
        $detailTT = tintuc::find($id);
        return view('fontend.layouts.chitiettintuc',compact('detailTT','cate','listCart'));
    }
    public function sukiensale(){
        $listCart = Cart::content();
        $cate= Category::all();
        return view('fontend.layouts.sukiensale',compact('cate','listCart'));
    }
    
}