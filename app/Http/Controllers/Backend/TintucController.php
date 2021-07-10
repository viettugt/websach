<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tintuc;


class TintucController extends Controller
{
    public function list(){
        $list= tintuc::all();
        return view ('backend.tintuc.list',compact('list'));
    }
    public function getAdd(){
        $getAddTintuc = tintuc::all();
        return view('backend.tintuc.add', compact('getAddTintuc'));
    }
    public function postAddTT(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|unique:Product,name',
            'detail'=>'required|min:0',
            'image'=>'required'
        ],
        [
            'name.required'=>'Tên không được để trống',
            'name.min'=>'Tên phải lón hơn 3 kí tự',
            'name.unique'=>'Tên đã tồn tại',
            'detail.required'=>'Mô tả không được để trống',
            'detail.min'=>'Mô tả phải lớn hơn 0 kí tự',
            'image.required'=>'Ảnh không được để trống'
        ]
        );
        $addTintuc = new tintuc;
        $addTintuc->name=$request->name;
        $addTintuc->detail=$request->detail;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            // $Hinh= rand(4)."_".$name;
            // while (file_exists("upload/slide/".$Hinh)) {
            //     $Hinh= rand(4)."_".$name;
            // }
            $file->move('upload/tintuc/',$name);
            $addTintuc->image=$name;
        }
        $addTintuc->save();
        return redirect()->to('/admin/danh-sach-tin-tuc');
    }
    public function editTintuc($id){
        $editTintuc = tintuc::find($id);
        return view ('backend.tintuc.edit', compact('editTintuc'));
    }
    public function saveEditTintuc(Request $request ,$id){
        $saveTintuc= tintuc::find($id);
        $saveTintuc->name=$request->name;
        $saveTintuc->detail=$request->detail;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            // $Hinh= rand(4)."_".$name;
            // while (file_exists("upload/slide/".$Hinh)) {
            //     $Hinh= rand(4)."_".$name;
            // }
            $file->move('upload/tintuc/',$name);
            $saveTintuc->image=$name;
        }
        // $slide->image= $request->image;
        // dd($request->image);
        // dd($request->name);
        $saveTintuc->save();
        return redirect()->to('admin/danh-sach-tin-tuc');
    }
    public function deleteTintuc($id){
        $dele=tintuc::find($id);
        // dd($dele);
        // dd($dele->delete());
        $dele->delete();
        return redirect()->to ('/admin/danh-sach-tin-tuc');
        
    }
}