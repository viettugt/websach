<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list(){
        $list=Category::all();
        return view ('backend.categories.list',compact('list'));
    }
    public function getAdd(){
        $getAddCate = Category::all();
        return view('backend.categories.add', compact('getAddCate'));
    }
    public function postAdd(Request $request){
        $addcate = new Category;
        $addcate->name=$request->name;
        $addcate->status=$request->status;
        $addcate->save();
        return redirect()->to('/admin/danh-sach-danh-muc');
    }
    public function edit($id){
        $editCate = Category::find($id);
        return view ('backend.categories.edit', compact('editCate'));
    }
    public function postEdit(Request $request, $id){
        $postCate = Category::find($id);
        $postCate->name = $request->name;
        $postCate->status = $request->status;
        $postCate->save();
        return redirect()->to('/admin/danh-sach-danh-muc');
    }
    public function deleteCate($id){
        $dele=Category::find($id);
        // dd($dele->delete());
        $dele->delete();
        return redirect()->to('/admin/danh-sach-danh-muc');
    }
}
