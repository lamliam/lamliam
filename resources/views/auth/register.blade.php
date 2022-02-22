@extends('frontend.main_master')
@section('content')
<div class="page-content">
    <!--start breadcrumb-->
    <section class="py-3 border-bottom border-top d-none d-md-flex bg-light">
        <div class="container">
            <div class="page-breadcrumb d-flex align-items-center">
                <h3 class="breadcrumb-title pe-3">Đăng Ký</h3>
                <div class="ms-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript:;">Xác Thực</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Đăng Ký</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--end breadcrumb-->
    <!--start shop cart-->
    <section class="py-0 py-lg-5">
        <div class="container">
            <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
                <div class="row row-cols-1 row-cols-lg-1 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Đăng ký</h3>
                                        <p>Bạn đã có tài khoản ? <a href="{{ route('login') }}">Đăng nhập ngay</a>
                                        </p>
                                    </div>
                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                                                <img class="me-2" src="{{asset('frontend/assets/images/icons/search.svg')}}" width="16" alt="Image Description">
                                                <span>Đăng ký bằng Google</span>
                                            </span>
                                        </a> <a href="javascript:;" class="btn btn-white"><i class="bx bxl-facebook"></i>Đăng ký bằng Facebook</a>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>Hoặc đăng ký bằng EMAIL</span>
                                        <hr />
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class=" col-sm-12">
                                                <label for="inputFirstName" class="form-label">Tên</label>
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Jhon">
                                            </div>

                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Địa chỉ Email</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="example@user.com">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputPhoneNumber" class="form-label">Số điện thoại</label>
                                                <input type="text" name="phone" class="form-control" id="phone" placeholder="9998376448">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Mật khẩu</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="password" name="password" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Xác nhận mật khẩu</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="password_confirmation" placeholder="Enter Password" name="password_confirmation" required autocomplete="new-password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Tôi đã đọc và đồng ý với Điều khoản & Điều kiện</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-dark"><i class='bx bx-user'></i>Đăng Ký</button>
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
