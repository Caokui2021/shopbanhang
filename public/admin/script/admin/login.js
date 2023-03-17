$(document).ready(function () {
    $(".login").click(function () {
        var payload = {
            'username'  :   $(".username").val(),
            'password'  :   $(".password").val(),
        };

        axios
            .post('/admin/login', payload)
            .then((res) => {
                if(res.data.status) {
                    window.location.href = "/admin/san-pham/index";
                } else {
                    toastr.error('Đăng nhập thất bại!');
                }            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            });
    });
});
