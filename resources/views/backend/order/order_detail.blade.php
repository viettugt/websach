@extends('backend.layout.master')
@section('title')
Danh sách sản phẩm
@endsection
@section('content')
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <strong><h2>Thông tin đơn hàng {{$order_id->sku}}</h2></strong><br>
            <a href="admin/order" class="btn btn-primary">Back</a>
            <thead>

                    <th scope="col">ID</th>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>

            </thead>
            <tbody>
                @foreach($order_detail as $key=> $pro)
                <tr>
                    <td>{{$key+1}} </td>
                    <td>{{$pro->orders->sku}}</td>
                    <td>{{$pro->products->name}}</td>
                    <td>{{$pro->quantity}}</td>
                    <td>{{number_format($pro->price)}}</td>
                    
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td>Tổng tiền</td>
                    <td colspan="4">{{number_format($order_id->total)}}</td>
                </tr>
            </tfoot>
        </table>

    </div>
</div>

@endsection 