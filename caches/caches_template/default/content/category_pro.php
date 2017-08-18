<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>


<div class="outW">
    <!--banner -->
    <div class="inW center">
        <div class="serverBanner">
        <img src="<?php echo CSS_PATH;?>/sujie/images/server_banner.jpg" alt="">

    </div>
    <!--banner end-->

    <!--内容-->
    <div class="loca" id="content">
         <span class="locaing">当前位置：<a href="<?php echo siteurl($siteid);?>">首页</a> > <?php echo catpos($catid);?></span>
         <p class="locaSer">
            <?php echo $CAT['catname'];?>：
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=007796133be6f08a0ea3a6843c453802&action=category&catid=%24catid&siteid=%24siteid&order=listorder+ASC&num=l6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<a href="<?php echo $r['url'];?>#content"><?php echo $r['catname'];?></a>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </p>
        <div class="locaCon">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8214fbb52ba9b72fe7767479772769aa&action=lists&order=id+DESC&catid=%24catid&thumb=1&num=16&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 16;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('order'=>'id DESC','catid'=>$catid,'thumb'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('order'=>'id DESC','catid'=>$catid,'thumb'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
			<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
            <div class="locaConChil">
                <a href="<?php echo $v['url'];?>" class="locaConChilA">
	                <img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>">
	                 	<?php echo $v['title'];?>
	                <br>
                    <span> <?php echo $v['price'];?></span>
                </a>
            </div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
		<div class="clear"></div>
        <div class="server_page">
           	<?php echo $pages;?>
        </div>
    </div>
    <!--内容 end-->

    </div>
</div>

<?php include template("content","footer"); ?>