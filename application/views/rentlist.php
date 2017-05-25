<?php //var_dump($sea);?>
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
	<!--<script src="js/jquery.mobile-1.4.5.js"></script>-->
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
					<span class="fail">定位为：北京市,敬请期待其他城市~</span>
					<h6>所有城市</h6>
					<ul class="city-list">
					<li><a href="">上海</a></li>
					<li><a href="">深圳</a></li>
					<li><a href="">杭州</a></li>
					</ul>
				</div>
			</div>
		<a href="" class="me"><img src="img/me.png" width="20" height="30"></a>
	</header>
	<nav class="nav1">
		<a href="<?php echo site_url('rent/index')?>" class="home" style="margin-left: 0.938rem;">首页</a>
		<a href="">租房</a>
	</nav>

<div class="list-search" >
	<input type="text" class="list-input" id='accounts' name="text1" placeholder="请输入小区或商圈名称"  />
	<a href="javascript:void(0);" class="search-btn"><img src="img/list-search.png"/></a>
</div>
<!--二手房搜索-->
<div class="search-none" style="display:none;">
	<div class="search-top">
	  <a href="javascript:void(0);" class="table-cells" id="return"><img src="img/return1.png"></a>
	  <div class="table-cell" style="width: 100%;">
	     <input class="none-input" type="text" id="accountse" name="text1" placeholder="请输入小区或商圈名称" />
	  </div>
	  <a href="javascript:void(0);" class="table-cells"><img src="img/search1.png" style="margin-left: 4px;"></a>
	</div>
</div>


<!-- screening -->
<div class="screening">
    <ul>
        <li class="Regional">区域</li>
        <li class="Brand">价格</li>
        <li class="Sort">房型</li>
        <li class="more">朝向</li>
    </ul>
</div>
<!-- End screening -->
<!-- grade -->
<div class="grade-eject">
	<ul class="grade-w" id="gradew">
		<?php for($i=0;$i<count($sea);$i++){?>
			<?php if($sea[$i]->type==1){?>
				<li class="position"><?php echo $sea[$i]->name?></li>
			<?php }?>
		<?php }?>
	</ul>
</div>
<div class="Category-eject">
    <ul class="Category-w" id="Categorytw">
		<?php for($i=0;$i<count($sea);$i++){?>
			<?php if($sea[$i]->type==5){?>
				<li class="position2"><?php echo $sea[$i]->name?></li>
			<?php }?>
		<?php }?>

    </ul>
</div>

<div class="Sort-eject Sort-height">
    <ul class="Sort-Sort" id="Sort-Sort">
		<?php for($i=0;$i<count($sea);$i++){?>
			<?php if($sea[$i]->type==3){?>
				<li class="position3"><?php echo $sea[$i]->name?></li>
			<?php }?>
		<?php }?>

    </ul>
</div>

<div class="more-eject more-height">

    <ul class="more-Sort" id="more-Sort">
<!--        <li onClick="more(this)">排序</li>-->
        <li onClick="more(this)">朝向</li>

    </ul>
    <ul class="more-t" id="more" style="left:0%; z-index: 999;">
		<?php for($i=0;$i<count($sea);$i++){?>
			<?php if($sea[$i]->type==4){?>
				<li class="position4"><?php echo $sea[$i]->name?></li>
			<?php }?>
		<?php }?>

    </ul>

    <div style="background: #ff5a60; padding:0.938rem; color:#fff; position:absolute; bottom:0px; text-align:center; z-index:999; width:100%;"><a href="javascript:void(0);" style="color:#fff" id="searchs">确定</a></div>

</div>
<!-- more -->
<ul class="house-list">
	<?php foreach ($rent as $v) {
		?>
		<li>
			<a href="rent/rentdetail/<?php echo $v->RENT_id?>">
				<img class="house-pic" src="<?php echo $v->img?>"/>
				<p class="house-title"><?php echo $v->RENT_title?></p>
				<p class="house-type"><?php echo $v->RENT_type,$v->RENT_area?></p>
				<p class="house-address"><?php echo $v->RENT_address?></p>
				<p class="house-tag">
					<!--<span class="tingshi"></span>-->
					<!--<span class="xuequ">学区房</span>-->
					<span class="new">地铁房</span>
					<span class="chao"><?php echo $v->RENT_oriention?></span>
				</p>
				<span class="h-price" title="93"><?php echo $v->RENT_price?>/月</span>
			</a>
		</li>
		<?php
	}
	?>
        </ul>


</body>
</html>