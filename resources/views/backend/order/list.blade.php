@extends('backend.layout.master')
@section('title')
Danh sách sản phẩm
@endsection
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <b><h2 style="font-size:20pt">Đơn hàng</h2></b>
            <thead>

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Action</th>

            </thead>
            <tbody>
                @foreach($order as $key=> $pro)
                <tr>
                    <td>{{$key+1}} </td>
                    <td>{{$pro->sku}}</td>
                    <td>{{$pro->customers->name}}</td>
                    <td>+84 {{$pro->customers->phone}}</td>
                    <td>{{$pro->customers->address}}</td>
                    <td>
                        <form action="admin/xoa-san-pham/{{$pro->id}}" method="POST">
                        @csrf
                            <a href="admin/order_detail/{{$pro->id}}" class="btn btn-success">Thông tin</a>
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