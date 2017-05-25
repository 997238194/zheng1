
<?php //var_dump($rent);
//die();?>
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
    <a href="<?php echo site_url('publish/publishs')?>"  class="home">我发布的房源</a>
    <a href="<?php echo site_url('publish/publishedit')?>" class="home">修改</a>
</nav>
<div class="clearfloat" id="main">
    <form action="publish/update/<?php echo $v->SELL_id?>" method="post">
    <div class="lease clearfloat">
        <div class="top clearfloat box-s">
            <i class="iconfont icon-gonggao fl"></i>
            <span class="fl box-s">请填认证写您的房源信息，审核通过后会发布上架！</span>
        </div>
        <div class="land-ctent land-ctenttwo clearfloat">
            <ul>
                <li class="box-s clearfloat">
                    <p class="tit fl">姓名</p>
                    <input type="text" name="SELL_name"  value="<?php echo $v->SELL_name?>" placeholder="" class="" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">电话</p>
                    <input type="text" name="SELL_telephone"  value="<?php echo $v->SELL_telephone?>" placeholder="" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">标题</p>
                    <input type="text" name="SELL_title"  value="<?php echo $v->SELL_title?>" placeholder="" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">售价</p>
                    <input type="text" name="SELL_price"  value="<?php echo $v->SELL_price?>" placeholder="如560万" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">户型</p>
                    <input type="text" name="SELL_type"  value="<?php echo $v->SELL_type?>" placeholder="如三室一厅" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">面积</p>
                    <input type="text" name="SELL_area"  value="<?php echo $v->SELL_area?>" placeholder="如96平" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">地点</p>
                    <input type="text" name="SELL_address"  value="<?php echo $v->SELL_address?>" placeholder="请输入地点，如朝阳区" class="fl" />
                </li>

                <li class="box-s clearfloat">
                    <p class="tit fl">建造年代</p>
                    <input type="text" name="SELL_time" value="<?php echo $v->SELL_time?>" placeholder="如2008年" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">楼层</p>
                    <input type="text" name="SELL_height"  value="<?php echo $v->SELL_height?>" placeholder="如18／24" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">朝向</p>
                    <input type="text" name="SELL_oriention" value="<?php echo $v->SELL_oriention?>" placeholder="如西" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">装修</p>
                    <input type="text" name="SELL_fitment"  value="<?php echo $v->SELL_fitment?>" placeholder="如精装修" class="fl" />
                </li>
                <li class="box-s clearfloat">
                    <p class="tit fl">特点</p>
                    <input type="text" name="SELL_character"  value="<?php echo $v->SELL_character?>" placeholder="如例如独立卫浴" class="fl" />
                </li>
                    <li class="box-s clearfloat">
                        <p class="tit fl">图片</p>
                        <input type="file" name="img" id="" value="" placeholder="如朝阳 大两室一厅" class="fl" />
                    </li>
            </ul>
        </div>
        <div class="tiaoli">
            <input type="checkbox" name="" id="check_id" value="" onclick="isaccepted()";/>
            <label for="check">我已阅读并同意<span>《租房出租/出售委托协议》</span></label>
        </div>
        <a href="#loginmodal" id="modaltrigger">
            <input type="submit" name="" id="submit" value="提交修改" class="btn" disabled/>
<!--            input type="submit" name="" id="" value="提交卖房委托" class="btn" />-->
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
