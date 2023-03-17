@extends('customer.master')

@section('content')
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/home-pages/index"><i class="fa fa-home"></i> Home</a>
                        <a href="/customer/shop-cart/cart">Cart</a>
                        <span>Bill</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="shop-cart spad">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Đơn hàng của tôi</h4>
                    <div class="table-responsive mt-3">
                        <table class="table align-items-center table-flush listBill">
                            <thead class="thead-light">
                                <tr>
                                    <th>Tên Bill</th>
                                    <th>Ngày tạo</th>
                                    <th>Tổng tiền</th>
                                    <th>Thanh toán</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header pb-0 pt-3">
                                <h4 class="modal-title" id="myLargeModalLabel">Chi tiết hóa đơn</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body pt-0 pt-3 table-responsive">
                                <table class="table align-items-center table-flush chiTietHoaDon">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="id">Hình ảnh</th>
                                            <th scope="col" class="sort" data-sort="ten">Tên sản phẩm</th>
                                            <th scope="col" class="sort" data-sort="sumQty">Số lượng</th>
                                            <th scope="col" class="sort" data-sort="sumPri">Thành tiền</th>
                                        </tr>
                                    </thead>

                                    <tbody class="list">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
@section('js')
    <script src="/customer/script/bill.js"></script>
@endsection
