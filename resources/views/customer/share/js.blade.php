<!-- Js Plugins -->
<script src="/customer/assets/js/jquery-3.3.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/customer/assets/js/bootstrap.min.js"></script>
<script src="/customer/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/customer/assets/js/jquery-ui.min.js"></script>
<script src="/customer/assets/js/mixitup.min.js"></script>
<script src="/customer/assets/js/jquery.countdown.min.js"></script>
<script src="/customer/assets/js/jquery.slicknav.js"></script>
<script src="/customer/assets/js/owl.carousel.min.js"></script>
<script src="/customer/assets/js/jquery.nicescroll.min.js"></script>
<script src="/customer/assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.2.0/axios.min.js"></script>
<script src="https://js.pusher.com/7.1/pusher.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="/js/inewsticker.js"></script>
<script src="/customer/script/homepage.js"></script>

<script class="tuyet " type="text/javascript" src="https://phonuiit.com/noel/it.snow.js"></script> //tuyết rơi
{{-- <script class="tet " type="text/javascript" src="https://sharethuthuat.com/php/tet/tet.js"></script>  //Ngày tết --}}


<script>
    $(document).ready(function() {
        $('.offer-box').inewsticker({
            speed: 3000,
            effect: 'fade',
            dir: 'ltr',
            font_size: 13,
            color: '#ffffff',
            font_family: 'Montserrat, sans-serif',
            delay_after: 1000
        });
        $('.search-switch').on('click', function() {
            $('.search-model').fadeIn(400);
        });

        $('.search-close-switch').on('click', function() {
            $('.search-model').fadeOut(400, function() {
                $('#search-input').val('');
            });
        });
    });
</script>
