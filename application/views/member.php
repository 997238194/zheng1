<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
	<base href="<?php echo site_url();?>"
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none"/>
    <meta name="HandheldFriendly" content="true"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/comment.js"></script>
    <script src="js/house.js"></script>
</head>
<body>
	<header class="main1">
		<div class="top">
				<div class="city" style="background: none; text-indent: 0; top: 0;">
					<span>北京
					<i><img src="img/xiala.png"></i></span>
				</div>
				<div class="select_city" style="display: none;">
					<!--<span class="ui-dropmenu-arrow" style="left: 25%; right: auto;"></span>-->
					<div class="select-return">
						<a href="javascript:;" class="return-btn">返回</a>选择城市
					</div>
					<h6>当前定位的城市</h6>
					<span class="fail">定位为：北京市，其他城市正在开放中~</span>
					<h6>所有城市</h6>
					<ul class="city-list">
					<li><a href="">杭州</a></li>
					<li><a href="">上海</a></li>
					<li><a href="">深圳</a></li>
					</ul>
				</div>
			</div>
		<a href="" class="me"><img src="img/me.png" width="20" height="30"></a>
	</header>
    <div class="member">
    	<a href="" class="touxiang"><img src="img/member.png" width="54" height="54"></a>
		<?php if($status==0){
			echo '<a href="user/login" class="member-btn">登录</a>';
		}else if($status==1){
			echo '<a href="user/delete_login" class="member-btn">退出</a>';
		}?>

    </div>
    <ul class="decript-list">
        	<?php if($status==0){
				echo '<li><a href="user/login">我关注的房源</a></li><li><a href="user/login">我发布的房源</a></li>';
			}else if($status==1){
				echo '<li><a href="attention/select">我关注的房源</a></li><li><a href="publish/publishs">我发布的房源</a></li>';
			}?>
	</ul>
</body>
</html>