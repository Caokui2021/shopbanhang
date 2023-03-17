@extends('admin.master')

@section('title')
    Quản lý sản phẩm
@endsection

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <form id="form">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Tên Sản Phẩm</label>
                                <input class="form-control ten_san_pham text-dark" name="ten_san_pham" type="text" placeholder="Nhập vào tên sản phẩm">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Slug Sản Phẩm</label>
                                <input class="form-control slug_san_pham text-dark" name="slug_san_pham" type="text" placeholder="Nhập vào slug sản phẩm">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Giá Bán</label>
                                <input class="form-control don_gia_ban text-dark" name="don_gia_ban" type="text" placeholder="Nhập vào giá bán sản phẩm">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Giá Khuyến Mãi</label>
                                <input class="form-control don_gia_khuyen_mai text-dark" name="don_gia_khuyen_mai" type="text" placeholder="Nhập vào giá khuyến mãi sản phẩm">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Hình Ảnh</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <a data-input="thumbnail" data-preview="holder" class="btn btn-info lfm text-dark">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail" class="form-control text-dark" type="text" name="hinh_anh">
                                </div>
                                <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Tình Trạng</label>
                                <select name="is_open" class="form-control is_open text-dark">
                                    <option value=1>Còn hàng</option>
                                    <option value=0>Hết hàng</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Danh Mục</label>
                                <select name="danh_muc_id" class="form-control danh_muc text-dark">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="mb-3" style="display: flex">
                                <label class="form-label mr-3">Kích thước:</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="size1">
                                    <label class="custom-control-label" for="size1">S</label>
                                </div>
                                <div class="custom-control custom-checkbox ml-2">
                                    <input type="checkbox" class="custom-control-input" id="size2">
                                    <label class="custom-control-label" for="size2">M</label>
                                </div>
                                <div class="custom-control custom-checkbox ml-2">
                                    <input type="checkbox" class="custom-control-input" id="size3">
                                    <label class="custom-control-label" for="size3">L</label>
                                </div>
                                <div class="custom-control custom-checkbox ml-2">
                                    <input type="checkbox" class="custom-control-input" id="size4">
                                    <label class="custom-control-label" for="size4">XL</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3 text-right">
                            <div class="mb-3" style="display: flex">
                                <label class="form-label mr-3">Màu sắc:</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="color1">
                                    <label class="custom-control-label" for="color1">Black</label>
                                </div>
                                <div class="custom-control custom-checkbox ml-2">
                                    <input type="checkbox" class="custom-control-input" id="color2">
                                    <label class="custom-control-label" for="color2">White</label>
                                </div>
                                <div class="custom-control custom-checkbox ml-2">
                                    <input type="checkbox" class="custom-control-input" id="color3">
                                    <label class="custom-control-label" for="color3">Yollow</label>
                                </div>
                                <div class="custom-control custom-checkbox ml-2">
                                    <input type="checkbox" class="custom-control-input" id="color4">
                                    <label class="custom-control-label" for="color4">Pink</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-label text-dark">Mô tả ngắn</label>
                            <textarea class="form-control mo_ta_ngan text-dark" name="mo_ta_ngan" cols="30" rows="3"
                                placeholder="Nhập vào mô tả ngắn sản phẩm"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label text-dark mt-3">Mô tả chi tiết</label>
                            <textarea class="form-control mo_ta_chi_tiet text-dark" name="mo_ta_chi_tiet" cols="30" rows="10" placeholder="Nhập vào mô tả chi tiết sản phẩm"></textarea>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <input class="btn btn-light" type="reset" value="Cancel">
                        <button class="btn btn-info" type="submit">Thêm Sản Phẩm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Card header -->
        <div class="card-header border-0 d-flex align-items-center">
            <h3 class="mb-0 ml-2 mr-5" style="padding-right: 7rem">Danh sách sản phẩm!</h3>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush table-SanPham" id="tableadmin">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort">Hình ảnh</th>
                        <th scope="col" class="sort" data-sort="ma">Mã sản phẩm</th>
                        <th scope="col" class="sort" data-sort="ten">Tên sản phẩm</th>
                        <th scope="col" class="sort" data-sort="slug">Slug sản phẩm</th>
                        <th scope="col" class="sort" data-sort="gia_ban">Giá bán</th>
                        <th scope="col" class="sort" data-sort="gia_khuyen_mai">Giá khuyễn mãi</th>
                        <th scope="col" class="sort" data-sort="danh_muc">Danh mục</th>
                        <th scope="col" class="sort" data-sort="status">Tình trạng</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <a href="#" class="avatar rounded-circle">
                                    <img alt="Image placeholder" src="/admin/assets/img/theme/bootstrap.jpg">
                                </a>
                            </div>
                        </th>
                        <th class="ma">
                            MSP1
                        </th>
                        <th class="ten">
                            Áo hoodie
                        </th>
                        <th class="slug">
                            ao-hoodie
                        </th>
                        <th class="gia_ban">
                            350.000
                        </th>
                        <th class="gia_khuyen_mai">
                            50.000
                        </th>
                        <th class="danh_muc">
                            Áo thu đông
                        </th>
                        <td>
                            <span class="badge badge-dot">
                                <i class="bg-success"></i>
                                <span class="btn btn-sm">Còn hàng</span>
                            </span>
                        </td>
                        <td class="text-right">
                            <i class="fa-solid fa-pencil btn btn-info btn-sm"></i>
                            <i class="fa-solid fa-trash-can btn btn-danger btn-sm"></i>
                        </td>
                    </tr> --}}
                </tbody>
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="mt-3 ml-4">
                            <h4 class="modal-title text-center" id="exampleModalCenterTitle">Chỉnh sửa sản phẩm!!!</h4>
                        </div>
                        <div class="mr-3 ml-3">
                            <input type="text" id="id_san_pham_edit" hidden>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tên Sản Phẩm</label>
                                        <input class="form-control ten_san_pham_edit text-dark" name="ten_san_pham" type="text" placeholder="Nhập vào tên sản phẩm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Slug Sản Phẩm</label>
                                        <input class="form-control slug_san_pham_edit text-dark" name="slug_san_pham" type="text" placeholder="Nhập vào slug sản phẩm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Giá Bán</label>
                                        <input class="form-control don_gia_ban_edit text-dark" name="don_gia_ban" type="number" placeholder="Nhập vào giá bán sản phẩm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Giá Khuyến Mãi</label>
                                        <input class="form-control don_gia_khuyen_mai_edit text-dark" name="don_gia_khuyen_mai" type="number" placeholder="Nhập vào giá khuyến mãi sản phẩm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tình Trạng</label>
                                        <select name="is_open" class="form-control is_open_edit text-dark">
                                            <option value=1>Còn hàng</option>
                                            <option value=0>Hết hàng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Danh Mục</label>
                                        <select name="danh_muc_id" class="form-control danh_muc_id_edit text-dark">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Hình Ảnh</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a data-input="thumbnail_edit" style="height: 30pt"
                                                    data-preview="holde" class="btn btn-info lfm">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                            <input style="height: 40.4px;" id="thumbnail_edit"
                                                class="form-control hinh_anh_edit" type="text" name="hinh_anh"
                                                placeholder="Chọn hình ảnh">
                                        </div>
                                        <div id="holde" style="margin-top:15px;max-height:100px;"> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label text-dark">Mô tả ngắn</label>
                                    <textarea class="form-control mo_ta_ngan_edit text-dark" name="mo_ta_ngan" cols="30" rows="3"
                                        placeholder="Nhập vào mô tả ngắn sản phẩm"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label text-dark mt-3">Mô tả chi tiết</label>
                                    <textarea class="form-control mo_ta_chi_tiet_edit text-dark" name="mo_ta_chi_tiet" cols="30" rows="10" placeholder="Nhập vào mô tả chi tiết sản phẩm"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-right mb-3 mr-3 mt-2">
                            <button type="button" class="btn btn-secondary btn-sm"
                                data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-info btn-sm updateSanPham"
                                data-dismiss="modal">Update</button>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="mt-3 ml-4">
                                <h4 class="modal-title" id="exampleModalCenterTitle">Xóa sản phẩm!!!</h4>
                                <button type="button" class="close mr-3" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="">
                                <input type="text" id="id_san_pham_delete" hidden>
                                <div class="bg-secondary p-3" role="alert">
                                    <p class="text-dark">Bạn có chắc chắn muốn xóa sản phẩm này không!</p>
                                    <p><i class="text-dark">Lưu ý: Hành động không thể khôi phục lại</i>.</p>
                                </div>
                            </div>
                            <div class="text-right mb-3 mr-3 mt-2">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"
                                    id="deleteSanPham">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/app.js"></script>
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
    <script src="/admin/script/sanpham/sanpham.js"></script>
@endsection
