<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//var_dump($status);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<base href="<?php echo site_url();?>"
		<title></title>
		<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery-1.8.2.min.js"></script>
		<script src="js/comment.js"></script>
		<script type='text/javascript' src='http://api.map.baidu.com/api?v=1.3'></script>
		<!--<script src="js/jquery.mobile-1.4.5.js"></script>-->

		<script type='text/javascript'>

function getLocation()
{
if(navigator.geolocation){
navigator.geolocation.getCurrentPosition(showMap, handleError, {enableHighAccuracy:true, maximumAge:1000});
}else{
alert("您的浏览器不支持使用HTML 5来获取地理位置服务");
}
}

function showMap(value)
{
var longitude = value.coords.longitude;
var latitude = value.coords.latitude;
var map = new BMap.Map('map');
var point = new BMap.Point(116.460370,39.832670);    // 创建点坐标
map.centerAndZoom(point, 15);
var marker = new BMap.Marker(new BMap.Point(116.460370,39.832670));  // 创建标注
map.addOverlay(marker);              // 将标注添加到地图中
}

function handleError(value)
{
switch(value.code){
//case 1:
//alert('位置服务被拒绝');
//break;
case 2:
alert('暂时获取不到位置信息');
break;
case 3:
alert('获取信息超时');
break;
case 4:
alert('未知错误');
break;
}
}

function init()
{
getLocation();
}

window.onload = init;
</script>
	</head>
	<body>
		<header id="header">
			<div class="top">
				<div class="city">
					<span>北京
					<i><img src="img/xiala.png"/></i></span>
				</div>
				<div class="select_city" style="display: none;">
					<!--<span class="ui-dropmenu-arrow" style="left: 25%; right: auto;"></span>-->
					<div class="select-return">
						<a href="javascript:;" class="return-btn">返回</a>选择城市
					</div>
					<h6>当前定位的城市</h6>
					<span class="fail">定位为：北京市，敬请期待其他城市～</span>
					<h6>所有城市</h6>
					<ul class="city-list">
					<li><a href="">上海</a></li>
					<li><a href="">深圳</a></li>
					<li><a href="">杭州</a></li>
					</ul>
				</div>
			</div>
			<div class="text"></div>

			<div class="search">
				<input class="search-input" type="text"  id='account' name="text1" placeholder="输入小区或商圈名开始找房" />
				<a href="javascript:void(0);" class="search-icon"><img src="img/search.png"/></a>
			</div>
		</header>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="nav">
		  <tr>
			<td><a href="sell/sells" ><i><img src="img/house.png"></i><span>买房<br/>海量房源任你挑</span></a></td>
			<td><a href="<?php echo site_url('rent/rents')?>"><i><img src="img/rent.png"></i><span>租房<br/>租房生活新理念</span></a></td>
		  </tr>
		  <tr>
			  <td style="border-bottom: 0;"><a href="<?php echo site_url('agent/agents')?>"><i><img src="img/agent.png"></i><span>中介<br/>找房路上好帮手</span></a></td>
			  <?php if($status==0){
				  echo '<td style="border-bottom: 0;"><a href="user/login" style="margin-left: -0.875rem;"><i><img src="img/new.png"></i><span>发布房源<br/></span></a></td>';
			  }else if($status==1){
				  echo '<td style="border-bottom: 0;"><a href="add/addsell" style="margin-left: -0.875rem;"><i><img src="img/new.png"></i><span>发布房源<br/></span></a></td>';
			  }?>


		  </tr>
		</table>

        <div class="hot-house">热门房源</div>
        <ul class="house-list">
			<?php foreach($rent as $v )
			{
			?>
        	<li>
				<a href="sell/selldetail/<?php echo $v->SELL_id?>">
        		<img class="house-pic" src="<?php echo $v->img?>" />
        		<p class="house-title"><?php echo $v->SELL_title?></p>
        		<p class="house-type"><?php echo $v->SELL_type ,$v->SELL_area,$v->SELL_character?></p>
        		<p class="house-address"><?php echo $v->SELL_address?></p>
        		<p class="house-tag">
        			<span class="tingshi"><?php echo $v->SELL_type?></span>
        			<span class="xuequ">学区房</span>
        			<!--<span class="new">地铁房</span>-->
        			<span class="chao"><?php echo $v->SELL_oriention?></span>
        		</p>
        		<span class="h-price" title="93"><?php echo $v->SELL_price?>万</span>
        		</a>
        	</li>

			<?php
			}
			?>
        </ul>
    <div style="height:50px; width:100%;"></div>
    <ul class="foot">
    	<li><a href=""><img src="img/home.png" /><p>首页</p></a></li>
    	<li><a href="<?php echo site_url('sell/sells')?>"><img src="img/maifang.png" /><p>买房</p></a></li>
    	<li><a href="<?php echo site_url('rent/rents')?>"><img src="img/renting.png" /><p>租房</p></a></li>
    	<li><a href="<?php echo site_url('agent/member')?>"><img src="img/menber.png" /><p>我</p></a></li>
    </ul>
	</body>

</html>
