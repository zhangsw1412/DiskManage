$(
	function(){
		$('#changeVerify').click(function(){
			$('#code').attr("src",verifyURL+'/'+Math.random());
			return false;
		});

		// $('#login').validate({
		// 	onfocusout:function(element){
		// 		$(element).valid();
		// 	},
		// 	showErrors: function (errorMap, errorList) {
		// 		this.defaultShowErrors();
		// 	},
		// 	rules:{
		// 		username:{
		// 			required:true,
		// 			remote:{
		// 				url:user_exist_url,
		// 				type:'POST'
		// 			}
		// 		},
		// 		password:{
		// 			required:true,
		// 			remote:{
		// 				url:password_check_url,
		// 				type:'POST',
		// 				data:{
		// 					username:function(){
		// 						return $('#username').val();
		// 					},
		// 				}
		// 			}
		// 		},
		// 		code:{
		// 			required:true,
		// 			remote:{
		// 				url:verify_check_url,
		// 				type:'POST'
		// 			}
		// 		}
		// 	},
		// 	messages:{
		// 		username:{
		// 			required:'请填写用户名',
		// 			remote:'此用户不存在'
		// 		},
		// 		password:{
		// 			required:'请填写密码',
		// 			remote:'密码错误'
		// 		},
		// 		code:{
		// 			required:'请填写验证码',
		// 			remote:'验证码错误'
		// 		}
		// 	},
		// 	onkeyup:false,
		// });

		// $('#btn_login').click(function(){
		// 	$('#login').submit();
		// })
	}
);