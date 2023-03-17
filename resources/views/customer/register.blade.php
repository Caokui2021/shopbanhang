<!DOCTYPE html>
<html lang="en">

<head>
    <title>register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/customer/login/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body class="img js-fullheight" style="background-image: url(/customer/login/images/bg.jpg);">
    <section class="ftco-section">\
        <div class="container">
            <h3 class="mb-4 text-center text-light">Đăng kí tài khoản</h3>
            <div class="row">
                <div class="col-md-12" style="text-align: -webkit-center;">
                    <div class="login-wrap p-0">
                        <form action="#" class="register-form" id="registerForm">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label mb-0 text-left">Họ và tên</label>
                                        <input type="text" class="form-control" name="full_name"
                                            placeholder="Nhập họ và tên">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label mb-0">Giới tính</label>
                                        <select class="form-control" name="sex">
                                            <option value="0">Nam</option>
                                            <option value="1">Nữ</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label mb-0">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Nhập Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label mb-0">Số điện thoại</label>
                                        <input type="tel" class="form-control" name="phone" name
                                            placeholder="Nhập số điện thoại">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label mb-0">Mật khẩu</label>
                                        <input id="password-field" type="password" name="password" class="form-control"
                                            placeholder="Nhập vào mật khẩu">
                                        <span toggle="#password-field"
                                            class="fa fa-fw fa-eye field-icon toggle-password text-dark"
                                            style="padding-top: 2.3rem; padding-right: 2rem"></span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label mb-0">Nhập lại mật khẩu</label>
                                        <input id="password-field1" type="password" name="re_password"
                                            class="form-control" placeholder="Nhập lại mật khẩu">
                                        <span toggle="#password-field1"
                                            class="fa fa-fw fa-eye field-icon toggle-password text-dark"
                                            style="padding-top: 2.3rem; padding-right: 2rem"></span>
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label mb-0">Ngày sinh</label>
                                        <input class="form-control" type="date" name="dob"
                                            placeholder="Ngày sinh">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary submit px-3">Đăng kí</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Hoặc đăng nhập với &mdash;</p>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="social d-flex text-center">
                                    <a href="#" class="px-2 py-2 mr-md-1 rounded text-nowrap">
                                        <img class="icon-logo d-flex" src="/customer/login/images/facebook.gif" alt="">
                                        <div>
                                            <span class="name-logo">Facebook</span>
                                        </div>
                                    </a>
                                    <a href="#" class="px-2 py-2 mr-md-1 rounded text-nowrap">
                                        <img class="icon-logo" src="/customer/login/images/google.png" alt="">
                                        <div>
                                            <span class="name-logo">Google</span>
                                        </div>
                                    </a>
                                    <a href="#" class="px-2 py-2 mr-md-1 rounded text-nowrap">
                                        <img class="icon-logo" src="/customer/login/images/instagram.png" alt="">
                                        <div>
                                            <span class="name-logo">Instagram</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="text-muted mt-2 text-center" style="font-family: ui-serif;">
                            Nếu bạn đã có tài khoản?
                            <a href="/client/login  " style="color: rgb(0, 200, 255);">Đăng nhập</a>
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
    <script src="/js/app.js"></script>
    <script src="/customer/script/login.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>
