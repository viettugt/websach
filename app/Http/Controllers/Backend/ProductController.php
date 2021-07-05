<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function list(){
        $listpro = Product::all();
        return view ('backend.products.list',compact('listpro'));
    }
    public function add(){
        $category = Category::all();
        return view ('backend.products.add', compact('category'));
    }
    public function saveAdd(Request $request){
        $pro= new Product;
        $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->detail = $request->detail;
        $pro->cate_id = $request->cate_id;

        if($request->hasfile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            // $Hinh= rand(4)."_".$name;
            // while (file_exists("upload/slide/".$Hinh)) {
            //     $Hinh= rand(4)."_".$name;
            // }
            $file->move('upload/product/',$name);
            $pro->image=$name;
        }
        // $slide->image= $request->image;
        // dd($request->image);
        // dd($request->name);
        $pro->save();
        return redirect()->to('admin/danh-sach-san-pham');
    }
    public function editProduct($id){
        $editPro = Product::find($id);
        return view ('backend.products.edit',compact('editPro'));
    }
    public function saveEdit(Request $request ,$id){
        $savePro= Product::find($id);
        $savePro->name=$request->name;
        $savePro->price=$request->price;
        $savePro->detail=$request->detail;
        $savePro->cate_id=$request->cate_id;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            // $Hinh= rand(4)."_".$name;
            // while (file_exists("upload/slide/".$Hinh)) {
            //     $Hinh= rand(4)."_".$name;
            // }
            $file->move('upload/product/',$name);
            $savePro->image=$name;
        }
        // $slide->image= $request->image;
        // dd($request->image);
        // dd($request->name);
        $savePro->save();
        return redirect()->to('admin/danh-sach-san-pham');
    }
    public function deletePro($id){
        $dele=Product::find($id);
        // dd($dele);
        // dd($dele->delete());
        $dele->delete();
        return redirect()->to ('/admin/danh-sach-san-pham');
        
    }
}
