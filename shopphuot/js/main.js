$(function () {
    $(".productinfo").slice(0, 4).show();
    $(".loadmore").on('click', function (e) {
        e.preventDefault();
        $(".productinfo:hidden").slice(0, 2).slideDown();
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1000);
        if($(".productinfo:hidden").length == 0 ){
            $(".loadmore").hide();
        }
    });
});