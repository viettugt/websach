@extends('backend.layout.master')
@section('title')
Sửa sản phẩm
@endsection
@section('content')
<div class="pl-10">
    <h2 class="text-3xl pt-3">Sửa sản phẩm</h2>
    <form action="admin/sua-san-pham/{{$editPro->id}}" method="post">
        @csrf
        <div class="row pt-3 ">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class='form-control' value="{{$editPro->name}}">
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="text" name="price" class='form-control' value="{{$editPro->price}}">
                </div>

                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="cate_id" id="" class="form-control">
                        @foreach($category as $cate)
                        @if($cate->status == 1)
                        <option @if($editPro->cate_id == $cate->id)
                            {{ "selected" }}
                            @endif
                            value="{{ $cate->id }}"
                            >{{$cate->name}}</option>
                        @else
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Mô tả gắn</label>
                    <input type="text" name="detail" class='form-control' value="{{$editPro->detail}}">
                </div>

            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" class='form-control' value="">
                    <img width="200px" src="upload/product/{{$editPro->image}}" alt="">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
        <a href="{{ route('listProduct') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>

@endsection