$(document).ready(function(){

	//validate
	$('.form_register').on('submit',function(){
		var isValid = true;

		//validate name

		if($('#name').val().trim() == ''){
			$('#name').next('span').text(' Name is empty');
			isValid = false;
		} 
		else{
			$('#name').next('span').text('');
		}

		//validate email

		if($('#email').val().match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/) == null){
			$('#email').next('span').text(' Email is invalid');
			isValid = false;
		} 
		else{
			$('#email').next('span').text('');
		}

		//validate phone
		if($('#telephone').val().match(/^[0-9-+ ()]{8,17}$/) == null){
			$('#telephone').next('span').text(' Telephone is invalid');
			isValid = false;
		} 
		else{
			$('#telephone').next('span').text('');
		}


		return isValid;
	})
	// confirm password
	$('.form_register').validate({
		rules: {
			password: {	
				required: true,			
				minlength: 5,
			},
			confirm_password: {	
				required: true,		
				minlength: 5,
				equalTo: "#password",
			}
		},
		messages: {
			password: {
			required: "Password is empty",
			minlength:	"Mật khẩu từ 5 ký tự trở lên",

		},	
			confirm_password:{
				required: "Password is empty",
				minlength: "Mật khẩu từ 5 ký tự trở lên",
				equalTo: "Xác nhận mật khẩu không đúng",
			}
		}
	}); 

	//get url
	var uri = location.search;
	var uri_dec = decodeURIComponent(uri);
	var uri_cut = uri_dec.slice(1);
	var uri_arr = uri_cut.split("&");

	// Cắt và lấy ra các thông tin người dùng đã nhập
	var arr_rs = [];
	for (i=0; i<uri_arr.length; i++){
		var name=uri_arr[i];
		var name_cut = name.split("=");
		var str = name_cut[1];
		var str_cut = str.split('+').join(' ');
		arr_rs.push(str_cut);

	}
	// In ra kết quả
	$('.rs_name').text(arr_rs[0]);
	$('.rs_pass').text(arr_rs[1]);
	$('.rs_confirm_pass').text(arr_rs[2])
	$('.rs_born').text(arr_rs[3]);
	$('.rs_gender').text(arr_rs[4]);
	$('.rs_email').text(arr_rs[5]);
	$('.rs_address').text(arr_rs[6]);
	$('.rs_phone').text(arr_rs[7]);

})

