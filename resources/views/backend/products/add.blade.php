@extends('backend.layout.master')
@section('title')
Danh sách sản phẩm
@endsection
@section('content')
<div class="pl-10">
    <h2 class="text-3xl pt-3">Thêm sản phẩm</h2>
    <form action="{{ route('saveAdd') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="row pt-3 ">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class='form-control'>
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="price" name="price" class='form-control'>
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select name="cate_id" id="" class="form-control">
                        @foreach($category as $cate)
                            @if($cate->status == 1)
                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                            @else
                            @endif
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="">Mô tả gắn</label>
                    <input type="text" name="detail" class='form-control'>
                </div>
                
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" class='form-control'>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('listProduct') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>

@endsection