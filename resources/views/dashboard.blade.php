@extends('frontend.main_master')
@section('content')
<div class="page-content">
    <!--start breadcrumb-->
    <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
        <div class="container">
            <div class="page-breadcrumb d-flex align-items-center">
                <h3 class="breadcrumb-title pe-3">TÀI KHOẢN</h3>
                <div class="ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Trang Chủ</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:;">Tài Khoản</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Thông Tin</li>
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
            <h3 class="d-none">Account</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card shadow-none mb-3 mb-lg-0 border rounded-0">
                                <div class="card-body">
                                    <div class="list-group list-group-flush"> <a href="{{route('dashboard')}}" class="list-group-item active d-flex justify-content-between align-items-center">Thông Tin  <i class='bx bx-tachometer fs-5'></i></a>
                                        <a href="{{route('user.orders')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Đơn Hàng <i class='bx bx-cart-alt fs-5'></i></a>
                                        <a href="{{route('user.payment')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Phương Thức Thanh Toán <i class='bx bx-credit-card fs-5'></i></a>
                                        <a href="{{route('user.profile')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Dữ Liệu Tài Khoản <i class='bx bx-user-circle fs-5'></i></a>
                                        <a href="{{route('user.logout')}}" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Đăng Xuất <i class='bx bx-log-out fs-5'></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card shadow-none mb-0">
                                <div class="card-body">
                                    <p>Xin chào!!! <strong>{{Auth::user()->name}}</strong> (Muốn <strong>{{Auth::user()->name}}</strong> <a href="{{route('user.logout')}}">Đăng xuất</a>)</p>
                                    <p>Từ trang tổng quan tài khoản của mình, bạn có thể xem các Đơn đặt hàng Gần đây, quản lý địa chỉ giao hàng và thanh toán cũng như chỉnh sửa mật khẩu và chi tiết tài khoản của bạn</p>
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
