@extends('admin.master')

@section('title')
    Quản lý nhập kho
@endsection

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <form class="navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input class="form-control searchSanPham" placeholder="Search" type="text"
                                        style="width: 12rem; height: 2rem">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush danhsachSanPham">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Tên sản phẩm</th>
                                    <th scope="col"></th>
                                </tr>=
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <th class="name">
                                        Iphone 13 prm
                                    </th>
                                    <td class="text-right">
                                        <a href="#">
                                            <i class="ni ni-active-40 btn btn-secondary btn-sm"></i>
                                        </a>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0 d-flex align-items-center">
                        <h3 class="mb-0 ml-2 mr-5" style="padding-right: 7rem">Danh sách nhập kho</h3>
                    </div>
                    <!-- Light table -->
                    <div class="text-dark mb-2" style="font-size: 13px; margin-top:-17px;margin-left: 33px">
                        <span>Tổng tiền hàng: <span class="text-dark font-weight-bold tongTien"></span></span>
                        <br>
                        <span>Tổng số sản phẩm: <span class="text-dark font-weight-bold tongSanPham"></span> sản phẩm</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush listNhapKho">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="ma">Mã sản phẩm</th>
                                    <th scope="col" class="sort" data-sort="name">Tên sản phẩm</th>
                                    <th scope="col" class="sort" data-sort="soluong">Số lượng</th>
                                    <th scope="col" class="sort" data-sort="dongia">Đơn giá</th>
                                    <th scope="col" class="sort" data-sort="sum">Thành tiền</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <th class="ma">
                                        MSP1
                                    </th>
                                    <th class="name">
                                        Iphone 13 prm
                                    </th>
                                    <th class="soluong">
                                        <input type="number" min=1 class="border border-light" style="width: 50px">
                                    </th>
                                    <th class="dongia">
                                        <input type="number" min=1 class="border border-light" style="width: 100px">
                                    </th>
                                    <th class="sum">
                                        25.000.0000
                                    </th>
                                    <td class="text-right">
                                        <i class="fa-solid fa-trash-can btn btn-danger btn-sm"></i>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-info btn-sm nhapkho" type="button">Nhập kho</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h4 class="mb-0">Hóa đơn nhập kho</h4>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush listHoaDon">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="id">Mã hóa đơn</th>
                                    <th scope="col" class="sort" data-sort="date">Ngày nhập</th>
                                    <th scope="col" class="sort" data-sort="sumQty">Tổng sản phẩm</th>
                                    <th scope="col" class="sort" data-sort="sumPri">Tổng tiền</th>
                                    <th scope="col" class="sort" data-sort="thanh-toan">Thanh toán</th>
                                    <th scope="col">Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                {{-- @foreach ($hoadon as $key => $value)
                                    <tr class="text-dark">
                                        <td class="id">
                                            {{ $value->ma_hoa_don }}
                                        </td>
                                        <td class="date">
                                            {{ Carbon\Carbon::parse($value->created_at)->format('d/m/Y h:i:s') }}
                                        </td>
                                        <td class="sumQty">
                                            {{ number_format($value->tong_tien, 0) }} đ
                                        </td>
                                        <td class="sumPri">
                                            {{ number_format($value->tong_san_pham, 0) }} sp
                                        </td>
                                        <td class="thanh-toan">
                                            @if ($value->tinh_trang == 0)
                                            <span class="text-danger">Chưa thanh toán</span>
                                            @else
                                                <span class="text-primary">Đã thanh toán</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#">
                                                <i class="ni ni-active-40 btn btn-secondary btn-sm"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
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
                                                    <th scope="col" class="sort" data-sort="stt">#</th>
                                                    <th scope="col" class="sort" data-sort="id">Mã sản phẩm</th>
                                                    <th scope="col" class="sort" data-sort="ten">Tên sản phẩm</th>
                                                    <th scope="col" class="sort" data-sort="sumQty">Số lượng</th>
                                                    <th scope="col" class="sort" data-sort="sumPri">Đơn giá nhập</th>
                                                    <th scope="col" class="sort" data-sort="thanh-toan">Thành tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                {{-- @foreach ($hoadon as $key => $value)
                                                    <tr class="text-dark">
                                                        <td class="id">
                                                            {{ $value->ma_hoa_don }}
                                                        </td>
                                                        <td class="date">
                                                            {{ Carbon\Carbon::parse($value->created_at)->format('d/m/Y h:i:s') }}
                                                        </td>
                                                        <td class="sumQty">
                                                            {{ number_format($value->tong_tien, 0) }} đ
                                                        </td>
                                                        <td class="sumPri">
                                                            {{ number_format($value->tong_san_pham, 0) }} sp
                                                        </td>
                                                        <td class="thanh-toan">
                                                            @if ($value->tinh_trang == 0)
                                                            <span class="text-danger">Chưa thanh toán</span>
                                                            @else
                                                                <span class="text-primary">Đã thanh toán</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="#">
                                                                <i class="ni ni-active-40 btn btn-secondary btn-sm"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach --}}
                                            </tbody>
                                        </table>
                                        <div>
                                            <h5 class="text-start text-danger mt-2 float-left" id="tongHoaDon"></h5>
                                            <button type="button" class="btn btn-sm btn-default float-right mr-2 mt-2" data-toggle="modal" data-target="#modal-form">Thanh toán</button>
                                            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                                <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-0">
                                                            <div class="card bg-secondary border-0 mb-0">
                                                                <div class="card-body">
                                                                    <form role="form">
                                                                        <input type="text" id="id_thanh_toan" hidden>
                                                                        <div class="form-group mb-3">
                                                                            <div class="input-group input-group-merge input-group-alternative">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="ni ni-money-coins text-warning"></i></span>
                                                                                </div>
                                                                                <select class="form-control text-dark hinh_thuc">
                                                                                    <option value="0">Tiền mặt</option>
                                                                                    <option value="1">Chuyển khoản</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="input-group">
                                                                                <span class="input-group-btn">
                                                                                    <a data-input="thumbnail" style="height: 30pt" data-preview="holder"
                                                                                        class="btn btn-info lfm">
                                                                                        <i class="fa fa-picture-o"></i> Choose
                                                                                    </a>
                                                                                </span>
                                                                                <input style="height: 40.4px;" id="thumbnail" class="form-control minh_chung"
                                                                                    type="text" name="hinh_anh" placeholder="Chọn hình ảnh">
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <button type="button" class="btn btn-sm btn-info thanhtoan">Thanh toán</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/app.js"></script>
    <script src="/admin/script/chitietnhapkho/chitietnhapkho.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('.lfm').filemanager('image', {
            prefix: '/laravel-filemanager'
        });
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
@endsection
