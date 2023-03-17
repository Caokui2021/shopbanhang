$(document).ready(function() {
    $("#form").submit(function(e) {
        e.preventDefault();
        var payload = window.getFormData($(this));
    axios
        .post('/admin/san-pham/index', payload)
        .then((res) => {
            if(res.data.sanpham) {
                toastr.success("Đã tạo sản phẩm thành công!");
                loadListSanPham();
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        })
        .catch((res) => {
            var listError = res.response.data.errors;
            $.each(listError, function(key, value) {
                toastr.error(value[0]);
            });
        });
    });

    $(".updateSanPham").click(function() {
        var payload = {
            'id'                :   $("#id_san_pham_edit").val(),
            'ten_san_pham'      :   $(".ten_san_pham_edit").val(),
            'slug_san_pham'     :   $(".slug_san_pham_edit").val(),
            'is_open'           :   $(".is_open_edit").val(),
            'don_gia_ban'       :   $(".don_gia_ban_edit").val(),
            'don_gia_khuyen_mai':   $(".don_gia_khuyen_mai_edit").val(),
            'danh_muc_id'       :   $(".danh_muc_id_edit").val(),
            'hinh_anh'          :   $(".hinh_anh_edit").val(),
            'mo_ta_ngan'        :   $(".mo_ta_ngan_edit").val(),
            'mo_ta_chi_tiet'    :   $(".mo_ta_chi_tiet_edit").val(),
        };
        axios
            .post('/admin/san-pham/update', payload)
            .then((res) => {
                toastr.success("Đã cập nhật sản phẩm thành công!");
                loadListSanPham();
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            });
    });

    $("body").on('click', '.edit', function(){
        var id_san_pham = $(this).data('id');
        $("#id_san_pham_edit").val(id_san_pham);
        axios
        .get('/admin/san-pham/edit/' + id_san_pham)
        .then((res) => {
            if(res.data.status) {
                $("#id_san_pham_edit").val(res.data.san_pham.id);
                $(".ten_san_pham_edit").val(res.data.san_pham.ten_san_pham);
                $(".slug_san_pham_edit").val(res.data.san_pham.slug_san_pham);
                $(".don_gia_ban_edit").val(res.data.san_pham.don_gia_ban);
                $(".don_gia_khuyen_mai_edit").val(res.data.san_pham.don_gia_khuyen_mai);
                $(".hinh_anh_edit").val(res.data.san_pham.hinh_anh);
                $(".is_open_edit").val(res.data.san_pham.is_open);
                $(".danh_muc_id_edit").val(res.data.san_pham.danh_muc_id);
                $(".mo_ta_ngan_edit").val(res.data.san_pham.mo_ta_ngan);
                $(".mo_ta_chi_tiet_edit").val(res.data.san_pham.mo_ta_chi_tiet);
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    });

    $("#deleteSanPham").click(function() {
        var id_san_pham = $("#id_san_pham_delete").val();
        axios
        .get('/admin/san-pham/destroy/' + id_san_pham)
        .then((res) => {
            if(res.data.status) {
                toastr.success("Đã xóa danh mục thành công!");
                loadListSanPham();
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    });

    $("body").on('click', '.delete', function(){
        var id_danh_muc = $(this).data('id');
        $("#id_san_pham_delete").val(id_danh_muc);
    });

    $('body').on('click','.doitrangthai',function(){
        var san_pham_id = $(this).data('id');
        axios
        .get('/admin/san-pham/update-status/' + san_pham_id)
        .then((res) => {
            if(res.data.status) {
                toastr.success("Đã cập nhật sản phẩm!");
                loadListSanPham();
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    });

    loadDanhMuc();

    loadListSanPham();

    function loadListSanPham()
    {
        axios
        .get('/admin/san-pham/get-data')
        .then((res) => {
            viewTable(res.data.sanpham);
        });
    };

    function loadDanhMuc()
    {
        axios
        .get('/admin/danh-muc/get-data')
        .then((res) => {
            DanhMuc(res.data.danhmuc);
        });
    }

    function DanhMuc(listDanhMuc)
    {
        var danh_muc = '';
        $.each(listDanhMuc, function(key, value) {
            danh_muc += '<option value='+ value.id +'>' + value.ten_danh_muc + '</option>';
        });
        $(".danh_muc").html(danh_muc);
        $(".danh_muc_id_edit").html(danh_muc);

    };

    function viewTable(listSanPham) {
        var content = '';
        $.each(listSanPham, function(key, value) {
            content += loadSanPham(value, key + 1);
        });
        $(".table-SanPham tbody").html(content);
    };

    function loadSanPham(value, key) {
        var hinh_anh_new = value.hinh_anh.split(',')[0];
        var content = '';

        content += '<tr>';
        content += '<th scope="row">';
        content += '<div class="media align-items-center">';
        content += '<a href="#" class="avatar rounded-circle">';
        content += '<img style="height:50px;width:50px" alt="Image placeholder" src="'+ hinh_anh_new +'">';
        content += '</a>';
        content += '</div>';
        content += '</th>';
        content += '<th class="ma">' + value.ma_san_pham + '</th>';
        content += '<th class="ten">'+ value.ten_san_pham +'</th>';
        content += '<th class="slug">'+ value.slug_san_pham + '</th>';
        content += '<th class="gia_ban">'+ formatNumber(value.don_gia_ban) + '</th>';
        content += '<th class="gia_khuyen_mai">'+ formatNumber(value.don_gia_khuyen_mai) +'</th>';
        content += '<th class="danh_muc">'+ value.ten_danh_muc +'</th>';
        content += '<td>';
        if (value.is_open == 1) {
            content += '<span class="badge badge-dot">';
            content += '<i class="bg-success"></i>';
            content += '<Còn class="btn btn-sm doitrangthai" data-id="'+ value.id +'">Còn hàng</span>';
            content += '</span>';
        } else {
            content += '<span class="badge badge-dot">';
            content += '<i class="bg-danger"></i>';
            content += '<span class="btn btn-sm doitrangthai" data-id="'+ value.id +'">Hết hàng</span>';
            content += '</span>';
        }
        content += '</td>';
        content += '<td class="text-right">';
        content += '<i class="fa-solid fa-pencil btn btn-info btn-sm edit" data-toggle="modal" data-target="#editModal" data-id="'+ value.id +'"></i>';
        content += '<i class="fa-solid fa-trash-can btn btn-danger btn-sm delete" data-toggle="modal" data-target="#deleteModal" data-id="'+ value.id +'"></i>';
        content += '</td>';
        content += '</tr>';

        return content;
    };

    function formatNumber(number)
    {
        return new Intl.NumberFormat("en-US",{ style: 'currency', currency: 'USD' }).format(number);
        // return new Intl.NumberFormat('vi-VI', { style: 'currency', currency: 'VND' }).format(number);
    }

    function converToSlug(str) {
        str = str.toLowerCase();

        str = str
            .normalize('NFD') // chuyển chuỗi sang unicode tổ hợp
            .replace(/[\u0300-\u036f]/g, ''); // xóa các ký tự dấu sau khi tách tổ hợp

        // Thay ký tự đĐ
        str = str.replace(/[đĐ]/g, 'd');

        // Xóa ký tự đặc biệt
        str = str.replace(/([^0-9a-z-\s])/g, '');

        // Xóa khoảng trắng thay bằng ký tự -
        str = str.replace(/(\s+)/g, '-');

        // Xóa ký tự - liên tiếp
        str = str.replace(/-+/g, '-');

        // xóa phần dư - ở đầu & cuối
        str = str.replace(/^-+|-+$/g, '');

        // return
        return str;
    };

    $(".ten_san_pham").keyup(function(){
        var ten_san_pham  = $(".ten_san_pham").val();
        var slug = converToSlug(ten_san_pham);
        $(".slug_san_pham").val(slug);
    });
    $(".ten_san_pham_edit").keyup(function(){
        var ten_san_pham  = $(".ten_san_pham_edit").val();
        var slug = converToSlug(ten_san_pham);
        $(".slug_san_pham_edit").val(slug);
    });
});
