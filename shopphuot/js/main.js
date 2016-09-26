$(document).ready(function(){
    // Load more item
    $(".new_items .productinfo").slice(0, 8).show(); //Hiển thị ra 8 sản phẩm ban đầu
    $(".loadmore").on('click', function (e) {
        e.preventDefault();
        $(".new_items .productinfo:hidden").slice(0, 4).slideDown(); //Hiển thị thêm 4 sản phẩm khi click loadmore
        // thanh cuộn trượt xuống khi load thêm sản phẩm
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1000);
        // tắt nút load more khi load hết sản phẩm
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
    //delete item in cart
    $('.delete').click(function(){
        $(this).parent().parent().parent().parent().hide();
        // $('.shopping-cart-item').hide();
    })
    //price sort
    $('#sl2').slider();

    var RGBChange = function() {
      $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
    };  

});