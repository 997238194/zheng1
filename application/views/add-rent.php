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
    <link type="text/css" rel="stylesheet" href="css/add.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/comment.js"></script>
    <script src="js/add.js"></script>

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
    <a href="<?php echo site_url('add/addsell')?>" class="home">发布房源</a>
    <a href="<?php echo site_url('add/addrent')?>">出租</a>
</nav>
<div class="clearfloat" id="main">
    <form action="add/inserts" method="post" enctype="multipart/form-data">
    <div class="lease clearfloat">
        <div class="top clearfloat box-s" style="padding: 0; height: 100%;">
            <a href="<?php echo site_url('add/addsell')?>" class="selected;"><button type="button" style="width: 49%;height: 100%;padding: 5% 5%;">卖房</button></a><span style="display: inline; height: 100%;width: 1%; background-color: #c5c5c5;;;"></span>
            <a href="<?php echo site_url('add/addrent')?>"><button type="button" style="width: 50%;">出租</button></a>
        </div>

        <div class="land-ctent land-ctenttwo clearfloat">
            <ul>
                <li class="box-s clearfloat">
                    <p class="tit fl">您的姓名</p>
                    <input type="text" name="RENT_name" id="" value="" placeholder="我们如何称呼您" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">手机号码</p>
                    <input type="text" name="RENT_telephone" id="" value="" placeholder="我们会及时和您取得联系" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">标题</p>
                    <input type="text" name="RENT_title"  value="" placeholder="如阳光房 大客厅 落地窗 急租" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">户型</p>
                    <input type="text" name="RENT_type"  value="" placeholder="如主卧" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">面积</p>
                    <input type="text" name="RENT_area"  value="" placeholder="如96平" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">地点</p>
                    <input type="text" name="RENT_address" id="" value="" placeholder="请输入地点，如朝阳区" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">付款方式</p>
                    <input type="text" name="RENT_price_method"  value="" placeholder="如押一付三" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">租金／售价</p>
                    <input type="text" name="RENT_price"  value="" placeholder="如5000／月" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">建造年代</p>
                    <input type="text" name="RENT_time" id="" value="" placeholder="例如2008年" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">楼层</p>
                    <input type="text" name="RENT_height" id="" value="" placeholder="例如18／24" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">朝向</p>
                    <input type="text" name="RENT_oriention" id="" value="" placeholder="如西" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">装修</p>
                    <input type="text" name="RENT_fitment" id="" value="" placeholder="如精装修" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">特点</p>
                    <input type="text" name="RENT_character" id="" value="" placeholder="如独立卫浴" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">图片</p>
                    <input type="file" name="img" id="" value="" placeholder="如朝阳 大两室一厅" class="fl" />
                </li>

            </ul>
        </div>

        <div class="tiaoli">
            <input type="checkbox" id="check_id" value="checkbox" onclick="isaccepted();"/>
            <label for="check">我已阅读并同意<span>《租房出租/出售委托协议》</span></label>
        </div>
        <a href="#loginmodal" id="modaltrigger">
            <input type="submit" name="" id="submit" value="提交出租委托" class="btn" disabled/>
        </a>
    </div>
    </form>
</div>
<div style=" height: 5.5rem; "></div>
</body>
<script>
    function isaccepted(){
        if(document.getElementById("check_id").checked==true){

            document.getElementById("submit").disabled = false;
//            console.log(222);
        }else{
            document.getElementById("submit").disabled = true;
        }
    }
</script>
</html>
