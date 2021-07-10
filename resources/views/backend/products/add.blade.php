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
                    @error('name')
                    <div class="text text-danger">{{$message}}</div>
                    @enderror
                    <input type="text" name="name" class='form-control'>
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    @error('price')
                    <div class="text text-danger">{{$message}}</div>
                    @enderror
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
                    @error('detail')
                    <div class="text text-danger">{{$message}}</div>
                    @enderror
                    <textarea name="detail" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>

            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    @error('image')
                    <div class="text text-danger">{{$message}}</div>
                    @enderror
                    <input type="file" name="image" class='form-control'>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('listProduct') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>

@endsection