@extends('backend.layout.master')
@section('title')
Danh sách sản phẩm
@endsection
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <a href="{{route('slider')}}" class="btn btn-primary" role="button">Tạo Mới</a>

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên slider</th>
                    <th scope="col">Ảnh Sider</th>
                    <th>Action</th>

            </thead>
            <tbody>
                @foreach($slider as $key=> $slide)
                <tr>
                    <td>{{$key+1}} </td>
                    <td>{{$slide->name}}</td>
                    <td>
                        <img style="width:100px;" src="upload/slide/{{$slide->image}}" alt="">
                    </td>
                    <td>
                        <form action="admin/xoa-slider/{{$slide->id}}" method="POST">
                            @csrf
                            <!-- <a href="admin/sua-slider/{{$slide->id}}" class="btn btn-warning">Sửa</a> -->
                            <button type="submit" class="btn btn-danger" onclick="return Delete()">Xóa</button>
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