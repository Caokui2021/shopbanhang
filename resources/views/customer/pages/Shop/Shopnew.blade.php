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
                        <div class="label new">New</div>
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
