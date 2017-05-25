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
    <script type="text/javascript" src="js/phone.js" ></script>
    <script type="text/javascript" src="js/comment.js"></script>

    <script type="text/javascript" src="http://cdn.bootcss.com/layer/3.0.1/mobile/layer.min.js"></script>
    <script type="text/javascript" src="js/edit.js"></script>
</head>

<body>
<div class="whole">
    <div class="title">忘记密码</div>
    <div class="coordinates-icon">
        <div class="coordinates topAct">
            <img src="img/coordinates.png" />
        </div>
        <div class="circle-1-1 circle-show-2"></div>
        <div class="circle-2-2 circle-show-1"></div>
        <div class="circle-3-3 circle-show"></div>
    </div>
    <div class="login-form">
        <form action="user/do_forget" method="post">
            <div class="user-name common-div">
            	<span class="eamil-icon common-icon">
                	<img src="img/eamil.png" />
                </span>
                <input type="email" name="username" value="" id="n2" placeholder="邮件地址" />
            </div>
            <div class="user-pasw common-div">
            	<span class="pasw-icon common-icon">
                	<img src="img/password.png" />
                </span>
                <input type="password" name="password" value="" placeholder="新密码" />
            </div>
            <div class="user-pasw common-div">
            	<span class="pasw-icon common-icon">
                	<img src="img/password.png" />
                </span>
                <input type="password" name="passwords" value="" placeholder="确认新密码" />
            </div>
            <input type="submit" name="forget" value="提交" class="login-btn common-div" />
        </form>
    </div>
    <div class="forgets">
        <!--<a href="#">修改密码</a>-->
        <a href="<?php echo site_url('user/login')?>">登陆</a>
        <a href="<?php echo site_url('user/reg')?>">注册</a>
    </div>
</div>
</body>
<script>
    $(function(){

    });
</script>
</html>
