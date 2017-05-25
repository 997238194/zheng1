$(function(){
	var allVal='';
	//email blur
	$("input[name='username']").blur(function(allVal){
		var emails =  /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var usernameVal = $(this).val();
		if(emails.test(usernameVal)){
			allVal='correct!';
		}else if(usernameVal==''){
			allVal='邮件不能是空的！！！';
			layerOpen(allVal);
		}else{
			allVal='你输入的不是一个邮箱格式！';
			layerOpen(allVal);
		}
	});
	//email重名
	//$('#n1').blur(function(){
     //      var name = $('input')[0].value;
     //      var password = $('input')[1].value;
     //   var data = {'name':name,'pass':password}
	//	$.post("<?php echo site_url('user/forget')?>",data,function(data){
     //           if (data =='success'){
     //               console.log(123);
     //           }
     //   });
    //
	//}

	//password blur
	$("input[name='password']").blur(function(allVal){
		var paswVal = $(this).val();
		if(paswVal.length==''){
			allVal='你的密码不对！！！';
			layerOpen(allVal);
		}else{
			allVal='你输入的邮箱不对！！！';
		}
	});
	
	//login button
	$(".login-btn").on('click',function(){
		 layer.open({
			type: 2
			,content: '登录中...'
			,time: 2
		 });
	});
	
	//general layer
	function layerOpen(allVal){
		console.log(allVal);
		layer.open({
			content: allVal,
			btn: '造啦～'
		});
	}
	
	
});