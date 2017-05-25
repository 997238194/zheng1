<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;"/>
    <base href="<?php echo site_url();?>"
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/layer/3.0.1/mobile/need/layer.css" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/phone.js"></script>
    <script type="text/javascript" src="js/comment.js"></script>
    <script type="text/javascript" src="http://cdn.bootcss.com/layer/3.0.1/mobile/layer.min.js"></script>
    <script type="text/javascript" src="js/add.js"></script>
</head>

<body>
<div class="whole">
    <div class="title">注册</div>
    <div class="coordinates-icon">
        <div class="coordinates topAct">
            <img src="img/coordinate.png" />
        </div>
        <div class="circle-1-1 circle-show-2"></div>
        <div class="circle-2-2 circle-show-1"></div>
        <div class="circle-3-3 circle-show"></div>
    </div>
    <div class="login-form">
        <form action="user/do_reg" method="post">
            <div class="user-name common-div">
            	<span class="eamil-icon common-icon">
                	<img src="img/eamils.png" />
                </span>
                <input type="text" name="username" value="" id="n1" placeholder="邮件地址" />
            </div>
            <div class="user-captcha common-div">
            	<span class="pasw-icon common-icon">
                	<img src="img/passwords.png" />
                </span>
                <input type="password" name="password" value="" placeholder="设置密码" />
            </div>
<!--            <div class="user-pasw common-div">-->
<!--            	<span class="pasw-icon common-icon">-->
<!--                	<img src="img/passwords.png" />-->
<!--                </span>-->
<!--                <input type="number"  name="code" value="" id="code" placeholder="验证码" />-->
<!--               <a href="user/indexss" class="user-code">发送验证码</a>-->
<!--            </div>-->
<!--            <div class="login-btn common-div">注册</div>-->
            <input type="submit" name="reg" value="注册" class="login-btn common-div" />
        </form>
    </div>
    <div class="forgets">
        <a href="<?php echo site_url('user/login')?>">已有账号？直接登陆</a>
     </div>
</div>
</body>
<script>

</script>
</html>
