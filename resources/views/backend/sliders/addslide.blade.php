@extends('backend.layout.master')
@section('title')
Thêm slide
@endsection
@section('content')
<div class="pl-10">
    <h2 class="text-3xl pt-3">Thêm slide</h2>
    <form action="/admin/postslider" method="post" enctype="multipart/form-data" >
    @csrf
        <div class="row pt-3 ">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên slide</label>
                    @error('name')
                    <div class="text text-danger">{{$message}}</div>
                    @enderror
                    <input type="text" name="name" class='form-control'>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="">Ảnh slide</label>
                    @error('image')
                    <div class="text text-danger">{{$message}}</div>
                    @enderror
                    <input type="file" name="image" class='form-control'>
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Thêm</button>
        <a href="{{ route('list_slider') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>

@endsection