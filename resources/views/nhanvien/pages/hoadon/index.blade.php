@extends('admin.master')
@section('title')
    Quản lý hóa đơn bán hàng
@endsection
@section('content')
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <input type="text" class="form-control searchHoaDon" placeholder="Nhập vào tên hóa đơn cần tìm">
                </div>
                <div class="card-body table-responsive">
                    <table class="table align-items-center table-flush table-bordered listBill">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center">Tên HĐ</th>
                                <th class="text-center">Ngày</th>
                                <th class="text-center">Tổng Tiền</th>
                                <th class="text-center">Thanh Toán</th>
                                <th class="text-center">Tình Trạng</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Chi Tiết Bán Hàng
                </div>
                <div class="card-body">
                    <table class="table table-responsive align-items-center table-flush table-bordered listChiTiet">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center">Tên Sản Phẩm</th>
                                <th class="text-center">Số Lượng</th>
                                <th class="text-center">Đơn Giá</th>
                                <th class="text-center">Thành Tiền</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>

                    </table>
                    <table class="table table-bordered mt-3 listCus">
                        <th>
                        </th>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="/js/app.js"></script>
    <script src="/admin/script/chitiethoadon/chitiethoadon.js"></script>
@endsection
