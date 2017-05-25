<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;"/>
    <base href="<?php echo site_url();?>"

<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/layer/3.0.1/mobile/need/layer.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/phone.js" ></script>
<script type="text/javascript" src="http://cdn.bootcss.com/layer/3.0.1/mobile/layer.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</head>

<body>
<div class="whole">
	<div class="title">登陆</div>
    <div class="coordinates-icon">
    	<div class="coordinates topAct">
        	<img src="img/coordinate.png" />
        </div>
        <div class="circle-1-1 circle-show-2"></div>
        <div class="circle-2-2 circle-show-1"></div>
        <div class="circle-3-3 circle-show"></div>
    </div>
    <div class="login-form">
    	<form action="user/do_login" method="post">
        	<div class="user-name common-div">
            	<span class="eamil-icon common-icon">
                	<img src="img/eamils.png" />
                </span>
                <input type="text" name="username" value=""  placeholder="邮件地址" />
            </div>
            <div class="user-pasw common-div">
            	<span class="pasw-icon common-icon">
                	<img src="img/passwords.png" />
                </span>
                <input type="password" name="password" value="" placeholder="******" />        
            </div>
            <input type="submit" name="login" value="登录" class="login-btn common-div" />
        </form>
    </div>
    <div class="forgets">
        <a href="<?php echo site_url('user/forget')?>">忘记密码?</a>
        <a href="<?php echo site_url('user/reg')?>">注册</a>
    </div>
</div>
</body>
</html>
