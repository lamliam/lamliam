@extends('frontend.main_master')
@section('content')
@include('frontend.body.slider')


<div class="page-content">
    <!--start information-->
    <section class="py-3 border-top border-bottom">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 row-group align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center p-3 bg-white">
                        <div class="fs-1"><i class='bx bx-taxi'></i>
                        </div>
                        <div class="info-box-content ps-3">
                            <h6 class="mb-0">MIỄN PHÍ VẬN CHUYỂN &amp; HOÀN TIỀN</h6>
                            <p class="mb-0">Miễn phí vận chuyển đơn hàng từ 2 triệu </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center p-3 bg-white">
                        <div class="fs-1"><i class='bx bx-dollar-circle'></i>
                        </div>
                        <div class="info-box-content ps-3">
                            <h6 class="mb-0">ĐẢM BẢO HOÀN TIỀN</h6>
                            <p class="mb-0">100% Hoàn tiền nếu có sai xót</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center p-3 bg-white">
                        <div class="fs-1"><i class='bx bx-support'></i>
                        </div>
                        <div class="info-box-content ps-3">
                            <h6 class="mb-0">HỖ TRỢ 24/7</h6>
                            <p class="mb-0">Hỗ trợ mọi lúc mọi nơi 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end information-->
    <!--start pramotion-->
    <section class="py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                @php
                $categories = App\Models\Category::orderBy('category_name', 'DESC')->limit(3)->get();
                @endphp
                @foreach($categories as $category)
                <div class="col">
                    <div class="card rounded-0 border shadow-none">
                        <div class="row g-0 align-items-center">
                            <div class="col">
                                <img src="{{asset($category->category_image)}}" class="img-fluid" alt="" />
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title text-uppercase">{{$category->category_name}}</h5>
                                    <p class="card-text text-uppercase">Nhanh tay nào!</p>
                                    <a href="{{url('category/product/' .$category->id. '/' .$category->category_slug)}}" class="btn btn-dark btn-ecomm">Lựa Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end pramotion-->
    <!--start Featured product-->
    <section class="py-4">
        <div class="container">
            <div class="d-flex align-items-center">
                <h5 class="text-uppercase mb-0">SẢN PHẨM NỔI BẬT</h5>
                <a href="{{route('featured.view')}}" class="btn btn-dark btn-ecomm ms-auto rounded-0">Xem Thêm<i class='bx bx-chevron-right'></i></a>
            </div>
            <hr />
            <div class="product-grid">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                    @foreach($featured as $product)
                    <div class="col">
                        <div class="card rounded-0 product-card">
                            <a href="{{url('product/details/' .$product->id)}}">
                                <img src="{{asset($product->product_thumbnail)}}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <div class="product-info">
                                    <a href="{{url('product/details/' .$product->id)}}">
                                        <h6 class="product-name mb-2">{{$product->product_name}}</h6>
                                    </a>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-1 product-price"><span class="me-1 text-decoration-line-through">VNĐ{{$product->selling_price}}</span>
                                            <span class="fs-5">VNĐ{{$product->discount_price}}</span>
                                        </div>
                                        @php
                                        $reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                                        $avarage = 10;
                                        @endphp
                                        <div class="cursor-pointer ms-auto">
                                            @if($avarage == 0)
                                            No Rating Yet!
                                            @elseif($avarage == 1 || $avarage < 2) <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                @elseif ($avarage == 2 || $avarage < 3) <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    @elseif ($avarage == 3 || $avarage < 4) <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        @elseif ($avarage == 4 || $avarage < 5) <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif ($avarage == 5 || $avarage < 5) <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                @endif
                                        </div>
                                    </div>
                                    <div class="product-action mt-2">
                                        <div class="d-grid gap-2">
                                            <a href="javascript:;" class="btn btn-dark btn-ecomm" data-bs-toggle="modal" data-bs-target="#exampleModal" id="{{$product->id}}" onclick="productView(this.id)"> <i class='bx bxs-cart-add'></i>Thêm vào giỏ</a>
                                            <a href="javascript:;" class="btn btn-light btn-ecomm" id="{{$product->id}}" onclick="addToWishlist(this.id)"><i class='bx bx-heart'></i>Thêm vào yêu thích</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--end row-->
            </div>

        </div>
    </section>
    <!--end Featured product-->
    <!--start New Arrivals-->
    <section class="py-4">
        <div class="container">
            <div class="d-flex align-items-center">
                <h5 class="text-uppercase mb-0">ƯU ĐÃI HOT</h5>
                <a href="{{route('hot.deals')}}" class="btn btn-dark ms-auto rounded-0">Xem Thêm<i class='bx bx-chevron-right'></i></a>
            </div>
            <hr />
            <div class="product-grid">
                <div class="new-arrivals owl-carousel owl-theme">
                    @foreach($hot_deals as $product)
                    <div class="item">
                        <div class="card rounded-0 product-card">

                            <a href="{{url('product/details/' .$product->id)}}">
                                <img src="{{asset($product->product_thumbnail)}}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <div class="product-info">
                                    <a href="{{url('product/details/' .$product->id)}}">
                                        <h6 class="product-name mb-2">{{$product->product_name}}</h6>
                                    </a>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">VNĐ{{$product->selling_price}}</span>
                                            <span class="fs-5">VNĐ{{$product->discount_price}}</span>
                                        </div>
                                        @php
                                        $reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                                        $avarage = 10;
                                        @endphp
                                        <div class="cursor-pointer ms-auto">
                                            @if($avarage == 0)
                                            No Rating Yet!
                                            @elseif($avarage == 1 || $avarage < 2) <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                @elseif ($avarage == 2 || $avarage < 3) <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    @elseif ($avarage == 3 || $avarage < 4) <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        @elseif ($avarage == 4 || $avarage < 5) <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif ($avarage == 5 || $avarage < 5) <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                @endif
                                        </div>
                                    </div>
                                    <div class="product-action mt-2">
                                        <div class="d-grid gap-2">
                                            <a href="javascript:;" class="btn btn-dark btn-ecomm" data-bs-toggle="modal" data-bs-target="#exampleModal" id="{{$product->id}}" onclick="productView(this.id)"> <i class='bx bxs-cart-add'></i>Thêm vào giỏ</a>
                                            <a href="javascript:;" class="btn btn-light btn-ecomm" id="{{$product->id}}" onclick="addToWishlist(this.id)"><i class='bx bx-heart'></i>Thêm vào yêu thích</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--end New Arrivals-->
    <!--start Advertise banners-->
    @include('frontend.body.ads')
    <!--end Advertise banners-->

    <!--end special offer-->

    <section class="py-4">
        <div class="container">
            <div class="d-flex align-items-center">
                <h5 class="text-uppercase mb-0">HÀNG MỚI VỀ</h5>
                <a href="{{route('special.offer')}}" class="btn btn-dark ms-auto rounded-0">Xem Thêm<i class='bx bx-chevron-right'></i></a>
            </div>
            <hr />
            <div class="product-grid">
                <div class="new-arrivals owl-carousel owl-theme">
                    @foreach($special_offers as $product)
                    <div class="item">
                        <div class="card rounded-0 product-card">

                            <a href="{{url('product/details/' .$product->id)}}">
                                <img src="{{asset($product->product_thumbnail)}}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <div class="product-info">
                                    <a href="{{url('product/details/' .$product->id)}}">
                                        <h6 class="product-name mb-2">{{$product->product_name}}</h6>
                                    </a>
                                    <div class="d-flex align-items-center">

                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">VNĐ{{$product->selling_price}}</span>
                                            <span class="fs-5">VNĐ{{$product->discount_price}}</span>
                                        </div>
                                        @php
                                        $reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                                        $avarage = 10;
                                        @endphp
                                        <div class="cursor-pointer ms-auto">
                                            @if($avarage == 0)
                                            No Rating Yet!
                                            @elseif($avarage == 1 || $avarage < 2) <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                @elseif ($avarage == 2 || $avarage < 3) <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    @elseif ($avarage == 3 || $avarage < 4) <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        @elseif ($avarage == 4 || $avarage < 5) <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif ($avarage == 5 || $avarage < 5) <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                @endif
                                        </div>
                                    </div>
                                    <div class="product-action mt-2">
                                        <div class="d-grid gap-2">
                                            <a href="javascript:;" class="btn btn-dark btn-ecomm" data-bs-toggle="modal" data-bs-target="#exampleModal" id="{{$product->id}}" onclick="productView(this.id)"> <i class='bx bxs-cart-add'></i>Thêm vào giỏ</a>
                                            <a href="javascript:;" class="btn btn-light btn-ecomm" id="{{$product->id}}" onclick="addToWishlist(this.id)"><i class='bx bx-heart'></i>Thêm vào yêu thích</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="py-4">
        <div class="container">
            <div class="d-flex align-items-center">
                <h5 class="text-uppercase mb-0">ƯU ĐÃI ĐẶC BIỆT</h5>
                <a href="{{route('special.deals')}}" class="btn btn-dark ms-auto rounded-0">Xem Thêm<i class='bx bx-chevron-right'></i></a>
            </div>
            <hr />
            <div class="product-grid">
                <div class="new-arrivals owl-carousel owl-theme">
                    @foreach($special_deals as $product)
                    <div class="item">
                        <div class="card rounded-0 product-card">

                            <a href="{{url('product/details/' .$product->id)}}">
                                <img src="{{asset($product->product_thumbnail)}}" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <div class="product-info">
                                    <a href="{{url('product/details/' .$product->id)}}">
                                        <h6 class="product-name mb-2">{{$product->product_name}}</h6>
                                    </a>
                                    <div class="d-flex align-items-center">

                                        <div class="mb-1 product-price"> <span class="me-1 text-decoration-line-through">VNĐ{{$product->selling_price}}</span>
                                            <span class="fs-5">VNĐ{{$product->discount_price}}</span>
                                        </div>
                                        @php
                                        $reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                                        $avarage = 10;
                                        @endphp
                                        <div class="cursor-pointer ms-auto">
                                            @if($avarage == 0)
                                            No Rating Yet!
                                            @elseif($avarage == 1 || $avarage < 2) <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                @elseif ($avarage == 2 || $avarage < 3) <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    @elseif ($avarage == 3 || $avarage < 4) <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        @elseif ($avarage == 4 || $avarage < 5) <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            @elseif ($avarage == 5 || $avarage < 5) <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                @endif
                                        </div>
                                    </div>
                                    <div class="product-action mt-2">
                                        <div class="d-grid gap-2">
                                            <a href="javascript:;" class="btn btn-dark btn-ecomm" data-bs-toggle="modal" data-bs-target="#exampleModal" id="{{$product->id}}" onclick="productView(this.id)"> <i class='bx bxs-cart-add'></i>Thêm vào giỏ</a>
                                            <a href="javascript:;" class="btn btn-light btn-ecomm" id="{{$product->id}}" onclick="addToWishlist(this.id)"><i class='bx bx-heart'></i>Thêm vào yêu thích</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--start support info-->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 row-group">
                <div class="col">
                    <div class="text-center">
                        <div class="font-50"> <i class='bx bx-cart'></i>
                        </div>
                        <h2 class="fs-5 text-uppercase mb-0">GIAO HÀNG MIỄN PHÍ</h2>
                        <p class="text-capitalize">Giao miễn phí đơn trên 500K</p>
                        <p>Đơn hàng từ 500k trở lên của bạn sẽ được miễn phí vận chuyển nội địa Việt Nam, ở bất cứ địa chỉ nào trong nước ngoại trừ vùng sâu, vùng xa và hải đảo</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <div class="font-50"> <i class='bx bx-credit-card'></i>
                        </div>
                        <h2 class="fs-5 text-uppercase mb-0">THANH TOÁN AN TOÀN</h2>
                        <p class="text-capitalize">Sở hữu SSL / Chứng chỉ bảo mật</p>
                        <p>Chúng tôi có chứng chỉ bảo mật, an toàn thông tin, bảo vệ quyền lợi thông tin mỗi cá nhân khách hàng một cách tốt nhất</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <div class="font-50"> <i class='bx bx-dollar-circle'></i>
                        </div>
                        <h2 class="fs-5 text-uppercase mb-0">ĐỔI TRẢ MIỄN PHÍ</h2>
                        <p class="text-capitalize">Đổi trả hàng miễn phí trong 30 ngày</p>
                        <p>Nếu có lỗi từ cửa hàng, nhà sản xuất, đơn vị vận chuyển...v..v... các bạn có thể hoàn trả hoặc đổi hàng mới miễn phí trong vòng 30 ngày</p>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <div class="font-50"> <i class='bx bx-support'></i>
                        </div>
                        <h2 class="fs-5 text-uppercase mb-0">HỖ TRỢ KHÁCH HÀNG</h2>
                        <p class="text-capitalize">Hỗ trợ khách hàng 24/7</p>
                        <p>Đội ngũ nhân viên, chăm sóc khách hàng nhiệt tình, chu đáo, thân thiện, có chuyên môn, giúp các bạn dễ dàng lựa chọn những sản phẩm yêu thích</p>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </section>
    <!--end support info-->

    <!--start brands-->
    @include('frontend.body.brands')
    <!--end brands-->
</div>
@endsection
