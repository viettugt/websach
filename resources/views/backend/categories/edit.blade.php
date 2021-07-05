@extends('backend.layout.master')
@section('title')
Sửa danh mục
@endsection
@section('content')
<div class="pl-10">
    <h2 class="text-3xl pt-3">Sửa danh mục</h2>
    <form action="admin/sua-danh-muc/{{$editCate->id}}" method="post">
        @csrf
        <div class="row pt-3 ">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Tên Danh mục</label>
                    <input type="text" name="name" class='form-control' value="{{$editCate->name}}">
                </div>
                <div class="">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" @if ($editCate->status == 1){{ "selected" }} @endif>Show</option>
                        <option value="2" @if ($editCate->status == 2){{ "selected" }} @endif>Hide</option>
                    </select>
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
        <button class="btn btn-secondary" href="{{ route('listCate') }}">Hủy</button>
    </form>
</div>
@endsection