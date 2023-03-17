<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> Sale Off 10%! Mua sắm ngay
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Sale 50% một số sản phẩm
                            </li>
                            <li>    
                                <i class="fab fa-opencart"></i> Sale 20% khi nhập code: offT20
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Sale đến 50%! Mua sắm ngay
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Sale Off 10%! Mua sắm ngay
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Sale 50%một số sản phẩm
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Sale 20% khi nhập code: offT20
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Sale đến 50%!Mua sắm ngay
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <span class="thongBao text-white"><marquee>Chào mừng đã đến với Website của chúng tôi!! Chúc bạn có một trải nghiệm mua sắm tuyệt vời nhất</marquee>
                </span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="our-link">
                    <ul>
                        @if (Auth::guard('customer')->check())
                            <span>Xin chào: {{ Auth::guard('customer')->user()->full_name }}</span>
                        @else
                            <li><a href="/client/login">Đăng Nhập</a></li>
                            <li><a href="/client/register">Đăng Kí</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-2">
                <div class="header__logo">
                    <a href="/home-pages/index"><img src="/customer/assets/img/logoo.gif" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7" style="text-align: end">
                <nav class="header__menu">
                    <ul>
                        <li><a href="/home-pages/index">Home</a></li>
                        @foreach ($danhmuc as $key => $value)
                            @if ($value->id_danh_muc_cha == 0)
                                <li>
                                    <a href="/product/{{ $value->id }}">{{ $value->ten_danh_muc }}</a>
                                    <ul class="dropdown">
                                        @foreach ($danhmuc as $k => $v)
                                            @if ($value->id == $v->id_danh_muc_cha)
                                                <li>
                                                    <a href="/product/{{ $v->id }}">{{ $v->ten_danh_muc }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                        @endforeach
                        <li>
                            <a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="/home-pages/shop">Shop</a></li>
                                <li><a href="/home-pages/contact">Liên hệ</a></li>
                                <li><a href="/home-pages/blog">Blog</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            {{-- Search Sản Phẩm --}}
            <div class="col-lg-4">
                <div class="header__right">
                    {{-- <div class="header__right__auth">
                        <form class="navbar-search-light form-inline form-search" id="navbar-search-main">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="height: 2rem"><i
                                                class="fa-solid fa-magnifying-glass"></i></span>
                                    </div>
                                    <input class="form-control input-search" placeholder="Search" type="text"
                                        style="width: 15rem; height: 2rem">
                                    <div class="mt-5 search-ajax-result">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                    <ul class="header__right__widget">
                        <li><span class="icon_search search-switch"></span></li>
                        <div class="search-model">
                            <div class="h-100 d-flex align-items-center justify-content-center">
                                <div class="search-close-switch">+</div>
                                <form class="search-model-form">
                                    <input class="input-search-form" type="text" placeholder="Tìm kiếm.....">
                                    <div class="mt-2 search-ajax-result2">

                                    </div>
                                </form>
                            </div>
                        </div>
                        <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        <li><a href="/customer/shop-cart/cart"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        @if (Auth::guard('customer')->check())
                            <li><a href="/customer/my-profile"><i class="fa-regular fa-user"></i></span>
                                </a></li>
                        @else
                            <li><a href="/client/login"><i class="fa-regular fa-user"></i></span>
                                </a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
    <style>
        .main-top {
            background: #010101;
            padding: 10px 0px;
        }

        .offer-box,
        .slidee {
            color: #FFFFFF;
            font-size: 13px;
            padding: 2px 15px;
            font-family: 'Montserrat', sans-serif;
        }

        .offer-box li {
            font-weight: 600;
        }

        .offer-box li i {
            margin-right: 15px;
            color: #d33b33;
            font-size: 20px;
        }

        /* .search-model{
            background-image: url('/customer/assets/img/banner-01.jpg')
        } */

        .search-model .h-100 form .search-ajax-result2 {
            background: #f6f6f6;
            width: 500px;
            position: absolute;
            margin-top: 9rem;
            z-index: 1;
            overflow-y: scroll;
            height: 300px;
        }

        .search-ajax-result2 .media1 {
            text-align: left;
            align-items: center;
            padding: 3px 0 16px;
            border: 1px solid white;
        }

        .media1 a {
            color: #000;
        }

        .our-link {
            float: right;
            text-align: right;
            margin-right: 10px;
        }
        .our-link span{
            color: #f6f6f6;
            font-weight: bolder

        }
        .our-link ul li {
            display: inline-block;
            border-right: 1px solid #ffffff;
            padding: 0px 10px;
            line-height: 14px;
        }

        .our-link ul {
            line-height: 30px;
        }

        .our-link ul li a {
            color: #ffffff;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 14px;
        }

        .our-link ul li a:hover {
            color: #d33b33;
        }

        .our-link ul li:last-child {
            border: none;
        }
    </style>
</header>
<!-- Header Section End -->
