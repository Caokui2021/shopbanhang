$(document).ready(function() {
    $(".searchHoaDon").keyup(function() {
        var search = $(".searchHoaDon").val();
        payload = {
            'search': search,
        };
        axios
            .post('/admin/hoa-don-ban-hang/search', payload)
            .then((res) => {
                viewHoaDonSearch(res.data.searchHoaDon);
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            });
    });
    viewHoaDon();
    function viewHoaDon() {
        axios
        .get('/admin/hoa-don-ban-hang/data')
        .then((res) => {
            var content = '';
            $.each(res.data.bill, function(key, value) {
                content += '<tr>';
                content += '<td class="align-middle">'+ value.bill_name + '</td>';
                content += '<td class="align-middle">'+ formatDate(value.created_at) + '</td>';
                content += '<td class="align-middle">'+ formatPrice(value.bill_total) + '</td>';
                content += '<td class="align-middle">';
                if (value.is_payment == 0) {
                    content += '<span class="text-danger">Chưa thanh toán</span>';
                } else {
                    content += '<span class="text-success">Đã thanh toán</span>';
                }
                content += '</td>';
                content += '<td class="align-middle">'+ showType(value.is_type) +'</td>';
                content += '<td>';
                content += '<i class="fa fa-angle-double-right btn btn-sm chiTiet" data-id='+ value.id+'></i>';
                content += '</td>';
                content += '</tr>';
            });

            $(".listBill tbody").html(content);

        });
    };
    function viewHoaDonSearch(listHoaDon) {
            var content = '';
            $.each(listHoaDon, function(key, value) {
                content += '<tr>';
                content += '<td class="align-middle">'+ value.bill_name + '</td>';
                content += '<td class="align-middle">'+ formatDate(value.created_at) + '</td>';
                content += '<td class="align-middle">'+ formatPrice(value.bill_total) + '</td>';
                content += '<td class="align-middle">';
                if (value.is_payment == 0) {
                    content += '<span class="text-danger">Chưa thanh toán</span>';
                } else {
                    content += '<span class="text-success">Đã thanh toán</span>';
                }
                content += '</td>';
                content += '<td class="align-middle">'+ showType(value.is_type) +'</td>';
                content += '<td>';
                content += '<i class="fa fa-angle-double-right btn btn-sm chiTiet" data-id='+ value.id+'></i>';
                content += '</td>';
                content += '</tr>';
            });

            $(".listBill tbody").html(content);
    };
    $("body").on('click', '.chiTiet', function(){
        var id_don_hang = $(this).data("id");
        $("#id_don_hang").val(id_don_hang);
        axios
            .get('/admin/hoa-don-ban-hang/chitiet/'+ id_don_hang)
            .then((res) => {
                if(res.data.status) {
                    var content_s = '';
                    var content = '';
                    $.each(res.data.bill, function(key, value) {
                        content_s += '<tr>';
                        content_s += '<td class="align-middle">'+ value.ten_san_pham + '</td>';
                        content_s += '<td class="align-middle">'+ value.so_luong_mua + '</td>';
                        content_s += '<td class="align-middle">'+ formatPrice(value.don_gia_mua) + '</td>';
                        content_s += '<td class="align-middle">'+ formatPrice(value.don_gia_mua * value.so_luong_mua) +'</td>';
                        content_s += '</tr>';
                    });
                    $.each(res.data.bill, function(key, value) {
                        x = key + 1;
                        for(let i = x ; i < 2; i++){
                            // console.log(i);
                            if(i < 2){
                                content +=  '<tr>';
                                // content +=  '<th>#</th>';
                                // content +=  '<td>'+ x + '</td>';
                                content +=  '<th>Tên Người Nhận :</th>';
                                content +=  '<td>'+ value.ship_fullname + '</td>';
                                content +=  '</tr>';
                                content +=  '<tr>';
                                content +=  '<th>Số Điện Thoại Người Nhận :</th>';
                                content +=  '<td>'+value.ship_phone +'</td>';
                                content +=  '</tr>';
                                content +=  '<tr>';
                                content +=  '<th>Địa Chỉ Người Nhận :</th>';
                                content +=  '<td>'+ value.ship_address +'</td>';
                                content +=  '</tr>';
                            } else {
                                content = '';
                            }
                        }
                      });
                    $(".listChiTiet tbody").html(content_s);
                    $(".listCus th").html(content);
                }else {
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
    function showType(type) {
        if(type == 0) {
            return 'Đang xử lý';
        } else if(type == 1) {
            return 'Đang vận chuyển';
        } else if(type == 2) {
            return 'Đã thành công';
        } else {
            return 'Đã hoàn trả';
        }
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
    // function formatPrice(value) {
    //     let val = (value/1).toFixed(0).replace('.', ',')
    //     return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
    // };
    function formatPrice(number)
    {
        return new Intl.NumberFormat("en-US",{ style: 'currency', currency: 'USD' }).format(number);
        // return new Intl.NumberFormat('vi-VI', { style: 'currency', currency: 'VND' }).format(number);
    }
});
