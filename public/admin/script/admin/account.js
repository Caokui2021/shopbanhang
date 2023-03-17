$(document).ready(function() {
    $("#form").submit(function(e) {
        e.preventDefault();
        var payload = window.getFormData($(this));

        axios
            .post('/admin/account/index', payload)
            .then((res) => {
                toastr.success("Đã tạo danh mục thành công!");
                loadListAdmin();
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            });
    });

    $(".updateAdmin").click(function() {
        var payload = {
            'id'            :   $("#id_admin_edit").val(),
            'full_name'     :   $(".full_name_edit").val(),
            'email'         :   $(".email_edit").val(),
            'so_dien_thoai' :   $(".so_dien_thoai_edit").val(),
            'gioi_tinh'     :   $(".gioi_tinh_edit").val(),
            'hinh_anh'      :   $(".hinh_anh_edit").val(),
            'is_master'     :   $(".is_master_edit").val(),
            'is_block'      :   $(".is_block_edit").val(),
        };
        console.log(payload);
        axios
            .post('/admin/account/update', payload)
            .then((res) => {
                toastr.success("Đã cập nhật tài khoản thành công!");
                loadListAdmin();
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            });
    });

    $("#deleteAdmin").click(function() {
        var id_admin = $("#id_admin_delete").val();
        axios
        .get('/admin/account/destroy/' + id_admin)
        .then((res) => {
            if(res.data.status) {
                toastr.success("Đã xóa tài khoản thành công!");
                loadListAdmin();
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    });

    $("body").on('click', '.delete', function(){
        var id_admin = $(this).data('id');
        $("#id_admin_delete").val(id_admin);
    });

    $("body").on('click', '.edit', function(){
        var id_admin = $(this).data('id');
        $("#id_admin_edit").val(id_admin);
        axios
        .get('/admin/account/edit/' + id_admin)
        .then((res) => {
            if(res.data.status) {
                $("#id_admin_edit").val(res.data.admin.id);
                $(".full_name_edit").val(res.data.admin.ho_lot +' '+ res.data.admin.ten);
                $(".email_edit").val(res.data.admin.email);
                $(".hinh_anh_edit").val(res.data.admin.hinh_anh);
                $(".gioi_tinh_edit").val(res.data.admin.gioi_tinh);
                $(".so_dien_thoai_edit").val(res.data.admin.so_dien_thoai);
                $(".is_master_edit").val(res.data.admin.is_master);
                $(".is_block_edit").val(res.data.admin.is_block);
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    });

    $('body').on('click','.doitrangthai',function(){
        var admin_id = $(this).data('id');
        axios
        .get('/admin/account/update-status/' + admin_id)
        .then((res) => {
            if(res.data.status) {
                toastr.success("Đã cập nhật tài khoản!");
                loadListAdmin();
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    });


    loadListAdmin();

    function loadListAdmin()
    {
        axios
        .get('/admin/account/get-data')
        .then((res) => {
            viewTable(res.data.account);
        });
    };

    function viewTable(listAdmin) {
        var content = '';
        $.each(listAdmin, function(key, value) {
            content += loadAmin(value, key + 1);
        });
        $(".table-admin tbody").html(content);
    }

    function loadAmin(value, key) {
        var content = '';

        content += '<tr>';
        content += '<th scope="row">';
        content += '<div class="media align-items-center">';
        content += '<a href="#" class="avatar rounded-circle">';
        content += '<img style="height:50px;width:50px" alt="Image placeholder" src="'+ value.hinh_anh +'">';
        content += '</a>';
        content += '</div>';
        content += '</th>';
        content += '<th class="full_name">' + value.ho_lot + ' ' + value.ten + '</th>';
        content += '<th class="email">' + value.email + '</th>';
        if (value.gioi_tinh == 0) {
            content += '<th class="sex">Nam</th>';
        } else {
            content += '<th class="sex">Nữ</th>';
        }
        content += '<th class="phone">' + value.so_dien_thoai + '</th>';
        if (value.is_master == 0) {
            content += '<th class="is_master">Quản trị trùm</th>';
        } else {
            content += '<th class="is_master">Nhân viên</th>';
        }
        content += '<td>';
        if (value.is_block == 0) {
            content += '<span class="badge badge-dot mr-4">';
            content += '<i class="bg-success"></i>';
            content += '<span class="btn btn-sm doitrangthai" data-id="'+ value.id + '">Hoạt động</span>';
            content += '</span>';
        } else {
            content += '<span class="badge badge-dot mr-4">';
            content += '<i class="bg-danger"></i>';
            content += '<span class="btn btn-sm doitrangthai" data-id="'+ value.id + '">Bị khóa</span>';
            content += '</span>';
        }
        content += '</td>';
        content += '<td class="text-right">';
        content += '<i class="fa-solid fa-pencil btn btn-info btn-sm edit" data-toggle="modal" data-target="#editModal" data-id="'+ value.id +'"></i>';
        content += '<i class="fa-solid fa-trash-can btn btn-danger btn-sm delete" data-toggle="modal" data-target="#deleteModal" data-id="'+ value.id +'"></i>';
        content += '</td>';
        content += '</tr>';

        return content;
    }

    $(".email").blur(function() {
        var payload = {
            'email': $(".email").val(),
        };
        axios
            .post('/admin/account/check-email', payload)
            .then((res) => {
                if (res.data.status) {
                    $(".message_email").html(
                        '<span class="text-success">Email có thể sử dụng</span>'
                        );
                } else {
                    $(".message_email").html(
                        '<span class="text-danger">Email đã tồn tại</span>');
                }
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            });
    });
});
