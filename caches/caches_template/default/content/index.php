<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>


<!--banner-->
<div class="outW banner">
    <div class="bannerDiv">
        <ul>
	        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=36dac3d615b413a01af715494c44f454&action=category&catid=29&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'29','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li><a href="javascript:;"><img src="<?php echo $r['image'];?>" alt="<?php echo $r['catname'];?>"></a></li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
    <ol>
	    <?php $bool = true;?>
	    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=36dac3d615b413a01af715494c44f454&action=category&catid=29&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'29','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<li <?php if($bool) { ?>class="liAdd"<?php } ?>><a href="#"></a></li>
		<?php $bool = false;?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ol>
</div>
<!--banner end-->



<!--服务套餐-->
<div class="outW bg1 serverAr">
    <div class="inW server">
         <h1 class="Title">服务套餐</h1>
        <div class="line"></div>
        <!--content-->

        <div class="serboxAll">
            <div class="serbox serbox1 wi470">

                <div class="smaBig left-180">
                    <div class="small small1">
                        <h3>公司注册
                            <br>
                        <span>让公司没有难办的事</span>
                        </h3>
                        <ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=859f12342b79f4bb083f26c0a11ec5fd&action=lists&order=id+DESC&catid=43&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'43','limit'=>'5',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                            <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?>&nbsp;></a></li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


                        </ul>
                    </div>
                    <div class="big big1">
                        <span></span>
                        <h3>公司注册
                            <br>
                        <span>让公司没有难办的事</span>
                        </h3>
                        <ul class="bigUl">
                            <li class="li1">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c18981f361bec70d6886b64347dabcbb&action=lists&order=id+DESC&catid=43&moreinfo=1&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'43','moreinfo'=>'1','limit'=>'1',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
					
								<div>
									<h3><?php echo $r['title'];?></h3>
									<br>
									<dl><?php echo str_cut(strip_tags($v[description]),50,"...");?></dl>
									<br>
									<dl>价格：￥<span class="priCol"><?php echo $r['price'];?></span></dl>

								</div>
								<a href="<?php echo $r['url'];?>" >查看详情</a>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </li>


							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1fa5c46d585143a06714d21173118794&action=lists&order=id+DESC&catid=43&moreinfo=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'43','moreinfo'=>'1','limit'=>'5',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
							<li>
                                <h3><?php echo $v['title'];?></h3>
                                <br>
                                <span><?php echo str_cut(strip_tags($v[description]),20,"...");?>￥<?php echo $v['price'];?></span>
                                <br>
                                <a href="<?php echo $v['url'];?>">查看详情</a>
                            </li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                           
                            <li style="visibility: hidden;">
                                <h3></h3>
                                <br>
                                <span></span>
                                <br>
                                <a href="#"></a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="serbox serbox1">

                <div class="smaBig">
                    <div class="small small1">
                        <h3>公司变更

                            <br>
                        <span>为您的合法权益保驾护航</span>
                        </h3>
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8c7b18e8f33431f2d60eddf54cb5d658&action=lists&order=id+DESC&catid=44&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'44','limit'=>'5',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                            <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?>&nbsp;></a></li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                    <div class="big big1 big2">
                        <span></span>
                        <h3>公司变更
                            <br>
                        <span>让公司没有难办的事</span>
                        </h3>
                        <ul class="bigUl">
                            <li class="li1">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=58c76e55394d3bc24864df1b5311ef3d&action=lists&order=id+DESC&catid=44&moreinfo=1&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'44','moreinfo'=>'1','limit'=>'1',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
					
								<div>
									<h3><?php echo $r['title'];?></h3>
									<br>
									<dl><?php echo str_cut(strip_tags($v[description]),50,"...");?></dl>
									<br>
									<dl>价格：￥<span class="priCol"><?php echo $r['price'];?></span></dl>

								</div>
								<a href="<?php echo $r['url'];?>" >查看详情</a>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </li>



                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fe056445e3cf2fd3f50309b5e20d6129&action=lists&order=id+DESC&catid=44&moreinfo=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'44','moreinfo'=>'1','limit'=>'5',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
							<li>
                                <h3><?php echo $v['title'];?></h3>
                                <br>
                                <span><?php echo str_cut(strip_tags($v[description]),20,"...");?>￥<?php echo $v['price'];?></span>
                                <br>
                                <a href="<?php echo $v['url'];?>">查看详情</a>
                            </li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="serbox serbox1">

                <div class="smaBig">
                    <div class="small small1">
                        <h3>公司注销
                            <br>
                        <span>记账纳税不再有问题</span>
                        </h3>
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3cf911de1e46b0aff28eecf4b9d8f744&action=lists&order=id+DESC&catid=45&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'45','limit'=>'5',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                            <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?>&nbsp;></a></li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                    <div class="big big1 big3">
                        <span></span>
                        <h3>公司注销
                            <br>
                        <span>让公司没有难办的事</span>
                        </h3>
                        <ul class="bigUl">
                            <li class="li1">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b6d2fdf83ad17d5431f4eda61291eb9c&action=lists&order=id+DESC&catid=45&moreinfo=1&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'45','moreinfo'=>'1','limit'=>'1',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
					
								<div>
									<h3><?php echo $r['title'];?></h3>
									<br>
									<dl><?php echo str_cut(strip_tags($v[description]),50,"...");?></dl>
									<br>
									<dl>价格：￥<span class="priCol"><?php echo $r['price'];?></span></dl>

								</div>
								<a href="<?php echo $r['url'];?>" >查看详情</a>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </li>



							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e23517e20f107cd3ec4d2a1ce227b60c&action=lists&order=id+DESC&catid=45&moreinfo=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'45','moreinfo'=>'1','limit'=>'5',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
							<li>
                                <h3><?php echo $v['title'];?></h3>
                                <br>
                                <span><?php echo str_cut(strip_tags($v[description]),20,"...");?>￥<?php echo $v['price'];?></span>
                                <br>
                                <a href="<?php echo $v['url'];?>">查看详情</a>
                            </li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="serbox serbox1">

                <div class="smaBig">
                    <div class="small small1">
                        <h3>代理记账
                            <br>
                        <span>轻松应对各类资质审批</span>
                        </h3>
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b66b2596737005f492534c7b8cbdb331&action=lists&order=id+DESC&catid=19&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'19','limit'=>'5',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                            <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?>&nbsp;></a></li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                    <div class="big big1 big">
                        <span></span>
                        <h3>代理记账
                            <br>
                        <span>让公司没有难办的事</span>
                        </h3>
                        <ul class="bigUl">
                            <li class="li1">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=13b55116f5d9a68af64140a887f6fea3&action=lists&order=id+DESC&catid=19&moreinfo=1&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'19','moreinfo'=>'1','limit'=>'1',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
					
								<div>
									<h3><?php echo $r['title'];?></h3>
									<br>
									<dl><?php echo str_cut(strip_tags($v[description]),50,"...");?></dl>
									<br>
									<dl>价格：￥<span class="priCol"><?php echo $r['price'];?></span></dl>

								</div>
								<a href="<?php echo $r['url'];?>" >查看详情</a>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </li>

                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a69d984a2abf562b05c443d5569905c6&action=lists&order=id+DESC&catid=19&moreinfo=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'19','moreinfo'=>'1','limit'=>'5',));}?>
							<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
							<li>
                                <h3><?php echo $v['title'];?></h3>
                                <br>
                                <span><?php echo str_cut(strip_tags($v[description]),20,"...");?>￥<?php echo $v['price'];?></span>
                                <br>
                                <a href="<?php echo $v['url'];?>">查看详情</a>
                            </li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                             <li style='border: none;'>
                                <h3></h3>
                                <br>
                                <span></span>
                                <br>
                                <a href="#"></a>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--content end-->
    </div>
