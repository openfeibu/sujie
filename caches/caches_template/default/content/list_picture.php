<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!--内容-->
<div class="outW box">

    <div class="inW exCon">

	    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8214fbb52ba9b72fe7767479772769aa&action=lists&order=id+DESC&catid=%24catid&thumb=1&num=16&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 16;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('order'=>'id DESC','catid'=>$catid,'thumb'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('order'=>'id DESC','catid'=>$catid,'thumb'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
		<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
        <div class="exconChil">
            <a href="<?php echo $v['url'];?>"><img  src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>"></a>
            <div class="chiltxt">
                <a class="chiltxtA1" href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
                <a  class="chiltxtA2" href="<?php echo $v['url'];?>"><?php echo $v['description'];?></a>
            </div>
        </div>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       <div class="inW cen">


        <div class="server_page">
            <?php echo $pages;?>
        </div>

       </div>
    </div>

</div>
<!--内容 end-->

<?php include template("content","footer"); ?>