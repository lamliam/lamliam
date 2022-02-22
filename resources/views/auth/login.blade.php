@extends('frontend.main_master')
@section('content')
<div class="page-content">
    <!--start breadcrumb-->
    <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
        <div class="container">
            <div class="page-breadcrumb d-flex align-items-center">
                <h3 class="breadcrumb-title pe-3">Đăng nhập</h3>
                <div class="ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:;">Xác Thực</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--end breadcrumb-->
    <!--start shop cart-->
    <section class="">
        <div class="container">
            <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
                <div class="row row-cols-1 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Đăng nhập</h3>
                                        <p>Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký ngay</a>
                                        </p>
                                    </div>
                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                                                <img class="me-2" src="{{asset('frontend/assets/images/icons/search.svg')}}" width="16" alt="Image Description">
                                                <span>Đăng nhập với Google</span>
                                            </span>
                                        </a> <a href="javascript:;" class="btn btn-white"><i class="bx bxl-facebook"></i>Đăng nhập với Facebook</a>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>Hoặc đăng nhập với EMAIL</span>
                                        <hr />
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                                            @csrf
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Địa chỉ Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Nhập mật khẩu</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" name="password" class="form-control border-end-0" id="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" id="remember_me" name="remember" type="checkbox" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Lưu mật khẩu</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-end">
                                                @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">Quên mật khẩu ?</a>
                                                @endif

                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Đăng nhập</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </section>
    <!--end shop cart-->
</div>
@endsection
