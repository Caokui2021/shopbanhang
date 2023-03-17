@extends('customer.master')

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/home-pages/index"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Cart Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table class="listCart">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="/customer/shop-cart/list-bill">xem đơn hàng</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="discount__content">
                        <h6>Thông tin nhận hàng</h6>
                        <form action="#">
                            <input type="text" class="mt-2 ship_fullname" placeholder="Nhập họ và tên người nhận">
                            <input type="text" class="mt-2 ship_phone" placeholder="Nhập số điên thoại nhận hàng">
                            <input type="text" class="mt-2 ship_address" placeholder="Nhập địa chỉ nhận hàng">
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">

                    {{-- khi nhấn check box thì tổng tiền và tổng số lượng sẻ hiện ở amount và total
                    Với xem giúp cái product xem list sản phẩm theo danh mục với luôn
                    Xem chi tiết sản phẩm nhưng khi nhấn thì nó qua id khác kp là sản phẩm cần xem
                    Cái này xem ở homeCOntroller --}}

                    <div class="cart__total__procced">
                        <h6>Tổng giỏ hàng</h6>
                        <ul>
                            <li>Số lượng: <span id="amount" class="amount">0</span></li>
                            <li>Tổng cộng: <span id="total" class="total">0</span></li>
                        </ul>
                        <a href="#" class="primary-btn createBill">Đặt Hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Cart Section End -->
@endsection

@section('js')
    <script src="/customer/script/cart.js"></script>
@endsection
