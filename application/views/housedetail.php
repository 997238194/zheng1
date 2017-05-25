<?php //var_dump($rent->img);?>
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
    <meta http-equiv="x-rim-auto-match" content="none"/>
    <meta name="HandheldFriendly" content="true"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/comment.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
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
		<a href="<?php echo site_url('sell/sells')?>"  class="home">买房</a>
		<a href="<?php echo site_url('sell/selldetail')?>">房屋详情</a>
	</nav>
	<!--图片轮换-->
	<div class="block_home_slider">
                        	<div id="home_slider" class="flexslider">
                            	<ul class="slides">
                                	<li>
                                    	<div class="slide">
                                            <img src="<?php echo $rent->img?>" alt="" />
                                            <!--<div class="caption">
                                                <p class="title">国内金准营销服务中心</p>
                                                <p>90天让您的网站升级100倍。国内金准营销服务中心.国内金准营销服务中心国内金准营销服务中心国内金准营销服务中心国内金准营销服务中心</p>
                                            </div>-->
                                        </div>
                                    </li>
                                    
                                    <li>
                                    	<div class="slide">
                                            <img src="<?php echo $rent->img?>" alt="" />
                                            <!--<div class="caption">
                                                <p class="title">国内金准营销服务中心</p>
                                                <p>90天让您的网站升级100倍。国内金准营销服务中心.国内金准营销服务中心国内金准营销服务中心国内金准营销服务中心国内金准营销服务中心</p>
                                            </div>-->
                                        </div>
                                    </li>
                                    
                                    <li>
                                    	<div class="slide">
                                            <img src="<?php echo $rent->img?>" alt="" />
                                        </div>
                                    </li>
                                    
                                    <li>
                                    	<div class="slide">
                                            <img src="<?php echo $rent->img?>" alt="" />
                                            <!--<div class="caption">
                                                <p class="title">国内金准营销服务中心</p>
                                                <p>90天让您的网站升级100倍。国内金准营销服务中心.国内金准营销服务中心国内金准营销服务中心国内金准营销服务中心国内金准营销服务中心</p>
                                            </div>-->
                                        </div>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                            <div class="num-pic">1/5</div>
                            <script type="text/javascript">
								$(function () {
									$('#home_slider').flexslider({
										animation : 'slide',
										controlNav : true,
										directionNav : true,
										animationLoop : true,
										slideshow : false,
										useCSS : false
									});
									
								});
							</script>

     </div>
                       <!--图片轮换-->

		<div class="house-detai">
			<a href="" class="detail-title">如果要观望,我建议你看完这个房子后再观望,一定不会让您失望！</a>
			<a href="javascript:void(0);" class="detai-attention" con_id="<?php echo $rent->SELL_id?>" flag='1'>
				<i class="<?php if($con==1){
					echo 'attention-ico2';
				}else if($con==0){
					echo 'attention-ico';
				}?>"></i>
				<p>关注</p>
			</a>
		</div>

        <div class="detail-list">
        	<div class="detai-price">
        		<p>售价</p>
        		<p><span><?php echo $rent->SELL_title?></span></p>
        	</div>
        	<div class="detai-price">
        		<p>户型</p>
        		<p><span><?php echo $rent->SELL_type?></span></p>
        	</div>
        	<div class="detai-price">
        		<p>面积</p>
        		<p><span><?php echo $rent->SELL_area?></span></p>
        	</div>
        </div>
        <ul class="decript-list">
        	<li>
        		<span class="color" style="float: left;">特点：</span>
        		<div class="house-tag1" style=" ">
        			<i class="tingshi"><?php echo $rent->SELL_type?></i>
        			<i class="xuequ">学区房</i>
        			<i class="chao"><?php echo $rent->SELL_oriention?></i>
        			<i class="new"><?php echo $rent->SELL_time?></i>
        		</div>
        	</li>
        	<li>
        		<span class="color">单价：</span><?php echo $rent->SELL_price?>万
        	</li>
<!---->
        	<li>
        		<span class="sy"><span class="color">楼层：</span><?php echo $rent->SELL_height?></span>
        		<span class="sy"><span class="color">朝向：</span><?php echo $rent->SELL_oriention?></span>
        	</li>
        	<li>
        		<span class="color">装修：</span><?php echo $rent->SELL_fitment?>
        	</li>
        	<li>
        		<span class="color">地址：</span><?php echo $rent->SELL_address?>
        	</li>
        </ul>
        <ul class="detail-agent">
        	<li>
        	  <a class="detail-agent-title">经纪人房评</a>
        	  <div class="detail-commetent">
        	  	欢迎点击我的房源，我在中环地产工作8年以上，对每个小区户型了如指掌，能给您介绍更好房源和性价比更高房源，节省您看房时间，尽快帮您找到温馨的家，谢谢来电话。...
        	  </div>
        	</li>
        	<li>
        	  <a href="" class="detail-agent-title">更多房评<i class="link"></i></a>
        	</li>
        	<li>
        	  <a href="" class="detail-agent-title">位置及周边<i class="link"></i></a>
        	  <div class="detail-commetent">
				  <p>地址：北京市<?php echo $rent->SELL_address?></p>
        	  	<iframe style="width: 100%; height: 160px; border: 0; " src="<?php echo site_url('search/map')?>"></iframe>
        	  </div>
        	</li>

        </ul>
        <div style=" height: 5.5rem; "></div>
		<div class="agent-foot">

				<img class="agent-photo" src="img/test1.jpg"/>
				<p class="name"><?php echo $rent->SELL_name?></p>
				<p class="tele"><?php echo $rent->SELL_telephone?></p>

		</div>
		</div>
	</body>
</html>
