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
    <meta http-equiv="x-rim-auto-match" content="none"/>
    <meta name="HandheldFriendly" content="true"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script>
    	$(function(){
			$(".me").click(function(){
				$(".search-none").fadeIn();
			})
			$("#return").click(function(){
				$(".search-none").fadeOut();
			})
	});
    </script>
	</head>
	<body>
		<header class="main2">
			<a href="" class="return"><img src="img/nav.png" width="24" height="24"></a>
            
            <span>哇～是中介</span>
            <a href="javascript:;" class="me" style="float: right;"><img src="img/sousuo.png" width="24" height="24"></a>
		</header>
<div class="search-none" style="display:none;">
	<div class="search-top">
	  <a href="javascript:;" class="table-cell" id="return"><img src="img/return1.png"></a>
	  <a href="" class="table-cell"><img src="img/search1.png" style="margin-left: 4px;"></a>
	</div>
</div>

		<?php foreach($agent as $v)
		{
		?>
		<ul class="agent-list">
			<li>
			  <a href="agent/agentdetail/<?php echo $v->SELL_id?>">
			  <img class="agent-pic" src="<?php echo $v->img?>"/>
			  <div class="agent-introduct">
			    <p class="agent-name"><?php echo $v->SELL_name?></p>
			    <p>联系电话：<?php echo $v->SELL_telephone?></p>
              </div>
			  </a>
			</li>

		</ul>
		<?php
		}
		?>

		<?php foreach($agents as $v)
		{
			?>
			<ul class="agent-list">
				<li>
					<a href="agent/rentagentdetail/<?php echo $v->RENT_id?>">
						<img class="agent-pic" src="<?php echo $v->img?>"/>
						<div class="agent-introduct">
							<p class="agent-name"><?php echo $v->RENT_name?></p>
							<p>联系电话：<?php echo $v->RENT_telephone?></p>
						</div>
					</a>
				</li>

			</ul>
			<?php
		}
		?>
	</body>
</html>
