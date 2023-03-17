$(document).ready(function() {
    loadSanPham();

    function loadSanPham() {
        axios
        .get('/admin/san-pham/get-data')
        .then((res) => {
            viewSanPham(res.data.sanpham);
        });
    }

    $("body").on('click', '.delete', function(){
        var id = $(this).data('id');
        var payload = {
            'id'   :   id,
        };
        axios
        .get('/admin/nhap-kho/destroy/' + id)
        .then((res) => {
            if(res.data.nhapkho) {
                toastr.success("Đã xóa sản phẩm thành công!");
                viewNhapKho();
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    });

    $("body").on('click', '.add', function(){
        var id_san_pham = $(this).data('id');
        var payload = {
            'id_san_pham'   :   id_san_pham,
        };

        axios
		.post('/admin/nhap-kho/index', payload)
		.then((res) => {
            toastr.success("Đã thêm sản phẩm!")
            viewNhapKho();
		})
		.catch((res) => {
			var listError = res.response.data.errors;
			$.each(listError, function(key, value) {
				toastr.error(value[0]);
			});
		});
    });

    $(".searchSanPham").keyup(function() {
        var search = $(".searchSanPham").val();
        payload = {
            'search': search,
        };

        axios
		.post('/admin/san-pham/search', payload)
		.then((res) => {
            viewSanPham(res.data.searchsanpham);
		})
		.catch((res) => {
			var listError = res.response.data.errors;
			$.each(listError, function(key, value) {
				toastr.error(value[0]);
			});
		});
    });

    function viewSanPham(listSanPham) {
        var content = '';
        $.each(listSanPham, function(key,value){
            content += '<tr>';
            content += '<th class="name">'+ value.ten_san_pham +'</th>';
            content += '<td class="text-right">';
            content += '<i class="ni ni-active-40 btn btn-secondary btn-sm add" data-id='+ value.id+'></i>';
            content += '</td>';
            content += '</tr>';
         });
         $(".danhsachSanPham tbody").html(content);
    }

    function formatNumber(number)
    {
        return new Intl.NumberFormat("en-US",{ style: 'currency', currency: 'USD' }).format(number);
        // return new Intl.NumberFormat('vi-VI', { style: 'currency', currency: 'VND' }).format(number);
    }

    viewNhapKho();

    function viewNhapKho() {
        axios
        .get('/admin/nhap-kho/get-data')
        .then((res) => {
            var content = '';
            var tongTien = 0;
            var tongSanPham = 0;
            $.each(res.data.nhapkho, function(key, value) {
                content += '<tr>';
                content += '<th class="ma">'+ value.ma_san_pham +'</th>';
                content += '<th class="name">'+ value.ten_san_pham +'</th>';
                content += '<th class="soluong">';
                content += '<input type="number" min=1 class="border border-light qty" style="width: 50px" value="'+value.so_luong_nhap+'" data-id="'+ value.id+'">';
                content += '</th>';
                content += '<th class="dongia">';
                content += '<input type="number" class="border border-light price" style="width: 100px" value="'+value.don_gia_nhap +'" data-id='+ value.id+'>';
                content += '</th>';
                content += '<th class="sum">'+formatNumber(value.so_luong_nhap * value.don_gia_nhap) +'</th>';
                content += '<td class="text-right">';
                content += '<i class="fa-solid fa-trash-can btn btn-danger btn-sm delete" data-id='+ value.id+'></i>';
                content += '</td>';
                content += '</tr>';

                tongTien    = tongTien + value.so_luong_nhap * value.don_gia_nhap;
                tongSanPham = tongSanPham + value.so_luong_nhap;
            });

            $(".listNhapKho tbody").html(content);
            $(".tongTien").text(formatNumber(tongTien));
            $(".tongSanPham").text(tongSanPham);
        });
    }

    $("body").on('change', '.qty', function(){
        var payload = {
            'id'            :   $(this).data('id'),
            'so_luong_nhap' :   $(this).val(),
        };

        axios
        .post('/admin/nhap-kho/update-qty', payload)
        .then((res) => {
            if(res.data.status) {
                toastr.waring("Có lỗi không mong muốn xảy ra!");
            } else {
                toastr.success("Đã cập nhật số lương!");
                viewNhapKho();
            }
        })
        .catch((res) => {
            var listError = res.response.data.errors;
            $.each(listError, function(key, value) {
                toastr.error(value[0]);
            });
        });
    });

    $("body").on('change', '.price', function(){
        var payload = {
            'id'            :   $(this).data('id'),
            'don_gia_nhap'  :   $(this).val(),
        };

        axios
        .post('/admin/nhap-kho/update-pri', payload)
        .then((res) => {
            if(res.data.status == false) {
                toastr.waring("Có lỗi không mong muốn xảy ra!");
            } else {
                toastr.success("Đã cập nhật đơn giá!");
                viewNhapKho();
            }
        })
        .catch((res) => {
            var listError = res.response.data.errors;
            $.each(listError, function(key, value) {
                toastr.error(value[0]);
            });
        });
    });

    // function toVietNam(num) {
    //     var t = [
    //             "không",
    //             "một",
    //             "hai",
    //             "ba",
    //             "bốn",
    //             "năm",
    //             "sáu",
    //             "bảy",
    //             "tám",
    //             "chín",
    //         ],
    //         r = function (r, n) {
    //             var o = "",
    //                 a = Math.floor(r / 10),
    //                 e = r % 10;
    //             return (
    //                 a > 1
    //                     ? ((o = " " + t[a] + " mươi"), 1 == e && (o += " mốt"))
    //                     : 1 == a
    //                     ? ((o = " mười"), 1 == e && (o += " một"))
    //                     : n && e > 0 && (o = " lẻ"),
    //                 5 == e && a >= 1
    //                     ? (o += " lăm")
    //                     : 4 == e && a >= 1
    //                     ? (o += " tư")
    //                     : (e > 1 || (1 == e && 0 == a)) && (o += " " + t[e]),
    //                 o
    //             );
    //         },
    //         n = function (n, o) {
    //             var a = "",
    //                 e = Math.floor(n / 100),
    //                 n = n % 100;
    //             return (
    //                 o || e > 0
    //                     ? ((a = " " + t[e] + " trăm"), (a += r(n, !0)))
    //                     : (a = r(n, !1)),
    //                 a
    //             );
    //         },
    //         o = function (t, r) {
    //             var o = "",
    //                 a = Math.floor(t / 1e6),
    //                 t = t % 1e6;
    //             a > 0 && ((o = n(a, r) + " triệu"), (r = !0));
    //             var e = Math.floor(t / 1e3),
    //                 t = t % 1e3;
    //             return (
    //                 e > 0 && ((o += n(e, r) + " ngàn"), (r = !0)),
    //                 t > 0 && (o += n(t, r)),
    //                 o
    //             );
    //         };

    //     if (0 == num) return t[0];
    //     var str = "",
    //         a = "";
    //     do
    //         (ty = num % 1e9),
    //             (num = Math.floor(num / 1e9)),
    //             (str = num > 0 ? o(ty, !0) + a + str : o(ty, !1) + a + str),
    //             (a = " tỷ");
    //     while (num > 0);
    //     str = str.trim();

    //     return str.charAt(0).toUpperCase() + str.slice(1);
    // };

    $(".nhapkho").click(function() {
        console.log(1212);
        axios
        .get('/admin/hoa-don-nhap-kho/hoa-don')
        .then((res) => {
            if(res.data.status) {
                toastr.success("Đã tạo hóa đơn thành công!");
                viewHoaDon();
                viewNhapKho();
            } else {
                toastr.error(res.message);
                viewNhapKho();
            }
        });
    });

    viewHoaDon();

    function viewHoaDon() {
        axios
        .get('/admin/nhap-kho/lich-su')
        .then((res) => {
            var content = '';
            $.each(res.data.hoadon, function(key, value) {
                content += '<tr class="text-dark">';
                content += '<td class="id">'+ value.ma_hoa_don +'</td>';
                content += '<td class="date">'+ value.created_at +'</td>';
                content += '<td class="sumQty">'+ value.tong_san_pham +' sp</td>';
                content += '<td class="sumPri">'+ formatNumber(value.tong_tien, 0) +'</td>';
                content += '<td class="thanh-toan">';
                if (value.tinh_trang == 0) {
                    content += '<span class="text-danger">Chưa thanh toán</span>';
                } else {
                    content += '<span class="text-success">Đã thanh toán</span>';
                }
                content += '</td>';
                content += '<td>';
                content += '<i class="ni ni-active-40 btn btn-secondary btn-sm chitiet" data-id="'+ value.id +'" data-toggle="modal"data-target=".bd-example-modal-lg"></i>';
                content += '</td>';
                content += '</tr>';
            });

            $(".listHoaDon tbody").html(content);
        });
    }

    $('body').on('click','.chitiet',function(){
        var id_hoa_don = $(this).data("id");
        $("#id_thanh_toan").val(id_hoa_don);
        axios
        .get('/admin/hoa-don-nhap-kho/chitiet/' + id_hoa_don)
        .then((res) => {
            if(res.data.status) {
                var content = '';
                var tongTien = 0;
                $.each(res.data.nhapkho, function(key, value) {
                    tongTien += value.so_luong_nhap * value.don_gia_nhap;
                    content += '<tr>';
                    content += '<th class="stt">'+ (key + 1) +'</th>';
                    content += '<th class="id">'+ value.ma_san_pham +'</th>';
                    content += '<th class="ten">'+ value.ten_san_pham +'</th>';
                    content += '<th class="sumQty">'+ value.so_luong_nhap +' sp</th>';
                    content += '<th class="sumPri">'+ formatNumber(value.don_gia_nhap, 0) +'</th>';
                    content += '<th class="thanh-toan">'+ formatNumber(value.so_luong_nhap * value.don_gia_nhap, 0) +'</th>';
                    content += '</tr>';
                });
                $(".chiTietHoaDon tbody").html(content);
                $("#tongHoaDon").html("Tổng tiền hóa đơn là: " +formatNumber(tongTien, 0));
            } else {
                toastr.error("Có lỗi không mong muốn xảy ra!");
            }
        });
    })

    $("body").on('click', '.thanhtoan', function(){
        var payload = {
            'id'                   : $('#id_thanh_toan').val(),
            'hinh_thuc_thanh_toan' : $('.hinh_thuc').val(),
            'minh_chung'           : $('.minh_chung').val(),
        };
        console.log(payload);
        axios
            .post('/admin/hoa-don-nhap-kho/thanhtoan-hoadon', payload)
            .then((res) => {
                if(res.data.status) {
                    toastr.success("Đã cập nhật sản phẩm thành công!");
                    viewHoaDon();
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
    })
});
