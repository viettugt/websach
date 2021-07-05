@extends('backend.layout.master')
@section('title')
Thêm danh mục
@endsection
@section('content')
<div class="pl-10">
    <h2 class="text-3xl pt-3">Thêm danh mục</h2>
    <form action="admin/them-danh-muc" method="post">
        @csrf
        <div class="row pt-3 ">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên Danh mục</label>
                    <input type="text" name="name" class='form-control'>
                </div>
                <div class="">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1">Show</option>
                        <option value="2">Hide</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('listCate') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection