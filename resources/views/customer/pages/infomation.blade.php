@extends('customer.master')

@section('css')
    <link rel="icon" href="/customer/infomation/assets/svg/favicon.ico" />
    <link rel="stylesheet" media="all" href="/customer/infomation/css/vendor/animate.css" />
    <link rel="stylesheet" media="all" href="/customer/infomation/css/vendor/font-awesome.css" />
    <link rel="stylesheet" media="all" href="/customer/infomation/css/vendor/linear-icons.css" />
    <link rel="stylesheet" media="all" href="/customer/infomation/css/vendor/owl.carousel.css" />
    <link rel="stylesheet" media="all" href="/customer/infomation/css/vendor/jquery.lavalamp.css" />
    <link rel="stylesheet" media="all" href="/customer/infomation/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css  ">
@endsection

@section('content')
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <section style="margin-top: -15px" class="divider bg-dark">
        <svg class="svg svg-light" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            width="1920" height="100" viewBox="0 0 1920 100" preserveAspectRatio="none meet">
            <path
                d="M0,11S168.915,69.242,406.27,70.7,685.853,57.593,850.4,37.207,1259.752,73.448,1517.323,70.7,1920,19.667,1920,19.667V101H0Z"
                transform="translate(0 -1)" />
            <path
                d="M1920,102.048s-89.6,137.879-398.308,19.053c-162.379-62.5-391.708,20.855-598.484,20.855-206.775,22.449-295.6-77.886-503.833-39.909C286.864,132.511,0,110.668,0,110.668v62.337H1920Z"
                transform="translate(0 -73.005)" fill-opacity=".2" />
            <path
                d="M0,102.147S407.045,189.7,555.574,121.265C717.953,58.549,760.893,69.884,840.982,85.957c188.351,79.39,348.351-56.61,532.351,70.057C1489,91.538,1920,110.8,1920,110.8v62.551H0Z"
                transform="translate(0 -73.347)" fill-opacity=".4" />
        </svg>
    </section>

    <section class="pt-0">
        <div style="max-width: 1350px;" class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="br-sm pr-lg-4 mt-xl-n6">
                        <div class="py-3 py-lg-4">
                            <div class="row align-items-center justify-content-center no-gutters text-lg-center">
                                <div class="col-9 col-lg-12">
                                    <div class="d-flex flex-lg-column align-items-center">
                                        <div class="pr-3 pr-lg-0">
                                            <img src="{{ Auth::guard('customer')->user()->hinh_anh }}" alt=""
                                                class="rounded-circle mb-lg-2 img-fluid"
                                                style="width: 150px; height: 150px;">
                                        </div>
                                        <div>
                                            <div class="h5 m-0 text-dark">{{ Auth::guard('customer')->user()->full_name }}
                                            </div>
                                            <div class="text-muted">{{ Auth::guard('customer')->user()->email }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 d-lg-none text-right">
                                    <button class="btn btn-icon btn-primary btn-sm toggle-show"
                                        data-show="open-profile-sidebar">
                                        <i class="icon icon-text-align-center"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar sidebar-mobile" id="open-profile-sidebar">
                            <div class="sidebar-content">

                                <div class="sidebar-header clearfix d-lg-none">
                                    <button type="button" class="close toggle-show p-3" data-show="open-profile-sidebar"
                                        aria-label="Close">
                                        <i class="icon icon-cross font-size-lg"></i>
                                    </button>
                                </div>
                                <div class="mb-4 px-4 p-lg-0">
                                    <ul class="list-group list-group-clean">

                                        <li
                                            class="list-group-item text-muted d-flex justify-content-between align-items-center">
                                            <label class="pre-label">Account</label>
                                        </li>

                                        <li class="list-group-item ">
                                            <a class="profile" href="#">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="color-v"><i class="icon icon-user mr-2"></i>
                                                        <span>Thông tin tài khoản</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                        {{-- <li class="list-group-item ">
                                            <a href="/customer/shop-cart/cart">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span><i class="icon icon-cart mr-2"></i>
                                                        <span>Giỏ hàng</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item ">
                                            <a href="profile-notifications.html">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span><i class="icon icon-alarm mr-2"></i>
                                                        <span>Notifications</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li> --}}

                                    </ul>

                                </div>
                                <div class="mb-4 px-4 p-lg-0">
                                    <ul class="list-group list-group-clean">

                                        <li
                                            class="list-group-item text-muted d-flex justify-content-between align-items-center">
                                            <label class="pre-label">Dashboard</label>
                                        </li>

                                        <li class="list-group-item">
                                            <a class="order" href="#">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span><i class="icon icon-cart mr-2"></i>
                                                        <span>Đơn hàng</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item ">
                                            <a href="profile-whishlist.html">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span><i class="icon icon-heart mr-2"></i>
                                                        <span>Danh sách yêu thích</span>
                                                    </span>
                                                    <span class="badge  badge-pill">9</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-4 px-4 p-lg-0">
                                    <ul class="list-group list-group-clean">

                                        <li
                                            class="list-group-item text-muted d-flex justify-content-between align-items-center">
                                            <label class="pre-label">Access</label>
                                        </li>

                                        <li class="list-group-item ">
                                            <a href="/client/reset">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span><i class="icon icon-lock mr-2"></i>
                                                        <span>Đặt lại mật khẩu</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="/client/logout">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span><i class="icon icon-enter-down mr-2"></i>
                                                        <span>Đăng xuất</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9 pt-lg-4">
                    <form id="form-order">
                        <h2 class="pre-label font-size-base">Đơn hàng của tôi</h2>
                        <div class="mb-3 mb-lg-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive mt-3">
                                        <input type="text" id="id_don_hang" hidden>
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
                                            <div class="modal-header pb-0 pt-3" style="margin-bottom: -25px">
                                                <h4 class="modal-title tieude" id="myLargeModalLabel">Chi tiết hóa đơn</h4>

                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body pt-0 pt-3 table-responsive"
                                                style="margin-bottom: -30px">
                                                <table class="table align-items-center table-flush chiTietHoaDon">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col" class="sort" data-sort="id">Hình ảnh
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="ten">Tên sản
                                                                phẩm</th>
                                                            <th scope="col" class="sort" data-sort="sumQty">Số lượng
                                                            </th>
                                                            <th scope="col" class="sort" data-sort="sumPri">Thành
                                                                tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list">

                                                    </tbody>
                                                </table>
                                                <div class="row dathanhtoan">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-success mt-4 text-center" role="alert">
                                                            <span>Đơn hàng này đã được thanh toán thành công !! <i
                                                                    class="fas fa-check"></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row hoadon1">
                                                    <div class="col-md-8">
                                                        <div class="alert alert-success mt-4" style="font-size: 17px"
                                                            role="alert">
                                                            <b>Tổng tiền: </b> <span class="tongTien">0</span> $
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group mt-4">
                                                            <button type="submit"
                                                                class="form-control btn btn-primary thanhToanx px-3">Thanh
                                                                toán</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row hoadon2">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-warning text-center" role="alert">
                                                            <p>Để Thanh toán bạn vui lòng chuyển khoản theo thông tin bên
                                                                dưới !</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 mb-4">
                                                        {{-- <div class="product__item">
                                                            <div class="product__item__pic set-bg"
                                                                data-setbg="/customer/assets/img/nganhang.jpg">
                                                                <ul class="product__hover">
                                                                    <li><a href="/customer/assets/img/nganhang.jpg"
                                                                            class="image-popup"><span
                                                                                class="arrow_expand"></span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div> --}}
                                                        <img src="/customer/assets/img/nganhang.jpg" alt="">
                                                    </div>
                                                    <div class="col-md-4 mt-5">
                                                        <h6>Tổng tiền:</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form id="form-profile">
                        <h2 class="pre-label font-size-base">Cài đặt hình đại diện</h2>

                        <div class="bg-white p-4 p-lg-5 br-sm shadow-sm mb-3 mb-lg-5">
                            <div class="edit-image">
                                <div id="holder" class="media d-block d-sm-flex align-items-center float-left">
                                    <img src="{{ Auth::guard('customer')->user()->hinh_anh }}"
                                        class="d-block rounded-circle mx-auto mb-3 mb-sm-0" width="110px" height="110px"
                                        alt="John Doe">
                                </div>
                                <div class="media-body pl-sm-3 text-center text-sm-left float-left">
                                    <div class="input-group mt-3 ">
                                        <button data-input="thumbnail" data-preview="holder"
                                            class="lfm btn btn-rounded btn-outline-primary btn-sm px-3 mb-2 doihinhanh"
                                            type="button">
                                            <i class="icon icon-sync"></i> Đổi hình ảnh
                                        </button>
                                        <button class="btn btn-rounded btn-outline-primary btn-sm px-3 mb-2 luu_anh"
                                            type="button">
                                            <i class="icon icon-sync"></i> Lưu
                                        </button>
                                        <input id="thumbnail" class="form-control hinh_anh" type="text"
                                            name="hinh_anh" hidden />
                                    </div>
                                    <div>
                                        <small class="text-muted">Tải lên hình ảnh JPG, GIF hoặc PNG.
                                            (Kích thước khuyên dùng:100x100)</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="pre-label font-size-base">Cài đặt thông tin</h2>

                        <div class="bg-white p-4 p-lg-5 br-sm shadow-sm mb-3 mb-lg-5">
                            <div class="row">
                                <input type="text" id="id" hidden>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="pre-label pre-label-sm">Họ và tên</label>
                                        <input class="form-control form-control-simple full_name" id="full_name"
                                            type="text" placeholder="full name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="pre-label pre-label-sm">Đại chỉ Email</label>
                                        <input class="form-control form-control-simple email" id="email"
                                            type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="pre-label pre-label-sm">Số điện thoại</label>
                                        <input class="form-control form-control-simple phone" id="phone"
                                            type="number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="pre-label pre-label-sm">Giới tính</label>
                                        <select class="custom-select form-control-simple sex" style="color: black"
                                            id="sex">
                                            <option value="0">Nam</option>
                                            <option value="1">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="pre-label pre-label-sm">Ngày sinh</label>
                                        <input class="form-control form-control-simple dob" id="dob"
                                            type="date">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="pre-label pre-label-sm">Mô tả thêm</label>
                                        <input class="form-control form-control-simple" id="aboutme" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <div class="custom-control custom-checkbox d-block">
                                        </div>
                                        <button class="btn btn-rounded btn-outline-primary btn-sm px-3 mt-3 mt-sm-0 luu"
                                            type="button">
                                            <i class="fa fa-save mr-2"></i>Lưu thay đổi
                                        </button>
                                        <button
                                            class="btn btn-rounded btn-outline-primary btn-sm px-3 mt-3 mt-sm-0 chinhsua"
                                            type="button">
                                            <i class="fa fa-save mr-2"></i>Chỉnh sửa thông tin
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <style>
            .color-v {
                color: #8d47ff;
            }
        </style>
    </section>
@endsection

@section('js')
    <script src="/customer/infomation/js/vendor/jquery.min.js"></script>
    <script src="/customer/infomation/js/vendor/bootstrap.bundle.js"></script>
    <script src="/customer/infomation/js/vendor/in-view.min.js"></script>
    <script src="/customer/infomation/js/vendor/jquery.lavalamp.js"></script>
    <script src="/customer/infomation/js/vendor/owl.carousel.js"></script>
    <script src="/customer/infomation/js/vendor/rellax.js"></script>
    <script src="/customer/infomation/js/vendor/wow.js"></script>
    <script src="/customer/infomation/js/vendor/tabzy.js"></script>
    <script src="/customer/infomation/js/vendor/isotope.pkgd.js"></script>

    <!-- Template Scripts -->
    <script>
        var route_prefix = "/laravel-filemanager";
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $(".lfm").filemanager('image', {
            prefix: route_prefix
        });
    </script>
    <script src="/customer/infomation/js/main.js"></script>
    <script src="/customer/infomation/js/custom.js"></script>
    <script src="/customer/script/infomation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="/js/inewsticker.js"></script>
    <script>
        $(document).ready(function() {
            $('.offer-box').inewsticker({
                speed: 3000,
                effect: 'fade',
                dir: 'ltr',
                font_size: 13,
                color: '#ffffff',
                font_family: 'Montserrat, sans-serif',
                delay_after: 1000
            });
        });
    </script>
@endsection
