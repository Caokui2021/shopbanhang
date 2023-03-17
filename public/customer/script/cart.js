$(document).ready(function() {
    viewCart();
    function viewCart() {
        axios
        .get('/customer/shop-cart/get-data')
        .then((res) => {
            var content = '';
            var total = 0;
            var amount =0;
            // var list_id = [];
            $.each(res.data.chiTiet, function(key, value) {
                // x = key + 1;
                //         for(let i = x ; i < 2; i++){
                //             // console.log(i);
                //             if(i < 2){
                var hinh_anh_new = value.hinh_anh.split(',')[0];
                content += '<tr>';
                content += '<td class="cart__product__item">';
                // content += '<input type="checkbox" name="check" id="check-cart_'+key+'" data-id="'+value.id_san_pham+'">';
                content += '<img style="height:80px; width:80px;" src="'+ hinh_anh_new +'" alt="">';
                content += '<div class="cart__product__item__title">';
                content += '<h6>'+ value.ten_san_pham +'</h6>';
                content += '<div class="rating">';
                content += '<i style="margin-right:0px" class="fa fa-star"></i>';
                content += '<i style="margin-right:0px" class="fa fa-star"></i>';
                content += '<i style="margin-right:0px" class="fa fa-star"></i>';
                content += '<i style="margin-right:0px" class="fa fa-star"></i>';
                content += '<i style="margin-right:0px" class="fa fa-star"></i>';
                content += '</div>';
                content += '</div>';
                content += '</td>';
                content += '<td class="cart__price">'+ formatNumber(value.don_gia_nhap) +' </td>';
                content += '<td class="cart__quantity">';
                content += '<div class="pro-qty">';
                content += '<input type="number" class="updateQty" max="'+ value.so_luong_nhap +'" data-id="'+ value.id +'" value="'+ value.so_luong_mua +'">';
                content += '</div>';
                content += '</td>';
                content += '<td class="cart__total">'+ formatNumber(value.don_gia_nhap * value.so_luong_mua) +'</td>';
                content += '<td class="cart__close remove" data-id="'+ value.id +'"><span class="icon_close"></span></td>';
                content += '</tr>';

                total = total + value.don_gia_nhap * value.so_luong_mua;
                amount = amount + value.so_luong_mua;
            //                 }
            //                 else {
            //         content = '';
            //     }
            // }
            });


            $(".total").text(formatNumber(total));
            $(".amount").text(amount);
            $(".listCart tbody").html(content);
        });
    }

    function formatNumber(number)
    {
        return new Intl.NumberFormat("en-US",{ style: 'currency', currency: 'USD' }).format(number);
        // return new Intl.NumberFormat('vi-VI', { style: 'currency', currency: 'VND' }).format(number);
    }

    $('body').on('click','.updateQty',function(){
        var payload = {
            'id' : $(this).data('id'),
            'so_luong_mua' :   $(this).val(),
        }
        axios
        .post('/customer/shop-cart/updateQty', payload)
        .then((res) => {
            if(res.data.status) {
                toastr.success("Đã cập nhật sản phẩm!");
                viewCart();
            } else {
                toastr.error(res.data.message);
            }
        })
        .catch((res) => {
            var listError = res.response.data.errors;
            $.each(listError, function(key, value) {
                toastr.error(value[0]);
            });
        });
    });

    $("body").on('click', '.remove', function(){
        var id = $(this).data('id');

        axios
        .get('/customer/shop-cart/remove/' + id)
        .then((res) => {
            toastr.success("Đã xóa sản phẩm thành công!");
            viewCart();
        });
    });

    $('body').on('click','.createBill',function(){
        var payload = {
            'ship_phone'      :   $(".ship_phone").val(),
            'ship_fullname'   :   $(".ship_fullname").val(),
            'ship_address'    :   $(".ship_address").val(),
        };
        axios
            .post('/customer/create-bill', payload)
            .then((res) => {
                toastr.success('Đã tạo đơn hàng thành công!');
                window.location.href = 'customer/shop-cart/list-bill';
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            });
    });
});


