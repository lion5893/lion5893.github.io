$(document).ready(function(){
    $(".new_items .productinfo").slice(0, 4).show();
    $(".loadmore").on('click', function (e) {
        e.preventDefault();
        $(".new_items .productinfo:hidden").slice(0, 4).slideDown();
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1000);
        if($(".new_items .productinfo:hidden").length == 0 ){
            $(".loadmore").hide();
        }
    });
});