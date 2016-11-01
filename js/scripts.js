/*
author : Salih K
*/

$(function(){


			 $('#sux-msg').hide();

	$('#sub').on('click', function(e){

		var name = $('#name').val(),
			email = $('#email').val(),
			subject = $('#subject').val(),
			msg = $('#message').val(),
			captcha = $('#6_letters_code').val(),
			rege =/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			if(name == ''){
				$('.errname').show();
			}
			$('#name').keypress(function(){
				$('.errname').hide();

			});
			var tm = rege.test(email);
			if(email == '' || tm==false){
				$('.erremail').show();
			}
			$('#email').keypress(function(){
				$('.erremail').hide();

			});
			if(subject == ''){
				$('.errsub').show();
			}
			$('#subject').keypress(function(){
				$('.errsub').hide();

			});
			if(msg == ''){
				$('.errmsg').show();
			}
			$('#message').keypress(function(){
				$('.errmsg').hide();

			});
			if (captcha==''){
				$('.errcapt').show();
			}
			$('#6_letters_code').keypress(function(){
				$('.errcapt').hide();

			});



		$('#loader').show();
			$.ajax({
            url: 'contact-process.php',
            type: 'POST',
            data: 'name='+name+'&email='+email+'&subject='+subject+'&message='+msg+'&captcha='+captcha,
	        success: function(r){
			if (r == "badcode"){
			 $('.errcapt').show();
			 $('#loader').hide();
				
			}else if(r !== "badcode"){
			 $('#loader').hide();
			 $('#sux-msg').show().delay(1500).fadeOut(1000);
				$('#name').val('');
				$('#email').val('');
				$('#subject').val('');
				$('#message').val('');
				$('#6_letters_code').val('');
				refreshCaptcha();
						
			
			}
		}
        });

		e.preventDefault();
	});


/*Add your Clinic*/



$('#add').on('click', function(e){
			 $('#sux-msg').hide();
		    var name = $('#name').val(),
			email = $('#email').val(),
			phone = $('#phone').val(),
			address= $('#address').val(),
			captcha = $('#6_letters_code').val(),
			rege =/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			
			if(name == ''){
				$('.errname').show();
			}
			$('#name').keypress(function(){
				$('.errname').hide();

			});
			var tm = rege.test(email);
			if(email == '' || tm==false){
				$('.erremail').show();
			}
			$('#email').keypress(function(){
				$('.erremail').hide();

			});
			if(phone== ''){
				$('.errphone').show();
			}
			$('#phone').keypress(function(){
				$('.errphone').hide();

			});
			if(address == ''){
				$('.erraddress').show();
			}
			$('#address').keypress(function(){
				$('.erraddress').hide();

			});
			if (captcha==''){
				$('.errcapt').show();
			}
			$('#6_letters_code').keypress(function(){
				$('.errcapt').hide();

			});

		
		$('#loader').show();
			$.ajax({
            url: 'addclinic-process.php',
            type: 'POST',
            data: 'name='+name+'&email='+email+'&phone='+phone+'&address='+address+'&captcha='+captcha,
	        success: function(r){
			if (r == "badcode"){
			 $('.errcapt').show();
			 $('#loader').hide();
				
			}else if(r !== "badcode"){
			 $('#loader').hide();
			 $('#sux-msg').show().delay(1500).fadeOut(1000);
				alert(r+'--'+name);
				$('#name').val('');
				$('#email').val('');
				$('#phone').val('');
				$('#address').val('');
				$('#6_letters_code').val('');
				refreshCaptcha();
						
			
			}
		}
        });



			

		e.preventDefault();
	});








});