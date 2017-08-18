<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!--内容-->
<div class="outW">
    <div class="inW">
	    <span class="locaing">当前位置：<a href="<?php echo siteurl($siteid);?>">首页</a> > <?php echo catpos($catid);?></span>
		<div class="common-pro">

        <div class="common-list">
            <ul>
	            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
	            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	            <?php
					$time = $r['inputtime'];
					$date = date('Y-m',$time);
					$day = date('d',$time);
	            ?>
                <li>
                    <div class="common-ll"><p><?php echo $date;?></p><span><?php echo $day;?></span></div>
                    <div class="common-lr">
                        <dl>
                            <dt><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></dt>
                            <p><a href="<?php echo $r['url'];?>" title="<?php echo $r['description'];?>" target="_blank">　　<?php echo $r['description'];?></a></p>
                        </dl>
                    </div>
                    <div class="clear"></div>
                </li>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>


        <div class="inW cen">
            <?php echo $pages;?>
        </div>
       	</div>
    </div>
</div>
<!--内容 end-->

<?php include template("content","footer"); ?>