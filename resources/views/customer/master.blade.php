<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('customer.share.header')
</head>

<body>

    @include('customer.share.top')

    @yield('content')

    @include('customer.share.footer')

    @include('customer.share.js')
    @yield('js')
    <script src="/js/app.js"></script>
    <script>
        $(".addToCart").click(function(e) {
            var id_san_pham = $(this).data('id');

            axios
                .get('/customer/shop-cart/add-to-cart/' + id_san_pham)
                .then((res) => {
                    if (res.data.status) {
                        toastr.success("Đã thêm vào giỏ hàng!");
                    } else {
                        toastr.error("Sản phẩm không tồn tại");
                    }
                });
        });
    </script>
    <!--Start of Tawk.to Script-->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/636bcea5b0d6371309ce2d81/1ghehudsr';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!--End of Tawk.to Script-->
</body>

</html>
