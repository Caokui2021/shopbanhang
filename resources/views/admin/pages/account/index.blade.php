@extends('admin.master')

@section('title')
    Quản lý tài khoản quản trị
@endsection

@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Thêm mới tài khoản quản trị</h3>
                    </div>
                    <div class="card-body">
                        <form id="form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Họ và tên</label>
                                        <input type="text" name="full_name" class="form-control text-dark full_name"
                                            placeholder="Nhập vào họ và tên">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Email</label>
                                        <input type="text" name="email" class="form-control text-dark email"
                                            placeholder="Nhập vào email">
                                        <small class="text-danger message_email"></small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Giới tính</label>
                                        <select name="gioi_tinh" class="form-control text-dark gioi_tinh">
                                            <option value="0">Nam</option>
                                            <option value="1">Nữ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control text-dark password"
                                            placeholder="Nhập vào mật khẩu">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Mật khẩu</label>
                                        <input type="password" name="re_password" class="form-control text-dark re-password"
                                            placeholder="Nhập lại mật khẩu">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Số điện thoại</label>
                                        <input type="number" name="so_dien_thoai"
                                            class="form-control text-dark so_dien_thoai" placeholder="Nhập lại mật khẩu">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Hình Ảnh</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <a data-input="thumbnail" style="height: 45px;" data-preview="holde"
                                                    class="btn btn-info lfm">
                                                    <i class="fa fa-picture-o"></i> Choose
                                                </a>
                                            </span>
                                            <input style="height: 45px;" id="thumbnail"
                                                class="form-control hinh_anh" type="text" name="hinh_anh"
                                                placeholder="Chọn hình ảnh">
                                        </div>
                                        <div id="holde" style="margin-top:15px;max-height:100px;"> </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Quyền quản trị</label>
                                        <select name="is_master" class="form-control text-dark is_master">
                                            <option value="0">Quản trị trùm</option>
                                            <option value="1">Nhân viên</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Tình trạng</label>
                                        <select name="is_block" class="form-control text-dark is_block">
                                            <option value="0">Hoạt động</option>
                                            <option value="1">Bị khóa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <input class="btn btn-light" type="reset" value="Cancel">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <!-- Card header -->
                <div class="card-header border-0 d-flex align-items-center">
                    <h3 class="mb-0 ml-2 mr-5" style="padding-right: 7rem">Danh sách tài khoản quản trị!</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush table-admin" id="tableadmin">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort">Hình ảnh</th>
                                <th scope="col" class="sort" data-sort="full_name">Họ và tên</th>
                                <th scope="col" class="sort" data-sort="email">Email</th>
                                <th scope="col" class="sort" data-sort="sex">Giới tính</th>
                                <th scope="col" class="sort" data-sort="phone">Số điện thoại</th>
                                <th scope="col" class="sort" data-sort="is_master">Quyền quản trị</th>
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
                                <th class="full_name">
                                    Nguyễn Duy Thuận
                                </th>
                                <th class="email">
                                    duythuanqb@gmail.com
                                </th>
                                <th class="sex">
                                    Nam
                                </th>
                                <th class="phone">
                                    0708099719
                                </th>
                                <th class="is_master">
                                    Quản trị trùm
                                </th>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>
                                        <span class="btn btn-sm">Hoạt động</span>
                                    </span>
                                </td>
                                <td class="text-right">
                                    <a href="#">
                                        <i class="fa-solid fa-pencil btn btn-info btn-sm"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa-solid fa-trash-can btn btn-danger btn-sm"></i>
                                    </a>
                                </td>
                            </tr> --}}
                        </tbody>
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="mt-3 ml-4">
                                        <h4 class="modal-title text-center" id="exampleModalCenterTitle">Chỉnh sửa danh
                                            mục!!!</h4>
                                    </div>
                                    <div class="mr-3 ml-3 mt-3">
                                        <div class="row">
                                        <input type="text" id="id_admin_edit" hidden>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label text-dark">Họ và tên</label>
                                                <input type="text" name="full_name_edit" class="form-control text-dark full_name_edit"
                                                    placeholder="Nhập vào họ và tên">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label text-dark">Email</label>
                                                <input type="text" name="email_edit" class="form-control text-dark email_edit"
                                                    placeholder="Nhập vào email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label text-dark">Giới tính</label>
                                                <select name="gioi_tinh_edit" class="form-control text-dark gioi_tinh_edit">
                                                    <option value="0">Nam</option>
                                                    <option value="1">Nữ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label text-dark">Số điện thoại</label>
                                                <input type="number" name="so_dien_thoai_edit"
                                                    class="form-control text-dark so_dien_thoai_edit" placeholder="Nhập lại mật khẩu">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label text-dark">Hình Ảnh</label>
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <a data-input="thumbnail_edit" style="height: 30pt"
                                                            data-preview="holder" class="btn btn-info lfm">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                    </span>
                                                    <input style="height: 40.4px;" id="thumbnail_edit"
                                                        class="form-control hinh_anh_edit" type="text" name="hinh_anh"
                                                        placeholder="Chọn hình ảnh">
                                                </div>
                                                <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label text-dark">Quyền quản trị</label>
                                                <select name="is_master_edit" class="form-control text-dark is_master_edit">
                                                    <option value="0">Quản trị trùm</option>
                                                    <option value="1">Nhân viên</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label text-dark">Tình trạng</label>
                                                <select name="is_block_edit" class="form-control text-dark is_block_edit">
                                                    <option value="0">Hoạt động</option>
                                                    <option value="1">Bị khóa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right mb-3 mr-3 mt-2">
                                        <button type="button" class="btn btn-secondary btn-sm"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-info btn-sm updateAdmin"
                                            data-dismiss="modal">Update</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="mt-3 ml-4">
                                        <h4 class="modal-title" id="exampleModalCenterTitle">Xóa tài khoản quản trị!!!</h4>
                                        <button type="button" class="close mr-3" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="">
                                        <input type="text" id="id_admin_delete" hidden>
                                        <div class="bg-secondary p-3" role="alert">
                                            <p class="text-dark">Bạn có chắc chắn muốn xóa tài khoản này không!</p>
                                            <p><i class="text-dark">Lưu ý: Hành động không thể khôi phục lại</i>.</p>
                                        </div>
                                    </div>
                                    <div class="text-right mb-3 mr-3 mt-2">
                                        <button type="button" class="btn btn-secondary btn-sm"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"
                                            id="deleteAdmin">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </table>
                </div>
            </div>
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
    <script src="/admin/script/admin/account.js"></script>
@endsection
