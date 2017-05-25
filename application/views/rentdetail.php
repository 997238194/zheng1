<?php //var_dump( $rent);?>

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
    <a href="<?php echo site_url('rent/rents')?>"  class="home">租房</a >
    <a href="<?php echo site_url('rent/rentdetail')?>">房屋详情</a>
</nav>
<!--图片轮换-->
<div class="block_home_slider">
    <div id="home_slider" class="flexslider">
        <ul class="slides">
            <li>
                <div class="slide">
                    <img src="img/pic_home_slider_1.jpg" alt="" />
                </div>
            </li>
            <li>
                <div class="slide">
                    <img src="img/pic_home_slider_2.jpg" alt="" />
                </div>
            </li>

            <li>
                <div class="slide">
                    <img src="img/pic_home_slider_3.jpg" alt="" />
                </div>
            </li>

            <li>
                <div class="slide">
                    <img src="img/pic_home_slider_4.jpg" alt="" />
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
    <a href="javascript:void(0);" class="detai-attention" con_id="<?php echo $rent[0]->RENT_id?>" flag='0'>
        <i class="<?php if($con==1){
            echo 'attention-ico2';
        }else if($con==0){
            echo 'attention-ico';
        }?>"></i>
        <p>关注</p>
    </a>
</div>

<?php foreach ($rent as $v) {
    ?>
    <div class="detail-list">
        <div class="detai-price">
            <p>租金</p>
            <p><span><?php echo $v->RENT_price?>/月</span></p>
        </div>
        <div class="detai-price">
            <p>户型</p>
            <p><span><?php echo $v->RENT_type?></span></p>
        </div>
        <div class="detai-price">
            <p>面积</p>
            <p><span><?php echo $v->RENT_area?></span></p>
        </div>
    </div>
    <ul class="decript-list">
        <li>
            <span class="color" style="float: left;">特点：</span>
            <div class="house-tag1" style=" ">
                <i class="tingshi"><?php echo $v->RENT_type?></i>
                <i class="chao"><?php echo $v->RENT_oriention?></i>
                <i class="chao"><?php echo $v->RENT_character?></i>
            </div>
        </li>
        <li>
            <span class="color">租金：</span><?php echo $v->RENT_price?>
        </li>
        <li>
            <span class="sy"><span class="color">付款方式</span>：<?php echo $v->RENT_price_method?></span>
            <span class="sy"><span class="color">建造年代：</span><?php echo $v->RENT_time?></span>
        </li>
        <li>
            <span class="sy"><span class="color">楼层：</span><?php echo $v->RENT_height?></span>
            <span class="sy"><span class="color">朝向：</span><?php echo $v->RENT_oriention?></span>
        </li>
        <li>
            <span class="color">装修：</span><?php echo $v->RENT_fitment?>
        </li>
        <li>
            <span class="color">地址：</span><?php echo $v->RENT_address?>
        </li>
    </ul>

<ul class="detail-agent">
    <li>
        <a class="detail-agent-title">房屋介绍</a>
        <div class="detail-commetent">

            出租的房间是次卧，南北通透，阳光充足，空气流通，男女不限，带独
            立卫生间，还有独立的厨房，是配置最齐全的 一个单间。出租的房间是
            次卧，南北通透，阳光充足，空气流通，男女不限，带独立卫生间，还
            有独立的厨房，是配置最齐全的 一个单间。

        </div>
    </li>
    <li>
        <a href="" class="detail-agent-title">更多房评<i class="link"></i></a>
    </li>
    <li>
        <a href="" class="detail-agent-title">位置及周边<i class="link"></i></a>
        <div class="detail-commetent">
            <p>地址：北京市<?php echo $v->RENT_address?></p>
            <iframe style="width: 100%; height: 160px; border: 0; " src="<?php echo site_url('search/map')?>"></iframe>
        </div>
    </li>
</ul>
    <?php
}
?>
<div style=" height: 5.5rem; "></div>
<div class="agent-foot">
    <?php foreach ($rent as $v) {
    ?>
<img class="agent-photo" src="img/test1.jpg"/>
<p class="name"><?php echo $v->RENT_name?></p>
<p class="tele"><?php echo $v->RENT_telephone?></p>
    <?php }?>
</div>
</div>
</body>
</html>
