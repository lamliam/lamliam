@extends('frontend.main_master')
@section('content')
<div class="page-content">
    <!--start breadcrumb-->
    <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
        <div class="container">
            <div class="page-breadcrumb d-flex align-items-center">
                <h3 class="breadcrumb-title pe-3">Đơn Hàng Của Tôi</h3>
                <div class="ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Trang Chủ</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:;">Tài Khoản</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Đơn hàng của tôi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--end breadcrumb-->
    <!--start shop cart-->
    <section class="py-4">
        <div class="container">
            <h3 class="d-none">Tài Khoản</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card shadow-none mb-3 mb-lg-0 border">
                                <div class="card-body">
                                    <div class="list-group list-group-flush"> <a href="{{route('dashboard')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Thông Tin <i class='bx bx-tachometer fs-5'></i></a>
                                        <a href="{{route('user.orders')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Đơn Hàng <i class='bx bx-cart-alt fs-5'></i></a>
                                        <a href="{{route('returned.orders')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Hàng Đã Trả Lại <i class='bx bx-cart-alt fs-5'></i></a>
                                        <a href="{{route('cancelled.orders.list')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Đơn Hàng Đã Hủy<i class='bx bx-cart-alt fs-5'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card shadow-none mb-0">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>ID Đơn Hàng</th>
                                                    <th>Ngày</th>
                                                    <th>Phương thức thanh toán</th>
                                                    <th>Hóa Đơn</th>
                                                    <th>Tổng cộng</th>
                                                    <th>Chú thích</th>
                                                    <th>Tình Trạng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $order)
                                                <tr>
                                                    <td>{{$order->order_number}}</td>
                                                    <td>{{$order->order_date}}</td>
                                                    <td>{{$order->payment_method}}</td>
                                                    <td>{{$order->invoice_no}}</td>
                                                    <td>
                                                        @if($order->status == 'pending')
                                                        <div class="badge badge-pill badge-warning" style="background: #800080;">{{$order->status}}</div>
                                                        @elseif($order->status == 'confirmed')
                                                        <div class="badge badge-pill badge-warning" style="background: #0000FF;">{{$order->status}}</div>
                                                        @elseif($order->status == 'processing')
                                                        <div class="badge badge-pill badge-warning" style="background: #FFA500;">{{$order->status}}</div>
                                                        @elseif($order->status == 'pickedup')
                                                        <div class="badge badge-pill badge-warning" style="background: #808000;">{{$order->status}}</div>
                                                        @elseif($order->status == 'shipped')
                                                        <div class="badge badge-pill badge-warning" style="background: #808080;">{{$order->status}}</div>
                                                        @elseif($order->status == 'delivered')
                                                        <div class="badge badge-pill badge-warning" style="background: #008000;">{{$order->status}}</div>
                                                        @if($order->return_order == 1)
                                                        <span class="badge badge-pill badge-warning" style="background:red;">Return Requested </span>
                                                        @endif
                                                        @elseif($order->status == 'cancelled')
                                                        <div class="badge badge-pill badge-warning" style="background: #FF0000;">{{$order->status}}</div>
                                                        @endif
                                                    </td>
                                                    <td>${{$order->amount}}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="{{ url('user/order-details/'.$order->id ) }}" class="btn btn-dark btn-sm rounded-0">View</a>
                                                            <a target="_blank" href="{{url('user/invoice-download/' .$order->id)}}" class="btn btn-dark btn-sm rounded-0">Invoice</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    </section>
    <!--end shop cart-->
</div>
@endsection
