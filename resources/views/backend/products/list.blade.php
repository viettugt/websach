@extends('backend.layout.master')
@section('title')
Danh sách sản phẩm
@endsection
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <a href="{{route('addProduct')}}" class="btn btn-primary" role="button">Tạo Mới</a>

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Danh mục</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col" width="200">Chi tiết</th>
                    <th scope="col">Action</th>

            </thead>
            <tbody>
                @foreach($listpro as $key=> $pro)
                <tr>
                    <td>{{$key+1}} </td>
                    <td>{{$pro->name}}</td>
                    <td>{{$pro->category->name}}</td>
                    <td>{{$pro->price}}</td>
                    <td>
                        <img width="100"  src="upload/product/{{$pro->image}}" alt="">
                    </td>
                    <td>{{substr($pro->detail,0,100)}}...</td>
                    <td>
                        <form action="admin/xoa-san-pham/{{$pro->id}}" method="POST">
                        @csrf
                            <a href="admin/sua-san-pham/{{$pro->id}}" class="btn btn-warning">Sửa</a>
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