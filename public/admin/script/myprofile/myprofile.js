$(document).ready(function() {
    $(".luu").hide();
    $(".chinhsua").click(function() {
        $(".chinhsua").hide();
        $(".luu").show();
        document.getElementById('full_name').disabled = false;
        document.getElementById('gioi_tinh').disabled = false;
        document.getElementById('so_dien_thoai').disabled = false;
        document.getElementById('aboutme').disabled = false;
    });
    $(".luu").click(function() {
        $(".luu").hide();
        $(".chinhsua").show();
        document.getElementById('full_name').disabled = true;
        document.getElementById('email').disabled = true;
        document.getElementById('gioi_tinh').disabled = true;
        document.getElementById('so_dien_thoai').disabled = true;
        document.getElementById('aboutme').disabled = true;
    });
    $(".huy_anh").click(function() {
        $(".luu_anh").hide();
        $(".huy_anh").hide();
        $(".doihinhanh").show();
    });
    $(".doihinhanh").click(function() {
        $(".luu_anh").show();
        $(".huy_anh").show();
        $(".doihinhanh").hide();
    });
    $(".doihinhanh").show();
    $(".luu_anh").hide();
    $(".huy_anh").hide();

    // const full_name = document.querySelector(".full_name");
    document.getElementById('full_name').disabled = true;
    document.getElementById('email').disabled = true;
    document.getElementById('gioi_tinh').disabled = true;
    document.getElementById('so_dien_thoai').disabled = true;
    document.getElementById('aboutme').disabled = true;

    loadProfile();

    function loadProfile() {
        axios
        .get('/admin/get-profile')
        .then((res) => {
            if(res.data.profile) {
                $(".id").val(res.data.profile.id);
                $(".full_name").val(res.data.profile.ho_lot +' '+ res.data.profile.ten);
                $(".email").val(res.data.profile.email);
                $(".gioi_tinh").val(res.data.profile.gioi_tinh);
                $(".so_dien_thoai").val(res.data.profile.so_dien_thoai);
            }
        });
    }


    // $("body").on('click', '.luu', function(){
    $(".luu").click(function() {
        var payload = {
            'id'            :   $(".id").val(),
            'full_name'     :   $(".full_name").val(),
            'email'         :   $(".email").val(),
            'so_dien_thoai' :   $(".so_dien_thoai").val(),
            'gioi_tinh'     :   $(".gioi_tinh").val(),
        }
        axios
            .post('/admin/my-profile', payload)
            .then((res) => {
                toastr.success("Đã cập nhật tài khoản thành công!");
                loadProfile();
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
        })


    });

    $(".luu_anh").click(function() {
        var payload = {
            'id'       : $(".id").val(),
            'hinh_anh' : $(".hinh_anh").val(),

        }
        axios
            .post('/admin/edit-images', payload)
            .then((res) => {
                toastr.success("Đã cập nhật hình ảnh thành công!");
                loadProfile();
            })
            .catch((res) => {
                var listError = res.response.data.errors;
                $.each(listError, function(key, value) {
                    toastr.error(value[0]);
                });
            })

    });
});
