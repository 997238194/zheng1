<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <base href="<?php echo site_url();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none"/>
<!--    移动web页面自动探测电话号码，none是关闭，页面上如果有手机号等数字串就不会被识别成手机号了-->
    <meta name="HandheldFriendly" content="true"/>
    <!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
<!--    <link type="text/css" rel="stylesheet" href="css/attention.css">-->
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
    <a href="rent/index" class="home" style="margin-left: 0.938rem;">首页</a>
    <a href="attention.php">我关注的房源</a>
</nav>


<div class="search-none" style="display:none;">
    <div class="search-top">
        <a href="javascript:;" class="table-cell" id="return"><img src="img/return1.png"></a>
        <div class="table-cell" style="width: 100%;">
            <input class="none-input" type="text" placeholder="请输入小区或商圈名称" />
        </div>
        <a href="" class="table-cell"><img src="img/search1.png" style="margin-left: 4px;"></a>
    </div>
</div>
<ul class="house-list">
    <?php foreach ($buy as $z){?>
    <li>
        <li>
            <a href="sell/selldetail/<?php echo $z->SELL_id?>">
                <img class="house-pic" src="<?php echo $z->img?>"/>
                <p class="house-title"><?php echo $z->SELL_title?></p>
                <p class="house-type"><?php echo $z->SELL_type?></p>
                <p class="house-address"><?php echo $z->SELL_address?></p>
                <p class="house-tag">
                    <span class="tingshi">一室</span>
                    <span class="xuequ">学区房</span>
                    <!--<span class="new">地铁房</span>-->
                    <span class="chao"><?php echo $z->SELL_oriention?></span>
                </p>
                <span class="h-price" title="93"><?php echo $z->SELL_price?>万</span>
            </a>
        </li>
        <a href="" class="detai-attention" style="border: none;">
            <i class="attention-ing-ico"></i>
        </a>
    </li>
    <?php }?>
    <?php foreach ($rent as $v){?>
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
    <?php }?>
</ul>


</body>
</html>