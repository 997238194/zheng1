
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
    <link type="text/css" rel="stylesheet" href="css/publish.css">
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
    <a href="<?php echo site_url('add/addsell')?>">我发布的房源</a>
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
    <?php foreach($sell as $v ) {
        ?>
        <li>
            <a href="sell/selldetail/<?php echo $v->SELL_id?>">
                <img class="house-pic" src="<?php echo $v->img?>"/>
                <p class="house-title"><?php echo $v->SELL_title?></p>
                <p class="house-type"><?php echo $v->SELL_type ,$v->SELL_area,$v->SELL_character?></p>
                <p class="house-address"<?php echo $v->SELL_address?></p>
                <p class="house-tag" style="display: inline-block;">
                    <span class="tingshi">一室</span>
                    <span class="xuequ">学区房</span>
                    <!--<span class="new">地铁房</span>-->
                    <span class="chao"><?php echo $v->SELL_oriention?></span>
                </p>
                <span class="h-price" title="93"><?php echo $v->SELL_price?>万</span>
            </a>
            <a href="publish/publishedit/<?php echo $v->SELL_id?>">
                <button type="button" class="edit">修改</button>
            </a>
<!--            <a href="javascript:;" >-->
                <button type="button" class="del" SELL_id="<?php echo $v->SELL_id?>">删除</button>
<!--            </a>-->
        </li>
        <?php
    }
    ?>
    <?php foreach($rent as $v ) {
    ?>
    <li>
        <a href="rent/rentdetail/<?php echo $v->RENT_id?>">
            <img class="house-pic" src="<?php echo $v->img?>"/>
            <p class="house-title"><?php echo $v->RENT_title?></p>
            <p class="house-type"><?php echo $v->RENT_type,$v->RENT_area?></p>
            <p class="house-address"><?php echo $v->RENT_address?></p>
            <p class="house-tag">
                <span class="xuequ"><?php echo $v->RENT_type?></span>
                <span class="new">学区房</span>
                <span class="chao"><?php echo $v->RENT_oriention?></span>
            </p>
            <span class="h-price" title="93"><?php echo $v->RENT_price?>/月</span>
        </a>
        <a href="publish/publishedits/<?php echo $v->RENT_id?>">
            <button type="button" class="edit">修改</button>
        </a>
        <!--            <a href="javascript:;" >-->
        <button type="button" class="dels" RENT_id="<?php echo $v->RENT_id?>">删除</button>
        <!--            </a>-->
    </li>
    <?php }
    ?>
</ul>


</body>
</html>