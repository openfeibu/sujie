<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php echo CHARSET;?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		<link rel="stylesheet" href="<?php echo CSS_PATH?>css/reset.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH?>css/layout.css" />
		<script src="<?php echo JS_PATH?>js/jquery-1.7.2.min.js"></script>
		<script src="<?php echo JS_PATH?>js/script.js"></script>
		<script src="<?php echo JS_PATH?>js/html5.js"></script>
		<title><?php echo L('phpcms_logon')?></title>
		<style>
		#login{width: 572px; height: 373px; background: url(<?php echo IMG_PATH?>images/login-bg.png) no-repeat; float: right; margin-top: 123px; position: relative;z-index: 4;}
        #login .input-area{ margin: 0 0 10px 100px; position: relative; }
		#login .yaosi{width: 78px; height: 129px; background: url(<?php echo IMG_PATH?>images/yaosi.png) no-repeat; position: absolute; top: 6px; right: 1px;}
		section .cloud{ width: 441px; height: 178px; background: url(<?php echo IMG_PATH?>images/cloud.png) no-repeat; position: absolute; top: 43px; left: 5px; z-index: 2;}
		section .text{ width: 280px; height: 95px; background: url(<?php echo IMG_PATH?>images/text.png) no-repeat; position: absolute; top: 72px; left: 105px; z-index: 3;}
		section .text a{ background: url(<?php echo IMG_PATH?>images/apply-icon.png) no-repeat; width: 73px; height: 25px; display: block; float: right; margin-top: 75px; margin-right: 55px;}
		section .text a:hover{opacity: .7;}
		section .phone{ width: 193px; height: 236px; background: url(<?php echo IMG_PATH?>images/phone.png) no-repeat; position: absolute; top: 213px; left: 120px; z-index: 3;}
		section .ship{ width: 384px; height: 157px; background: url(<?php echo IMG_PATH?>images/ship.png) no-repeat; position: absolute; top: 330px; left: 32px; z-index: 2;}
		section .mountain{width: 1022px; height: 157px; background: url(<?php echo IMG_PATH?>images/mountain.png) no-repeat; position: absolute; top: 558px; left: -10px; z-index: -1;}
		</style>
		<script type="text/javascript">
			$(function(){
				$("#form1 .kw").each(function(){
					$(this).data( "txt", $.trim($(this).val()) );
				}).focus(function(){
					if ( $.trim($(this).val()) === $(this).data("txt") ) {
						$(this).val("").removeClass("tips");
					}
				}).blur(function(){
					if ( $.trim($(this).val()) === "" && !$(this).hasClass("once") ) {
						$(this).val( $(this).data("txt") ).addClass("tips");
					}
				});
			});
		</script>
	</head>
	<body>
		<header>

		</header>
		<section class="clearfix">

			<div class="phone hide"></div>
			<div class="ship hide"></div>
			<div class="mountain hide"></div>
			<div id="login" class="hide">
				<h3>速捷后台管理系统</h3>
				<form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform" id="form1">
					<div class="input-area clearfix">
						<label>用户名：</label>
						<input type="text" name="username"  id="username" class="input-text in_txt kw tips" placeholder="请输入用户名" />
					</div>
					<div class="input-area clearfix">
						<label>密码：</label>
						<input type="password" name="password" id="password" class="input-text in_txt kw tips" placeholder="请输入密码" />
					</div>
					<div class="input-area clearfix">
						<label>验证码：</label>
						<input type="text" id="code" name="code" class="input-text in_txt2 kw tips" size="8" placeholder="请输入验证码" style="width: 186px" />
						<div class="code"><img id="code_img" onclick="this.src=this.src+&quot;&amp;&quot;+Math.random()" src="<?php echo SITE_PROTOCOL.SITE_URL.WEB_PATH;?>api.php?op=checkcode&code_len=4&font_size=16&width=100&height=30&font_color=&background=white" style="float:right;"></div>
						<div class="clear"></div>
					</div>
					<div class="input-area clearfix">
						<input type="submit" name="dosubmit" id="button" class="input-sub" value="登 陆" />
						<a href="index.php?m=member&amp;c=index&amp;a=public_forget_password&amp;siteid=1" class="link">忘记密码？</a>
						<a href="http://www.npower2010.com/html/about/contact/"  target="_blank" class="link">意见反馈</a>
					</div>
				</form>
				<div class="yaosi"></div>
			</div>
		</section>
		<footer>

		</footer>
	</body>
</html>
