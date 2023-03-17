<!-- Product Section Begin -->
<section class="product spad">
    <!-- Start Shop Page  -->
    {{-- <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <input class="form-control input-search" placeholder="Tìm kiếm... " type="text" />
                            <button> <i class="fa fa-search"></i> </button>
                                <div class="mt-0 search-ajax-result1">

                                </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Lọc </span>
                                    <select id="basic" class="selectpicker show-tick form-control"
                                        data-placeholder="$ USD">
                                        <option data-display="Select">Sản phẩm mới</option>
                                        <option value="1">Phổ biến</option>
                                        <option value="2">Gía cao → thấp</option>
                                        <option value="3">Gía thấp → cao</option>
                                        <option value="4">Bán chạy nhất</option>
                                    </select>
                                </div>
                                <p>Hiển thị tất cả</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="navb nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i
                                                class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i
                                                class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- End Shop Page -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="section-title">
                    <h4>Sản phẩm mới</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-4">

            </div>
        </div>
        <div class="row property__gallery">
            @foreach ($topSanPham as $key => $value)
                @php
                    $hinh_anh = explode(',', $value->hinh_anh);
                @endphp
                <div class="col-lg-3 col-md-4 col-sm-6 mix women">
                    <div class="product__item">
                        {{-- @if ($value->multi == 0) --}}
                        <div class="product__item__pic set-bg" data-setbg="{{ $hinh_anh[0] }}">
                            <div class="product__item__pic set-bg" data-setbg="{{ $hinh_anh[0] }}"
                                onclick="document.location.href='/product-detail/{{ $value->id_san_pham }}';return false;">
                            </div>
                            <div class="label new">Mới</div>
                            <ul class="product__hover">
                                <li>
                                    <a href="{{ $hinh_anh[0] }}" class="image-popup">
                                        <span class="arrow_expand"></span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                @if (Auth::guard('customer')->check())
                                    <li><a class="addToCart" data-id="{{ $value->id_san_pham }}"><span
                                                class="icon_bag_alt"></span></a></li>
                                @else
                                    <li><a href="/client/login" class="addToCart"><span class="icon_bag_alt"></span></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        {{-- @endif --}}
                        <div class="product__item__text">
                            <h6><a href="/product-detail/{{ $value->id_san_pham }}">{{ $value->ten_san_pham }}</a>
                            </h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">${{ $value->don_gia_nhap }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <style>
        .shop-box-inner {
            padding: 10px 0px;
        }

        /* .search-product {
            position: relative;

        } */

        .search-product input[type="text"] {
            background: #f6f6f6;
            border: 0;
            box-shadow: none;
            border-radius: 0;
            color: #000;
            height: 50px;
            font-weight: 300;
            font-size: 16px;
            margin-bottom: 5px;
            padding: 0 20px;
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            transition: all .5s ease;
            width: 100%;
            outline: 0;
        }

        .search-product .form-control::-moz-placeholder {
            color: #999;
            opacity: 1;
        }

        .search-product button {
            background: #010101;
            color: #ffffff;
            font-size: 18px;
            position: absolute;
            right: 0px;
            padding: 12px 15px;
            top: 0;
            line-height: 27px;
            border: none;
            cursor: pointer;
            /* height: 100%; */
        }

        .search-product button:hover {
            background: #d33b33;
        }

        .product-categori {
            margin-bottom: 30px;
        }

        .product-item-filter {
            border-bottom: 1px solid #010101;
            border-top: 1px solid #010101;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            padding: 5px 0;
        }


        .nice-select.wide {
            width: 75%;
        }

        .product-item-filter .toolbar-sorter-right span {
            line-height: 42px;
            padding-right: 15px;
            float: left;
        }

        .product-item-filter .toolbar-sorter-right {
            width: 65%;
        }

        .toolbar-sorter-right {
            float: left;
        }

        .toolbar-sorter-right .bootstrap-select.form-control:not([class*="col-"]) {
            width: 77%;
            float: right;
        }

        .toolbar-sorter-right .bootstrap-select.btn-group>.dropdown-toggle {
            padding: 0px;
            border-radius: 0px;
            border: none;
        }

        .toolbar-sorter-right .bootstrap-select.btn-group .dropdown-toggle .filter-option {
            padding-left: 15px;
        }

        .toolbar-sorter-right .btn-light {
            background: #010101;
            color: #ffffff;
        }

        .toolbar-sorter-right .btn-light:hover {
            background: #d33b33;
            border-radius: 0px;
            border: none;
        }

        .toolbar-sorter-right .show>.btn-light.dropdown-toggle {
            background-color: #d33b33;
        }

        .toolbar-sorter-right .bootstrap-select .dropdown-toggle:focus {
            background: #d33b33;
        }

        .toolbar-sorter-right .dropup .dropdown-toggle::after {
            position: absolute;
            right: 15px;
            top: 18px;
        }

        .product-item-filter p {
            margin-top: 20px;
            float: right;
            line-height: 2px;
        }

        .product-item-filter .nav-tabs {
            border: none;
            float: right;
        }

        .navb>li {
            position: inherit;
            display: inline-block;
            vertical-align: middle;
        }

        .product-item-filter li .nav-link {
            border: none;
            border-radius: 0px;
            color: #111111;
            font-size: 18px;
            padding: 4px 12px;
        }

        .product-item-filter li .nav-link.active {
            background: #d33b33;
            border: none;
            color: #ffffff;
        }

        .product-item-filter li .nav-link:hover {
            background: #010101;
            border: none;
            color: #ffffff;
        }

        /* .search-ajax-result1 {
            background:  #f6f6f6;
            width: 360px;
            position: absolute;
            margin-top: 9rem;
            z-index: 1;
        }

        .search-ajax-result1 .media1 {
            align-items: center;
            padding: 5px;
            background:  #f6f6f6
            border: 1px solid white;

        } */

        .search-product {
            position: relative;
        }
        .search-product .search-ajax-result1 {
            position: absolute;
            background: #f6f6f6;
            width: 360px;
            position: absolute;
            margin-top: 9rem;
            z-index: 1;
            height: 250px;
            overflow-y: scroll;
        }

        .search-ajax-result1 .media1 {
            align-items: center;
            padding: 3px 0 16px;
            /* background:  #f6f6f6 */
            /* background: rgb(242, 241, 241); */
            border: 1px solid white;
        }

        .media1 a{
           color: #000;
        }
    </style>
</section>
<!-- Product Section End -->
