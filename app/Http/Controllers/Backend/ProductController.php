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
        $this->validate($request,[
            'name'=>'required|min:3|unique:Product,name',
            'price'=>'required|numeric|min:0',
            'detail'=>'required|min:0',
            'image'=>'required'
        ],
        [
            'name.required'=>'Tên không được để trống',
            'name.min'=>'Tên phải lón hơn 3 kí tự',
            'name.unique'=>'Tên đã tồn tại',
            'price.required'=>'Giá không được để trống',
            'price.min'=>'Giá phải lón hơn 0đ',
            'detail.required'=>'Mô tả không được để trống',
            'detail.min'=>'Mô tả phải lớn hơn 0 kí tự',
            'image.required'=>'Ảnh không được để trống'
        ]
        );
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
        $category = Category::all();

        return view ('backend.products.edit',compact('editPro','category'));
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