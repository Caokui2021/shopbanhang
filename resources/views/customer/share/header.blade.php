<meta charset="UTF-8">
<meta name="description" content="Ashion Template">
<meta name="keywords" content="Ashion, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Fashion</title>

<link rel="icon" href="/admin/assets/img/brand/favicon.png" type="image/png">


<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="/customer/assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="/customer/assets/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="/customer/assets/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="/customer/assets/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="/customer/assets/css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="/customer/assets/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="/customer/assets/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="/customer/assets/css/style.css" type="text/css">
<link rel="stylesheet" href="/customer/assets/css/bootstrap-select.css" type="text/css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
{{-- <style>
    #popup_banner_beta {
        position: fixed;
        width: 100%;
        height: 100vh;
        z-index: 99999;
        top: 0;
        left: 0
    }

    .mask_popup_banner_beta {
        background: rgba(0, 0, 0, .38);
        cursor: pointer;
        position: absolute;
        width: 100%;
        height: 100vh;
        top: 0;
        z-index: 9;
        left: 0
    }

    .content_popup_banner_beta {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 10;
        transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%)
    }

    .close_icon {
        position: absolute;
        top: -70px;
        right: -60px;
        width: 70px;
        cursor: pointer
    }

    @media only screen and (max-width:480px) {
        .content_popup_banner_beta {
            width: 500px
        }

        .content_popup_banner_beta a img:nth-of-type(1) {
            width: 100%
        }

        .close_icon {
            top: -60px;
            right: -20px;
            width: 20px
        }
    }
</style>

<script>
    var link_image = '/customer/assets/img/Grimm.jpg';
    var link = '/home-pages/index';
    var X = 'https://namdinhweb.net/wp-content/uploads/2018/07/0-15.png';

    function closePopupBeta() {
        document.getElementById("popup_banner_beta").remove(), setCookie("showPopupBannerBeta", 1, 1)
    }

    function setCookie(e, n, o) {
        var t = "";
        if (o) {
            var i = new Date;
            i.setTime(i.getTime() + 24 * 60 * 60 * 1000), t = "; expires=" + i.toUTCString()
        }
        document.cookie = e + "=" + (n || "") + t + "; path=/"
    }

    function getCookie(e) {
        for (var n = e + "=", o = document.cookie.split(";"), t = 0; t < o.length; t++) {
            for (var i = o[t];
                " " == i.charAt(0);) i = i.substring(1, i.length);
            if (0 == i.indexOf(n)) return i.substring(n.length, i.length)
        }
        return null
    }
    1 != getCookie("showPopupBannerBeta") && (document.addEventListener("DOMContentLoaded", function(event) {
        var e =
            '<div id="popup_banner_beta"><div onclick="closePopupBeta()" class="mask_popup_banner_beta"></div><div class="content_popup_banner_beta"><img src="' +
            X + '" class="close_icon" onclick="closePopupBeta()" alt="Close Image"><a href="' +
            link + '"><img src="' + link_image + '" alt="Image Popup Banner"/></a></div></div>';
        setTimeout(function() {
            document.body.innerHTML += e
        }, 3000)
    }));
</script> --}}

@yield('css')