</div>
<!--服务套餐 end-->

<!--服务项目-->
<!-- <div class="outW bg1 serverAr">
    <div class="inW server">
         <h1 class="Title">服务业务</h1>
        <div class="line"></div>
        <p class="eng">
            No one lights a lamp in order to hide it behind the door: <br>
            the purpose of light is to create more light, to open people’s eyes, <br>
            to reveal the marvels around.
        </p>
        <div class="wordAr">
            <a href="<?php echo $CATEGORYS['9']['url'];?>">
            <div class="word1 in1">
                <h2><?php echo $CATEGORYS['9']['catname'];?></h2>
                <?php $i=0?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=47bc0437564c89a30fc799743480694e&action=category&catid=9&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<?php $i++; ?>
				<p><?php echo $i;?>.<?php echo $r['catname'];?></p>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            </a>
            <a href="<?php echo $CATEGORYS['13']['url'];?>">
            <div class="word1 in2">
                <h2><?php echo $CATEGORYS['13']['catname'];?></h2>
                <?php $i=0?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=26fbac6b6280d1fe00d3d7962275efcb&action=category&catid=13&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'13','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<?php $i++; ?>
				<p><?php echo $i;?>.<?php echo $r['catname'];?></p>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            </a>
            <a href="<?php echo $CATEGORYS['18']['url'];?>">
            <div class="word1 in3">
                <h2><?php echo $CATEGORYS['18']['catname'];?></h2>
                <?php $i=0?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e7a110b313f13f5eb1c43051a70bede6&action=category&catid=18&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'18','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<?php $i++; ?>
				<p><?php echo $i;?>.<?php echo $r['catname'];?></p>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            </a>
            <a href="<?php echo $CATEGORYS['22']['url'];?>">
            <div class="word1 in4">
                <h2><?php echo $CATEGORYS['22']['catname'];?></h2>
                <?php $i=0?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=673f48f7c34eff37261219d1226421f8&action=lists&order=id+DESC&catid=23&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'23','limit'=>'3',));}?>
				<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
				<?php $i++; ?>
	            <p><?php echo $i;?>.<?php echo $r['catname'];?></p>
	            <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
       -->      </a>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--服务项目 end-->

