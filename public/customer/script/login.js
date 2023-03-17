$(document).ready(function() {
    $("#registerForm").submit(function(e) {
        e.preventDefault();
        var payload = window.getFormData($(this));
        axios
            .post('/client/register', payload)
            .then((res) => {
                if(res.data.status) {
                    toastr.success("Đã tạo tài khoản thành công!");
                    window.location.href = "/client/login";
                }
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            });
    });

    $("#loginForm").submit(function(e) {
        e.preventDefault();
        var payload = window.getFormData($(this));
        axios
            .post('/client/login', payload)
            .then((res) => {
                if(res.data.status == 1) {
                    toastr.success("Đã login thành công!");
                    window.location.href = "/home-pages/index";
                } else if(res.data.status == 2) {
                    toastr.warning("Tài khoản chưa kích hoạt!");
                } else {
                    toastr.error("Đăng nhập thất bại");
                }
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            });
    });

    $(".resetpass").click(function() {
        var payload = {
            'email' : $(".email").val(),
        }
        axios
            .post('/client/reset', payload)
            .then((res) => {
                toastr.success("Vui lòng kiểm tra email!");
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            })

    });

    $(".changepass").click(function() {
        var payload = {
            'password'      : $(".password").val(),
            're_password'   : $(".re_password").val(),
            'hash'          : document.getElementById("hash").value,
        };

        axios
            .post('/client/change-reset', payload)
            .then((res) => {
                if(res.data.status) {
                    toastr.success('Mật khẩu đã được thay đổi!');
                    window.location.href = "/client/login";
                }
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            });
    });
});


