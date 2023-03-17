<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/customer/login/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body class="img js-fullheight" style="background-image: url(/customer/login/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Khôi phục mật khẩu cũ?</h3>
                        <div class="form-group">
                            <label class="form-label mb-0">Email</label>
                            <input type="email" name="email" class="form-control email" placeholder="Nhập vào eamail đã đăng kí">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary resetpass px-3">Khôi phục</button>
                        </div>
                        <p class="w-100 text-center">&mdash; Hoặc đăng nhập với &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded text-nowrap">
                                <img class="icon-logo d-flex" src="/customer/login/images/facebook.gif" alt="">
                                <div >
                                    <span class="name-logo">Facebook</span>
                                </div>
                            </a>
                            <a href="#" class="px-2 py-2 mr-md-1 rounded text-nowrap">
                                <img class="icon-logo" src="/customer/login/images/google.png" alt="">
                                <div >
                                    <span class="name-logo">Google</span>
                                </div>
                            </a>
                            <a href="#" class="px-2 py-2 mr-md-1 rounded text-nowrap">
                                <img class="icon-logo" src="/customer/login/images/instagram.png" alt="">
                                <div >
                                    <span class="name-logo">Instagram</span>
                                </div>
                            </a>
                        </div>
                        <div class="mt-2 text-center" style="font-family: ui-serif;">
                            Bạn mới biết đến cửa hàng của chúng tôi ?
                            <a href="/client/register" style="color: rgb(0, 200, 255);">Đăng kí</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/customer/login/js/jquery.min.js"></script>
    <script src="/customer/login/js/popper.js"></script>
    <script src="/customer/login/js/bootstrap.min.js"></script>
    <script src="/customer/login/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/customer/script/login.js"></script>
</body>

</html>
