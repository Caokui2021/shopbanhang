$(document).ready(function() {
    $("#form-order").hide();
    $(".order").click(function() {
        $("#form-profile").hide();
        $("#form-order").show();
    });
    $(".profile").click(function() {
        $("#form-order").hide();
        $("#form-profile").show();
    });

    $(".luu_anh").hide();
    $(".doihinhanh").click(function() {
        $(".doihinhanh").hide();
        $(".luu_anh").show();
    });

    $(".luu").hide();
    $(".chinhsua").click(function() {
        $(".chinhsua").hide();
        $(".luu").show();
        document.getElementById('email').disabled = false;
        document.getElementById('full_name').disabled = false;
        document.getElementById('sex').disabled = false;
        document.getElementById('phone').disabled = false;
        document.getElementById('dob').disabled = false;
        document.getElementById('aboutme').disabled = false;
    });

    $(".luu").click(function() {
        $(".luu").hide();
        $(".chinhsua").show();
        document.getElementById('full_name').disabled = true;
        document.getElementById('email').disabled = true;
        document.getElementById('sex').disabled = true;
        document.getElementById('phone').disabled = true;
        document.getElementById('aboutme').disabled = true;
        document.getElementById('dob').disabled = true;
    });

    document.getElementById('full_name').disabled = true;
    document.getElementById('email').disabled = true;
    document.getElementById('sex').disabled = true;
    document.getElementById('phone').disabled = true;
    document.getElementById('dob').disabled = true;
    document.getElementById('aboutme').disabled = true;

    loadProfile();

    function loadProfile() {
        axios
        .get('/customer/get-profile')
        .then((res) => {
            if(res.data.profile) {
                $("#id").val(res.data.profile.id);
                $(".full_name").val(res.data.profile.full_name);
                $(".email").val(res.data.profile.email);
                $(".sex").val(res.data.profile.sex);
                $(".phone").val(res.data.profile.phone);
                $(".dob").val(res.data.profile.dob);
            }
        });
    }

    $(".luu").click(function() {
        var payload = {
            'id'            :   $("#id").val(),
            'full_name'     :   $(".full_name").val(),
            'email'         :   $(".email").val(),
            'phone'         :   $(".phone").val(),
            'sex'           :   $(".sex").val(),
            'dob'           :   $(".dob").val(),
        }
        axios
            .post('/customer/my-profile', payload)
            .then((res) => {
                toastr.success("Đã cập nhật thành công!");
                loadProfile();
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
            });
        })
    });

    $(".luu_anh").click(function() {
        var payload = {
            'id'       : $("#id").val(),
            'hinh_anh' : $(".hinh_anh").val(),

        }
        axios
            .post('/customer/edit-images', payload)
            .then((res) => {
                toastr.success("Đã cập nhật hình ảnh thành công!");
                location.reload();
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            })

    });

    viewBill();
    function viewBill() {
        axios
        .get('/customer/shop-cart/list-bill')
        .then((res) => {
            var content = '';
            $.each(res.data.listBill, function(key, value) {
                content += '<tr class="text-dark">';
                content += '<td class="text-dark">'+ value.bill_name +'</td>';
                content += '<td class="text-dark">'+ formatDate(value.created_at) +'</td>';
                content += '<td class="text-dark">'+ formatNumber(value.bill_total) +'</td>';
                content += '<td class="text-dark">';
                if (value.is_payment == 0) {
                    content += '<span class="text-danger">Chưa thanh toán</span>';
                } else {
                    content += '<span class="text-success">Đã thanh toán</span>';
                }
                content += '</td>';
                content += '<td><i class="fa fa-angle-double-right btn btn-sm chitiet" data-id="'+ value.id +'" data-toggle="modal"data-target=".bd-example-modal-lg"></i></td>'
                content += '</tr>';

            });
            $(".listBill tbody").html(content);
        });
    }

    function formatNumber(number)
    {
        return new Intl.NumberFormat("en-US",{ style: 'currency', currency: 'USD' }).format(number);
        // return new Intl.NumberFormat('vi-VI', { style: 'currency', currency: 'VND' }).format(number);
    }
    $('body').on('click','.thanhToanx',function(){
        $(".tieude").hide();
        $(".chiTietHoaDon").hide();
        $(".hoadon1").hide();
        $(".hoadon2").show();

    })
    $('body').on('click','.chitiet',function(){
        $(".tieude").show();
        $(".chiTietHoaDon").show();
        $(".hoadon1").hide();
        $(".hoadon2").hide();
        $(".dathanhtoan").hide();
        var id_don_hang = $(this).data("id");
        $("#id_don_hang").val(id_don_hang);
        axios
        .get('/customer/shop-cart/chitiet-bill/' + id_don_hang)
        .then((res) => {
            if(res.data.status) {
                var content_sp = '';
                var tongtien = 0;
                $.each(res.data.listOrder, function(key, value) {
                    var hinh_anh_new = value.hinh_anh.split(',')[0];
                    content_sp += '<tr class="text-dark">';
                    // content_sp += '<td><input type="text" id="id_don_hang"></td>';
                    content_sp += '<td class="id"><img style ="height:50px; width:50px" src="'+ hinh_anh_new +'" alt=""></td>';
                    content_sp += '<td class="ten">'+ value.ten_san_pham +'</td>';
                    content_sp += '<td class="sumQty">'+ value.so_luong_mua +' sp</td>';
                    content_sp += '<td class="sumPri">'+ formatNumber(value.so_luong_mua * value.don_gia_mua) +'</td>';
                    content_sp += '</tr>';
                    tongtien += value.so_luong_mua * value.don_gia_mua;
                    if (value.is_payment == 1) {
                        $(".dathanhtoan").show();
                    } else {
                        $(".hoadon1").show();
                    }

                });
                $(".chiTietHoaDon tbody").html(content_sp);
                $(".tongTien").html(tongtien);
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    })
    function formatPrice(value)
    {
        let val = (value/1).toFixed(0).replace('.', ',')
        return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
    };
    function formatDate(datetime)
    {
        const input = datetime;
        const dateObj = new Date(input);
        const year = dateObj.getFullYear();
        const month = (dateObj.getMonth()+1).toString().padStart(2, '0');
        const date = dateObj.getDate().toString().padStart(2, '0');

        const result = `${date}/${month}/${year}`;

        return result;
    };
});