<!--成功案例-->
<div class="outW">
    <div class="inW success">
        <h1 class="Title">成功案例</h1>
        <div class="line"></div>
        <p class="eng">

        </p>

        <div class="successImg">
	        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=49b6c586d72c4a939b74ae190be585f5&action=lists&order=id+DESC&catid=22&thumb=1&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('order'=>'id DESC','catid'=>'22','thumb'=>'1','limit'=>'3',));}?>
			<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
            <div class="inb Indivil">
                <img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>">
                <div class="shade">
                    <a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

        </div>

        <a href="<?php echo $CATEGORYS['22']['url'];?>" class="clickMore2 inb">点击查看更多</a>
    </div>
</div>
<!-- 成功案例 end-->

<!--最新动态-->
<div class="outW bg1 serverAr">
    <div class="inW server">
        <h1 class="Title">最新动态</h1>
        <div class="line"></div>
        <p class="eng">
            No one lights a lamp in order to hide it behind the door: <br>
            the purpose of light is to create more light, to open people’s eyes, <br>
            to reveal the marvels around.
        </p>
        <div class="news">
	        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=faef3ca9de372131793b13ad544522a2&action=position&posid=2&order=id+DESC&catid=23&thumb=1&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'id DESC','catid'=>'23','thumb'=>'1','limit'=>'4',));}?>
			<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
			<div class="word2">
                <a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="<?php echo $v['title'];?>">
                <div class="dateDiv"><?php echo date('Y-m-d H:i:s',$v[inputtime]);?>
                </div></a>
                <div class="txt">
                    <?php echo $v['title'];?>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            <a href="<?php echo $CATEGORYS['23']['url'];?>" class="clickMore inb clickMore2">点击查看更多</a>
        </div>
    </div>
</div>
<!--最新动态 end-->

<!--合作伙伴-->
<div class="outW">
    <div class="inW success">
        <h1 class="Title">合作伙伴</h1>
        <div class="line"></div>
        <div class="otherLogo">
            <ul>
	            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=7271303facbb469dd6c184927587f656&action=type_list&siteid=1&linktype=1&order=listorder+DESC&page=%24page&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$link_total = $link_tag->count(array('siteid'=>'1','linktype'=>'1','order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'type_list',));$pages = pages($link_total, $page, $pagesize, $urlrule);$data = $link_tag->type_list(array('siteid'=>'1','linktype'=>'1','order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'type_list',));}?>
				<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
				<li><a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['name'];?>" ><img src="<?php echo $r['logo'];?>" alt="<?php echo $r['name'];?>"></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


            </ul>
        </div>
    </div>
<!--合作伙伴 end-->
</div>
<?php include template("content","footer"); ?>