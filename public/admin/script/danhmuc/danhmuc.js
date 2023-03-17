$(document).ready(function() {
	$("#form").submit(function(e) {
        e.preventDefault();
        var payload = window.getFormData($(this));
        axios
            .post('/admin/danh-muc/index', payload)
            .then((res) => {
                if(res.data.status) {
                    toastr.success("Đã tạo danh mục thành công!");
                    loadListDanhMuc();
                }
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            });
    });

    $(".updateDanhMuc").click(function() {
        var payload = {
            'id'                :   $("#id_danh_muc_edit").val(),
            'ten_danh_muc'      :   $(".ten_danh_muc_edit").val(),
            'slug_danh_muc'     :   $(".slug_danh_muc_edit").val(),
            'id_danh_muc_cha'   :   $(".id_danh_muc_cha_edit").val(),
            'is_open'           :   $(".is_open_edit").val(),
            'hinh_anh'          :   $(".hinh_anh_edit").val(),
        };
        axios
            .post('/admin/danh-muc/update', payload)
            .then((res) => {
                toastr.success("Đã cập nhật danh mục thành công!");
                loadListDanhMuc();
            })
            .catch((res) => {

            });
    });

    $("body").on('click', '.edit', function(){
        var id_danh_muc = $(this).data('id');
        $("#id_danh_muc_edit").val(id_danh_muc);
        axios
        .get('/admin/danh-muc/edit/' + id_danh_muc)
        .then((res) => {
            if(res.data.status) {
                console.log(res.data.danh_muc.ten_danh_muc_cha);
                $("#id_danh_muc_edit").val(res.data.danh_muc.id);
                $(".ten_danh_muc_edit").val(res.data.danh_muc.ten_danh_muc);
                $(".slug_danh_muc_edit").val(res.data.danh_muc.slug_danh_muc);
                $(".hinh_anh_edit").val(res.data.danh_muc.hinh_anh);
                $(".is_open_edit").val(res.data.danh_muc.is_open);
                $(".id_danh_muc_cha_edit").val(res.data.danh_muc.id_danh_muc_cha);
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    });

    $("#deleteDanhMuc").click(function() {
        var id_danh_muc = $("#id_danh_muc_delete").val();
        axios
        .get('/admin/danh-muc/destroy/' + id_danh_muc)
        .then((res) => {
            if(res.data.status) {
                toastr.success("Đã xóa danh mục thành công!");
                loadListDanhMuc();
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    });

    $("body").on('click', '.delete', function(){
        var id_danh_muc = $(this).data('id');
        $("#id_danh_muc_delete").val(id_danh_muc);
    });

    $('body').on('click','.doiTrangThai',function(){
        var danh_muc_id = $(this).data('id');
        axios
        .get('/admin/danh-muc/update-status/' + danh_muc_id)
        .then((res) => {
            if(res.data.status) {
                toastr.success("Đã cập nhật danh mục!");
                loadListDanhMuc();
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    });

    let countParts;
    loadListDanhMuc();

    function loadListDanhMuc()
    {
        axios
        .get('/admin/danh-muc/get-data')
        .then((res) => {
            countParts = res.data.count;
            viewTable(res.data.danhmuc);
            loadDanhMucCha(res.data.danhmuccha);
        });
    };

    function loadDanhMucCha(listDanhMucCha)
    {
        var danh_muc_cha = "<option value=0>Root</option>";
        $.each(listDanhMucCha, function(key, value) {
            danh_muc_cha += '<option value='+ value.id +'>' + value.ten_danh_muc + '</option>';
        });
        $(".id_danh_muc_cha").html(danh_muc_cha);
        $(".id_danh_muc_cha_edit").html(danh_muc_cha);
    };

    function viewTable(listDanhMuc) {
        var content = '';
        $.each(listDanhMuc, function(key, value) {
            if (key >= start && key <= end) {
                content += loadDanhMuc(value, key + 1);
            }
        });
        $(".table-danhmuc tbody").html(content);
    };

    function loadDanhMuc(value, key) {
        var content = '';

        content += '<tr>';
        content += '<th scope="row">';
        content += '<div class="media align-items-center">';
        content += '<a href="#" class="avatar rounded-circle">';
        content += '<img style="height:50px;width:50px" alt="Image placeholder" src="'+ value.hinh_anh +'">';
        content += '</a>';
        content += '<th class="ma">'+ value.ma_danh_muc +'</th>';
        content += '</div>';
        content += '</th>';
        content += '<th class="name">'+ value.ten_danh_muc +'</th>';
        content += '<th class="slug">'+ value.slug_danh_muc +'</th>';
        if (value.ten_danh_muc_cha != null) {
            content += '<th class="danh-muc">'+ value.ten_danh_muc_cha +'</th>';
        } else {
            content += '<th class="danh-muc">Root</th>';
        }
        content += '<td>';
        if (value.is_open == 1) {
            content += '<span class="badge badge-dot mr-4">';
            content += '<i class="bg-success"></i>';
            content += '<span class="btn btn-sm status doiTrangThai" data-id="'+ value.id + '">Hiển thị</span>';
            content += '</span>';
        } else {
            content += '<span class="badge badge-dot mr-4">';
            content += '<i class="bg-warning"></i>';
            content += '<span class="btn btn-sm status doiTrangThai" data-id="'+ value.id + '">Tạm tắt</span>';
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

    $(".ten_danh_muc").keyup(function(){
        var ten_danh_muc  = $(".ten_danh_muc").val();
        var slug = converToSlug(ten_danh_muc);
        $(".slug_danh_muc").val(slug);
    });

    $(".ten_danh_muc_edit").keyup(function(){
        var ten_danh_muc  = $(".ten_danh_muc_edit").val();
        var slug = converToSlug(ten_danh_muc);
        $(".slug_danh_muc_edit").val(slug);
    });

    $("#searchDanhMuc").autocomplete({
        serviceUrl: '/admin/danh-muc/auto-complete',
        paramName: "ten_danh_muc",
        onSelect: function(suggestion) {
            $("#searchDanhMuc").val(suggestion.value);
        },
        transformResult: function(response) {
            return {
                suggestions: $.map($.parseJSON(response), function(item) {
                    return {
                        value: item.ten_danh_muc,
                    };
                })
            };
        },
    });

    let perPage = 5;
    let curentPage = 1;
    let start = 0;
    let end = perPage;

    const btnNext = document.querySelector('.btn-next');
    const btnPrev = document.querySelector('.btn-prev');

    btnNext.addEventListener('click', function() {
        curentPage++;
        start = (curentPage -1) * (perPage + 1);
        end = curentPage * perPage;
        loadListDanhMuc();
    });

    btnPrev.addEventListener('click', function() {
        curentPage--;
        start = (curentPage -1) * (perPage + 1);
        end = curentPage * perPage;
        loadListDanhMuc();
    });
});


