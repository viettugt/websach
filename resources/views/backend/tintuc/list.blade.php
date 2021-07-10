@extends('backend.layout.master')
@section('title')
Danh sách tin tức
@endsection
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <a href="{{route('addTintuc')}}" class="btn btn-primary" role="button">Tạo Mới</a>

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên tin tức</th>
                    <th scope="col">Ảnh tin tức</th>
                    <th scope="col">Mô tả</th>
                    <th>Action</th>


            </thead>
            <tbody>
                @foreach($list as $key=> $tintuc)
                <tr>
                    <td>{{$key+1}} </td>
                    <td>{{$tintuc->name}}</td>
                    <td>
                        <img style="width:40px;" src="upload/tintuc/{{$tintuc->image}}" alt="">
                    </td>
                    <td>{{$tintuc->detail}}</td>
                    <td>
                        <form action="admin/xoa-tin-tuc/{{$tintuc->id}}" method="POST">
                            @csrf
                            <a href="admin/sua-tin-tuc/{{$tintuc->id}}" class="btn btn-warning">Sửa</a>
                            <button type="submit" class="btn btn-danger"onclick="return Delete()" >Xóa</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
@section('script')
<script>
    function Delete(){
        var conf =confirm('Xác nhận xóa');
    return conf;        
    }
</script>

@endsection