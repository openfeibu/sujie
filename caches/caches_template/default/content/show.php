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
			            <div class="details-tag">
			                <span>时间：<?php echo $inputtime;?> 点击：<em id="hits"><span id="hits"></span></em>次</span><script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script> 
			            </div>
			            <div class="cont">
			               <p><?php echo $content;?></p>  
			            </div>

			            <div class="details-dt">
				    		上一篇：<a href="<?php echo $previous_page['url'];?>" title="<?php echo $previous_page['title'];?>"><?php echo $previous_page['title'];?></a><br>下一篇：<a href="<?php echo $next_page['url'];?>" title="<?php echo $next_page['title'];?>"><?php echo $next_page['title'];?></a>
				    	</div>
			        </div>
			    </div>
		    </div>
		</div>
	</div>
</div>
<!--内容 end-->


<?php include template("content","footer"); ?>