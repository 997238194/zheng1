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

    //password blur
    $("input[name='password']").blur(function(allVal){
        var paswVal = $(this).val();
        if(paswVal.length==''){
            allVal='你还没有输入密码！！！';
            layerOpen(allVal);
        }else{
            allVal='你输入的邮箱不对！！！';
        }
    });

    //captcha blur
    $("input[name='captcha']").blur(function(allVal){
        var captchaVal = $(this).val();
        if(captchaVal.length==''){
            allVal='你的验证码不对！！！';
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

        //$("input[name='SELL_name']").blur(function(allVal){
        //   console.log(111);
        //    var emails =  /^[\u4e00-\u9fa5]*\d*[\u4e00-\u9fa5]+\d+[\u4e00-\u9fa5]*\d*$/;
        //    var sellnameVal = $(this).val();
        //    if(emails.test(sellnameVal)){
        //        allVal='correct!';
        //    }else if(usernameVal==''){
        //        allVal='用户名不能是空的！！！';
        //        layerOpen(allVal);
        //    }else{
        //        allVal='你输入的不是一个正确的格式！';
        //        layerOpen(allVal);
        //    }
        //});
        //
        //
        //
        //
        //$("input[name='captcha']").blur(function(allVal){
        //    var captchaVal = $(this).val();
        //    if(captchaVal.length==''){
        //        allVal='你的验证码不对！！！';
        //        layerOpen(allVal);
        //    }else{
        //        allVal='你输入的邮箱不对！！！';
        //    }
        //});





























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