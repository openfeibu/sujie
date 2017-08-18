<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--内容-->
<div class="outW">
	<div class="inW">
		<span class="locaing">当前位置：<a href="<?php echo siteurl($siteid);?>">首页</a> > <?php echo catpos($catid);?></span>
		<div class="details-page">
		    <div class="crumbs">
		      
			    <div class="details-bg  wrap clear">
			        <div class="details-con">
			            <h1><?php echo $title;?></h1>

			            <div class="cont">
			               <p><?php echo $content;?></p>  
			            </div>
			        </div>
			    </div>
		    </div>
		</div>
	</div>
</div>
<!--内容 end-->


<?php include template("content","footer"); ?>