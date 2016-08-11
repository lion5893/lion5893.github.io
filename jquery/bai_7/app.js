$(document).ready(function(){
	$('#form_contact').on('submit',function(){


			var data = {
				fullname : $('input[name="fullname"]').val(),
				email: $('input[name="email"]').val(),
				phone: $('input[name="phone"]').val(),
				address: $('input[name="address"]').val(),
				gender: $('input[name="gender"]:checked').val(),
				hobby: ""	
			};

			var checked = $('input[name="hobby"]:checked');
			var hobbies = [];
			for (var i=0; i<checked.length; i++){
				hobbies.push($(checked[i]).val());
			}

			data.hobby = hobbies;
			
			 var selected = '';
			 $.each(data, function(key, value){
			 	selected += '<p>' +key+ ':'+ value +'</p>';

			 });
			 $('#result').html(selected);
			 
			return false;

	})

})