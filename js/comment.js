
			$(function(){
				$(".city").click(function(){
					$(".select_city").fadeIn();
				})
				$(".return-btn").click(function(){
					$(".select_city").fadeOut();
				})
			})
		$(function(){
			$(".screening").click(function(){
				$(this).addClass("fix-screening");
			})
			//删除





		})
	$(function(){
			$(".list-input").click(function(){
				$(".search-none").fadeIn();
				$(".house-list").hide();
			})
			$("#return").click(function(){
				$(".search-none").fadeOut();
				$(".house-list").show()
			})
		$(".del").on("click", function(){

			var SELL_id=$(this).attr("sell_id");
			//console.log(SELL_id);
			var obj={
				SELL_id:SELL_id
			};
			$.post("sell/delete",obj,function(data){
				data=data.trim();
				if (data == "success")
				{
					alert("删除用户成功");
					location.href="publish/publishs";
				}
			},"text");
			return false;
		});
		$(".dels").on("click", function(){

			var RENT_id=$(this).attr("rent_id");
			var obj={
				RENT_id:RENT_id
			};
			$.post("rent/delete",obj,function(data){
				data=data.trim();
				if (data == "success")
				{
					alert("删除用户成功");
					location.href="publish/publishs";
				}
			},"text");
			return false;
		});

		$(".detai-attention").on("click", function () {
			if($(this).find("i").attr("class")=="attention-ico"){

				var con_id=$(this).attr("con_id");
				var obj={
					con_id:con_id
				};
				$(this).find("i").removeClass("attention-ico");
				$(this).find("i").addClass("attention-ico2");
				if($(this).attr("flag")==1){
					$.post("sell/con_buy",obj,function(data){
						data=data.trim();
						if(data=="success"){
							alert("关注成功");
						}else{
							alert("关注失败");
						}
					},"text");
				}else if($(this).attr("flag")==0){
					$.post("rent/con_buy",obj,function(data){
						data=data.trim();
						if(data=="success"){
							alert("关注成功");
						}else{
							alert("关注失败");
						}
					},"text");
				}

			}else if($(this).find("i").attr("class")=="attention-ico2"){
				var con_id=$(this).attr("con_id");
				var obj={
					con_id:con_id
				};
				$(this).find("i").removeClass("attention-ico2");
				$(this).find("i").addClass("attention-ico");
				if($(this).attr("flag")==1){
					$.post("sell/delete_con_buy",obj,function(data){
						data=data.trim();
						if(data=="success"){
							alert("取消关注成功");
						}else{
							alert("取消关注失败");
						}
					},"text");
				}else if($(this).attr("flag")==0){
					$.post("rent/delete_con_buy",obj,function(data){
						data=data.trim();
						if(data=="success"){
							alert("取消关注成功");
						}else{
							alert("取消关注失败");
						}
					},"text");
				}
			}

		});

		$(".position").on("click",function(){
			$(".Regional").text(this.innerHTML);
			$(".Regional").click();
		})
		$(".position2").on("click",function(){
			$(".Brand").text(this.innerHTML);
			$(".Brand").click();
		});
		$(".position3").on("click",function(){
			$(".Sort").text(this.innerHTML);
			$(".Sort").click();
		});
		$(".position4").on("click",function(){
			$(".more").text(this.innerHTML);
			$(".more").click();
		});
		$("#search").on("click",function(){
			var text1=$(".Regional").text();
			var text2=$(".Brand").text();
			var text3=$(".Sort").text();
			var text4=$(".more").text();
			if((text1=='不限'||text1=='区域')&&(text2=='不限'||text2=='价格')&&(text3=='不限'||text3=='房型')&&(text4=='不限'||text4=='朝向')){
				alert("请选择有效信息");
			}else if((text1!='不限'&&text1!='区域')||(text2!='不限'&&text2!='价格')||(text3!='不限'&&text3!='房型')||(text4!='不限'&&text4!='朝向')){
				var obj={
					text1:text1,
					text2:text2,
					text3:text3,
					text4:text4
				};
				$.post("search/search",obj,function (data) {
                       //console.log(data);
					$(".house-list").empty();
					//data=JSON.parse(data);
					for(var i=0;i<data.length;i++){
						var oli=$('<li>'+
							'<a href="sell/selldetail/'+data[i].SELL_id+'">'+
							'<img class="house-pic" src="'+data[i].img+'"/>'+
							'<p class="house-title">'+data[i].SELL_title+'</p>'+
							'<p class="house-type">'+data[i].SELL_type+'</p>'+
							'<p class="house-address">'+data[i].SELL_address+'</p>'+
							'<p class="house-tag">'+
							'<span class="xuequ">学区房</span>'+
							'<span class="chao">'+data[i].SELL_oriention+'</span>'+
							'</p>'+
							'<span class="h-price" title="93">'+data[i].SELL_price+'万</span>'+
							'</a>'+
							'</li>');

						$(".house-list").append(oli);
					}
				},"json");
			}
		});

		$("#searchs").on("click",function(){
			var text1=$(".Regional").text();
			var text2=$(".Brand").text();
			var text3=$(".Sort").text();
			var text4=$(".more").text();
			console.log(text1);
			console.log(text2);
			console.log(text3);
			console.log(text4);

			if((text1=='不限'||text1=='区域')&&(text2=='不限'||text2=='价格')&&(text3=='不限'||text3=='房型')&&(text4=='不限'||text4=='朝向')){
				alert("请选择有效信息");
			}else if((text1!='不限'&&text1!='区域')||(text2!='不限'&&text2!='价格')||(text3!='不限'&&text3!='房型')||(text4!='不限'&&text4!='朝向')){
				var obj={
					text1:text1,
					text2:text2,
					text3:text3,
					text4:text4
				};
				$.post("search/searchs",obj,function (data) {
					console.log(data);
					$(".house-list").empty();
					//data=JSON.parse(data);
					for(var i=0;i<data.length;i++){
						var oli=$('<li>'+
							'<a href="rent/rentdetail/'+data[i].RENT_id+'">'+
							'<img class="house-pic" src="'+data[i].img+'"/>'+
							'<p class="house-title">'+data[i].RENT_title+'</p>'+
							'<p class="house-type">'+data[i].RENT_type+'</p>'+
							'<p class="house-address">'+data[i].RENT_address+'</p>'+
							'<p class="house-tag">'+
							'<span class="new">地铁房</span>'+
							'<span class="chao">'+data[i].RENT_oriention+'</span>'+
							'</p>'+
							'<span class="h-price" title="93">'+data[i].RENT_price+'/月</span>'+
							'</a>'+
							'</li>');

						$(".house-list").append(oli);
					}
				},"json");
			}
		});
//主页
		$(".search-icon").on("click",function(){
			var text1 =$("#account").val();
			var obj = {
				text1:text1
			}


			$.post("search/searchinput",obj,function (data) {

				$(".house-list").empty();
				for(var i=0;i<data.length;i++) {
					var oli = $('<li>' +
						'<a href="sell/selldetail/' + data[i].SELL_id + '">' +
						'<img class="house-pic" src="' + data[i].img + '"/>' +
						'<p class="house-title">' + data[i].SELL_title + '</p>' +
						'<p class="house-type">' + data[i].SELL_type + '</p>' +
						'<p class="house-address">' + data[i].SELL_address + '</p>' +
						'<p class="house-tag">' +
						'<span class="xuequ">学区房</span>' +
						'<span class="chao">' + data[i].SELL_oriention + '</span>' +
						'</p>' +
						'<span class="h-price" title="93">' + data[i].SELL_price + '万</span>' +
						'</a>' +
						'</li>');

					$(".house-list").append(oli);
				}
			},'json')

		})

//租房
		$(".table-cells").on("click",function(){
			var text1 =$("#accountse").val();
			var obj = {
				text1:text1
			}
             console.log(text1);
			$.post("search/searchrent",obj,function (data) {

				$(".house-list").empty();
				for(var i=0;i<data.length;i++){
					var oli=$('<li>'+
						'<a href="rent/rentdetail/'+data[i].RENT_id+'">'+
						'<img class="house-pic" src="'+data[i].img+'"/>'+
						'<p class="house-title">'+data[i].RENT_title+'</p>'+
						'<p class="house-type">'+data[i].RENT_type+'</p>'+
						'<p class="house-address">'+data[i].RENT_address+'</p>'+
						'<p class="house-tag">'+
						'<span class="new">地铁房</span>'+
						'<span class="chao">'+data[i].RENT_oriention+'</span>'+
						'</p>'+
						'<span class="h-price" title="93">'+data[i].RENT_price+'/月</span>'+
						'</a>'+
						'</li>');

					$(".house-list").append(oli);
				}
			},'json')

		})

//卖房
		$(".table-cell").on("click",function(){
			var text1 =$("#accounts").val();
			//console.log(text1);
			var obj = {
				text1:text1
			}
			console.log(text1);


			$.post("search/searchsell",obj,function (data) {
				$(".house-list").empty();
				for(var i=0;i<data.length;i++) {
					var oli = $('<li>' +
						'<a href="sell/selldetail/"' + data[i].SELL_id + '>' +
						'<img class="house-pic" src="' + data[i].img + '"/>' +
						'<p class="house-title">' + data[i].SELL_title + '</p>' +
						'<p class="house-type">' + data[i].SELL_type + '</p>' +
						'<p class="house-address">' + data[i].SELL_address + '</p>' +
						'<p class="house-tag">' +
						'<span class="xuequ">学区房</span>' +
						'<span class="chao">' + data[i].SELL_oriention + '</span>' +
						'</p>' +
						'<span class="h-price" title="93">' + data[i].SELL_price + '万</span>' +
						'</a>' +
						'</li>');

					$(".house-list").append(oli);
				}
			},'json')

		})







		function layerOpen(allVal){
			console.log(allVal);
			layer.open({
				content: allVal,
				btn: '造啦～'
			});
		}
	});



			$(function(){
				var allVal='';
				//email blur

				$("input[name='SELL_name']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var sellnameVal = $(this).val();
					if(emails.test(sellnameVal)){
						allVal='correct!';
					}else if(sellnameVal==''){
						allVal='名字不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});

				$("input[name='SELL_telephone']").blur(function(){
					var phone = document.getElementById('phone').value;
					if(!(/^1(3|4|5|7|8)\d{9}$/.test(phone))){
						allVal='手机号码有误，请重填';
						layerOpen(allVal);
					}
				});

				$("input[name='SELL_title']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var selltitleVal = $(this).val();
					if(emails.test(selltitleVal)){
						allVal='correct!';
					}else if(selltitleVal==''){
						allVal='标题不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});
				$("input[name='SELL_price']").blur(function() {
					var reg = new RegExp("^[0-9]*$");
					var obj = document.getElementById("num");
					if (!reg.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);

					}
					if (!/^[0-9]+$/.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);
					}

				})
				$("input[name='SELL_type']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var selltypeVal = $(this).val();
					if(emails.test(selltypeVal)){
						allVal='correct!';
					}else if(selltypeVal==''){
						allVal='户型不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});
				$("input[name='SELL_area']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var sellareaVal = $(this).val();
					if(emails.test(sellareaVal)){
						allVal='correct!';
					}else if(sellareaVal==''){
						allVal='面积不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});
				$("input[name='SELL_address']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var selladdressVal = $(this).val();
					if(emails.test(selladdressVal)){
						allVal='correct!';
					}else if(selladdressVal==''){
						allVal='地址不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);
					}
				});
				$("input[name='SELL_time']").blur(function(){
					var reg = new RegExp("^[0-9]*$");
					var obj = document.getElementById("num1");
					if (!reg.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);

					}
					if (!/^[0-9]+$/.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);

					}
				});
				$("input[name='SELL_height']").blur(function(){
					var reg = new RegExp("^[0-9]*$");
					var obj = document.getElementById("num2");
					if (!reg.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);

					}
					if (!/^[0-9]+$/.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);
					}
				});
				$("input[name='SELL_oriention']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var sellorientionVal = $(this).val();
					if(emails.test(sellorientionVal)){
						allVal='correct!';
					}else if(sellorientionVal==''){
						allVal='朝向不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});
				$("input[name='SELL_fitment']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var sellfitmentVal = $(this).val();
					if(emails.test(sellfitmentVal)){
						allVal='correct!';
					}else if(sellfitmentVal==''){
						allVal='装修不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});
				$("input[name='SELL_character']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var sellcharacterVal = $(this).val();
					if(emails.test(sellcharacterVal)){
						allVal='correct!';
					}else if(sellcharacterVal==''){
						allVal='特点不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});


				var allVal='';
				$("input[name='RENT_name']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var sellnameVal = $(this).val();
					if(emails.test(sellnameVal)){
						allVal='correct!';
					}else if(sellnameVal==''){
						allVal='名字不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});

				$("input[name='RENT_telephone']").blur(function(){
					var phone = document.getElementById('phone').value;
					if(!(/^1(3|4|5|7|8)\d{9}$/.test(phone))){
						allVal='请输入正确手机号！！！';
						layerOpen(allVal);
					}
				});

				$("input[name='RENT_title']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var selltitleVal = $(this).val();
					if(emails.test(selltitleVal)){
						allVal='correct!';
					}else if(selltitleVal==''){
						allVal='邮件不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});
				$("input[name='RENT_price']").blur(function() {
					var reg = new RegExp("^[0-9]*$");
					var obj = document.getElementById("num");
					if (!reg.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);

					}
					if (!/^[0-9]+$/.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);
					}

				})
				$("input[name='RENT_type']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var selltypeVal = $(this).val();
					if(emails.test(selltypeVal)){
						allVal='correct!';
					}else if(selltypeVal==''){
						allVal='名字不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});
				$("input[name='RENT_area']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var sellareaVal = $(this).val();
					if(emails.test(sellareaVal)){
						allVal='correct!';
					}else if(sellareaVal==''){
						allVal='面积不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});
				$("input[name='RENT_address']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var selladdressVal = $(this).val();
					if(emails.test(selladdressVal)){
						allVal='correct!';
					}else if(selladdressVal==''){
						allVal='地址不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);
					}
				});
				$("input[name='RENT_time']").blur(function(){
					var reg = new RegExp("^[0-9]*$");
					var obj = document.getElementById("num1");
					if (!reg.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);

					}
					if (!/^[0-9]+$/.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);
					}
				});
				$("input[name='RENT_height']").blur(function(){
					var reg = new RegExp("^[0-9]*$");
					var obj = document.getElementById("num2");
					if (!reg.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);
					}
					if (!/^[0-9]+$/.test(obj.value)) {
						allVal='请输入数字！！！';
						layerOpen(allVal);

					}
				});
				$("input[name='RENT_oriention']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var sellorientionVal = $(this).val();
					if(emails.test(sellorientionVal)){
						allVal='correct!';
					}else if(sellorientionVal==''){
						allVal='朝向不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);
					}
				});
				$("input[name='RENT_fitment']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var sellfitmentVal = $(this).val();
					if(emails.test(sellfitmentVal)){
						allVal='correct!';
					}else if(sellfitmentVal==''){
						aallVal='装修不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});
				$("input[name='RENT_character']").blur(function(){
					var emails = (/[\u4e00-\u9fa5]/g);
					var sellcharacterVal = $(this).val();
					if(emails.test(sellcharacterVal)){
						allVal='correct!';
					}else if(sellcharacterVal==''){
						allVal='特点不能是空的！！！';
						layerOpen(allVal);
					}else{
						allVal='你输入的不是一个正确的格式！';
						layerOpen(allVal);

					}
				});









				$('#n1').blur(function(){
					var name=$(this).val();
					$.post('user/checkname','email='+name,function(data){
						console.log(data);
						if(data=='success'){
							allVal='用户名已被注册！';
							layerOpen(allVal);
							//var oSpan=$('<span id="u1">用户名重名</span>');
							//$('#n1').after(oSpan);
						}
					});
				});



				$('#n2').blur(function(){
					var name=$(this).val();
					console.log(name);
					$.post('user/checknames','email='+name,function(data){

						if(data!='success') {
							allVal = '无此用户！';
							layerOpen(allVal);
						}
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
