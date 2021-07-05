@extends('backend.layout.master')
@section('title')
Danh sách danh mục
@endsection
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <a href="admin/them-danh-muc" class="btn btn-primary" >Tạo Mới</a>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên Danh mục</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $key=> $cate)
                <tr>
                    <td>{{$key+1}} </td>
                    <td>{{$cate->name}}</td>
                    @if($cate->status==1)
                    <td>hien</td>
                    @elseif($cate->status==2)
                    <td>Khong hien</td>
                    @endif
                    <td>
                        <form action="admin/xoa-danh-muc/{{$cate->id}}" method="POST">
                        @csrf
                            <a href="admin/sua-danh-muc/{{$cate->id}}" class="btn btn-warning">Sửa</a>
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection