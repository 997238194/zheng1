<?php //var_dump($agent);?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
		<base href="<?php echo site_url();?>"
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-austo-match" content="none"/>
    <meta name="HandheldFriendly" content="true"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/popup_layer.js"></script>
    <script src="js/zoom.js"></script>
	</head>
	<body>
	
		<header class="main2">
			<a href="" class="return"><img src="img/back.png" width="14" height="24"></a>
            <span>厉害了～中介</span>
            <a href="javascript:;" class="me" style="float: right; width: 24px; height: 24px;"></a>
		</header>
		<?php foreach($agents as $v){

		?>
        <ul class="agent-list" style="margin-top: 40px;">
			<li style="margin:18px 0.938rem;">
			  <img class="agent-pic" src="img/pic_home_slider_3.jpg"/>
			  <div class="agent-introduct">
			    <p class="agent-name"><?php echo $v->RENT_name?></p>
			    <p>联系电话：<?php echo $v->RENT_telephone?></p>
              </div>
              <div class="agent-weixin" id="ele9"><img src="img/test2.png"/></div>
              
			</li>
		</ul>
		<div style=" position: absolute; z-index: 1000; padding: 10px; opacity: 1; background-color: white; display: none;" id="blk9">
              <img src="img/test2.png" width="180" height="180">
         </div>
		<div class="agent-title1">我管理的房源<img src="img/house1.png" width="24" height="25"/></div>
		<ul class="house-list1">
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
		</ul>
	<?php
	}
	?>

	</body>
</html>
