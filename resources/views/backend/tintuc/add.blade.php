@extends('backend.layout.master')
@section('title')
Thêm tin tức
@endsection
@section('content')
<div class="pl-10">
    <h2 class="text-3xl pt-3">Thêm tin tức</h2>
    <form action="{{ route('postAddTintuc') }}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="row pt-3 ">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên tin tức</label>
                    @error('name')
                    <div class="text text-danger">{{$message}}</div>
                    @enderror
                    <input type="text" name="name" class='form-control'>
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    @error('image')
                    <div class="text text-danger">{{$message}}</div>
                    @enderror
                    <input type="file" name="image" class='form-control'>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    @error('detail')
                    <div class="text text-danger">{{$message}}</div>
                    @enderror
                    <input type="text" name="detail" class='form-control'>
                </div>
                
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('listTintuc') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection