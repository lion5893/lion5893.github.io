$(document).ready(function(){
    // Load more item
    $(".new_items .productinfo").slice(0, 6).show();
    $(".loadmore").on('click', function (e) {
        e.preventDefault();
        $(".new_items .productinfo:hidden").slice(0, 2).slideDown();
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1000);
        if($(".new_items .productinfo:hidden").length == 0 ){
            $(".loadmore").hide();
        }
    }); 
    // Hide Modal menu mobile
    $(".register-link").click(function(){
       $('#myModal').modal('hide');
      
    });
    // Close alert
    $(".close").click(function(){
        $("#myAlert").alert("close");
    })
});