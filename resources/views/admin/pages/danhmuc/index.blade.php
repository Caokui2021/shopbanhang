@extends('admin.master')

@section('title')
    Quản lý danh mục
@endsection

@section('content')
    <style>
        .autocomplete-suggestions {
            border: 1px solid #999;
            background: #FFF;
            overflow: auto;
            border: 2px solid rgb(238, 238, 238);
            border-radius: 10px;
            color: #000;
            margin-top: 5px;
            font-size: 14px
        }

        .autocomplete-suggestion {
            padding: 2px 5px;
            white-space: nowrap;
            overflow: hidden;
        }

        .autocomplete-suggestions strong {
            font-weight: normal;
            color: #000000;
        }

        .autocomplete-selected {
            background: #F0F0F0;
        }

        .autocomplete-group {
            padding: 2px 5px;
        }

        .autocomplete-group strong {
            display: block;
            border-bottom: 1px solid #000;
        }
    </style>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h3>Thêm mới danh mục</h3>
                        </div>
                        <div class="card-body">
                            <form id="form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:black">Tên danh mục</label>
                                            <input class="form-control ten_danh_muc" name="ten_danh_muc" type="text"
                                                placeholder="Nhập vào tên danh mục">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Slug danh mục</label>
                                            <input class="form-control slug_danh_muc" name="slug_danh_muc" type="text"
                                                placeholder="Nhập vào slug danh mục">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Hình ảnh</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a data-input="thumbnail" style="height: 30pt" data-preview="holder"
                                                        class="btn btn-info lfm">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <input style="height: 40.4px;" id="thumbnail" class="form-control"
                                                    type="text" name="hinh_anh" placeholder="Chọn hình ảnh">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Danh mục cha</label>
                                            <select name="id_danh_muc_cha" class="form-control text-dark id_danh_muc_cha">
                                                <option value=0>Root</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Tình trạng</label>
                                            <select name="is_open" class="form-control text-dark">
                                                <option value="1">Hiện thị</option>
                                                <option value="0">Tạm tắt</option>
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
            </div>
            <div class="col-md-8">
                <!-- Card header -->
                <div class="card-header border-0 d-flex align-items-center">
                    <h3 class="mb-0 ml-2 mr-5" style="padding-right: 7rem">Danh sách danh mục</h3>
                    <form class="navbar-search-light form-inline mr-sm-3 ml-5" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" id="searchDanhMuc" placeholder="Search" type="text"
                                    style="width: 17rem; height: 2rem">
                                    <div id="ket_qua"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush table-danhmuc" id="tabledanhmuc">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort">Hình ảnh</th>
                                <th scope="col" class="sort" data-sort="ma">Mã danh mục</th>
                                <th scope="col" class="sort" data-sort="name">Tên danh mục</th>
                                <th scope="col" class="sort" data-sort="slug">Slug danh mục</th>
                                <th scope="col" class="sort" data-sort="danh-muc">Danh mục cha</th>
                                <th scope="col" class="sort" data-sort="status">Tình trạng</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle">
                                            <img alt="Image placeholder"
                                                src="/admin/assets/img/theme/bootstrap.jpg">
                                        </a>
                                    </div>
                                </th>
                                <th class="name">
                                    Tên danh mục
                                </th>
                                <th class="slug">
                                    Slug danh mục
                                </th>
                                <th class="danh-muc">
                                    Danh mục cha
                                </th>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">pending</span>
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
                                    <div class="mr-3 ml-3">
                                        <input type="text" id="id_danh_muc_edit" hidden>
                                        <div class="mb-3">
                                            <label class="form-label" style="color:black">Tên danh mục</label>
                                            <input class="form-control text-dark ten_danh_muc_edit" name="ten_danh_muc"
                                                type="text" placeholder="Nhập vào tên danh mục">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Slug danh mục</label>
                                            <input class="form-control text-dark slug_danh_muc_edit" name="slug_danh_muc"
                                                type="text" placeholder="Nhập vào slug danh mục">
                                        </div>
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
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Danh mục cha</label>
                                            <select name="id_danh_muc_cha"
                                                class="form-control text-dark text-dark id_danh_muc_cha_edit">
                                                <option value=0>Root</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-dark">Tình trạng</label>
                                            <select name="is_open" class="form-control text-dark text-dark is_open_edit">
                                                <option value="1">Hiện thị</option>
                                                <option value="0">Tạm tắt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="text-right mb-3 mr-3 mt-2">
                                        <button type="button" class="btn btn-secondary btn-sm"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-info btn-sm updateDanhMuc"
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
                                        <h4 class="modal-title" id="exampleModalCenterTitle">Xóa danh mục!!!</h4>
                                        <button type="button" class="close mr-3" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="">
                                        <input type="text" id="id_danh_muc_delete" hidden>
                                        <div class="bg-secondary p-3" role="alert">
                                            <p class="text-dark">Bạn có chắc chắn muốn xóa danh mục này không!</p>
                                            <p><i class="text-dark">Lưu ý: Hành động không thể khôi phục lại</i>.</p>
                                        </div>
                                    </div>
                                    <div class="text-right mb-3 mr-3 mt-2">
                                        <button type="button" class="btn btn-secondary btn-sm"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"
                                            id="deleteDanhMuc">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item">
                                <a class="page-link">
                                    <i class="btn-prev fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <div class="pagination" id="number-pages">
                                {{-- <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
                            </div>
                            <li class="page-item">
                                <a class="page-link">
                                    <i class="btn-next fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script>
    <script>
        var route_prefix = "/laravel-filemanager";
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $(".lfm").filemanager('image', {prefix : route_prefix});
    </script>
    <script src="/admin/script/danhmuc/danhmuc.js"></script>
@endsection
