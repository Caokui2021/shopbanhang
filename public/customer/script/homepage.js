$(document).ready(function() {
    $('.search-ajax-result1').hide();
    $(".input-search").keyup(function() {
        var search = $(this).val();
        if(search != '' && search != ' ' && search != '  ' && search != '  ' ) {
            $.ajax({
                url: '/search?key='+search,
                type: 'GET',
                success: function(res){
                    $('.search-ajax-result1').show();
                    $('.search-ajax-result1').html(res)
                }
            });
        } else {
            $('.search-ajax-result1').hide()
        }
    });
    $('.search-ajax-result2').hide()
    $(".input-search-form").keyup(function() {
        var search = $(this).val();
        if(search != '' && search != ' ' && search != '  ' && search != '  ' ) {
            $.ajax({
                url: '/search?key='+search,
                type: 'GET',
                success: function(res){
                    $('.search-ajax-result2').show();
                    $('.search-ajax-result2').html(res)
                }
            });
        } else {
            $('.search-ajax-result2').hide()
        }
    });
});
$(window).click(function() {
    $('.search-ajax-result1').hide();
});






