$(document).ready(function() {
    viewBill();
    viewOder();
    function viewBill() {
        axios
        .get('/customer/shop-cart/all-bill')
        .then((res) => {
            var content = '';
            $.each(res.data.listBill, function(key, value) {
                console.log(1);
                content += '<tr class="text-dark">';
                content += '<td class="text-dark">'+ value.bill_name +'</td>';
                content += '<td class="text-dark">'+ formatDate(value.created_at) +'</td>';
                content += '<td class="text-dark">'+ formatPrice(value.bill_total) +'</td>';
                content += '<td class="text-dark">';
                if (value.is_payment == 0) {
                    content += '<span class="text-danger">Chưa thanh toán</span>';
                } else {
                    content += '<span class="text-success">Đã thanh toán</span>';
                }
                content += '</td>';
                content += '<td><i class="ni ni-active-40 btn btn-secondary btn-sm chitiet" data-id="'+ value.id_hoa_don +'" data-toggle="modal"data-target=".bd-example-modal-lg"></i></td>'
                content += '</tr>';

            });
            $(".listBill tbody").html(content);
        });
    }
    function viewOder() {
        axios
        .get('/customer/shop-cart/list-bill')
        .then((res) => {
            var content_sp = '';
            $.each(res.data.listOrder, function(key, value) {
                var hinh_anh_new = value.hinh_anh.split(',')[0];
                content_sp += '<tr class="text-dark">';
                content_sp += '<td class="id"><img style ="height:50px; width:50px" src="'+ hinh_anh_new +'" alt=""></td>';
                content_sp += '<td class="ten">'+ value.ten_san_pham +'</td>';
                content_sp += '<td class="sumQty">'+ value.so_luong_mua +' sp</td>';
                content_sp += '<td class="sumPri">'+ formatNumber(value.so_luong_mua * value.don_gia_mua) +'</td>';
                content_sp += '</tr>';
            });

            $(".chiTietHoaDon tbody").html(content_sp);
        });
    }
    function formatNumber(number)
    {
        return new Intl.NumberFormat("en-US",{ style: 'currency', currency: 'USD' }).format(number);
        // return new Intl.NumberFormat('vi-VI', { style: 'currency', currency: 'VND' }).format(number);
    }

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
