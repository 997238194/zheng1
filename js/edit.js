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
            allVal='你的密码不对！！！';
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