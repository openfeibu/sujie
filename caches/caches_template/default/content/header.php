<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
  <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
  <meta name="description" content="<?php echo $SEO['description'];?>">
  <meta name="baidu-site-verification" content="TMOA0o5RF6" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>/sujie/styles/css.css?v=<?php echo time();?>">
    <script src="<?php echo CSS_PATH;?>/sujie/js/jquery-1.7.2.min.js"></script>
    <script src="<?php echo CSS_PATH;?>/sujie/js/main.js"></script>
</head>
<body>
<!--顶部-->
<div class="outW bg1">
    <div class="inW topAr">
        <span class="txt">
        Hi，欢迎来到速捷财税！
        </span>
        <span class="tel">
            联系我们：<?php echo $CATEGORYS['27']['catname'];?>
        </span>
    </div>
</div>
<!--顶部 end-->

<!--搜索-->
<div class="outW">
    <div class="inW searchAr">
        <!--logo-->
      <div class="logo inb">
          <a href="<?php echo siteurl($siteid);?>"> <img src="<?php echo CSS_PATH;?>/sujie/images/logo.png" alt=""></a>
      </div>
        <!--logo end-->
        <div class="rightDiv inb">
            <div class="search inb">
              <form action="<?php echo APP_PATH;?>index.php" method="get" target="_target">
          <input type="hidden" name="m" value="search"/>
          <input type="hidden" name="c" value="index"/>
          <input type="hidden" name="a" value="init"/>
          <input type="hidden" name="typeid" value="54" id="typeid"/>
          <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                    <div class="inputTxt">
                        <input class="text" type="text" placeholder="请输入你查找的内容" name="q" id="q">
                        <input class="btn" type="submit" value="">
                    </div>
                </form>
            </div>
            <div class="classify ">
                <div class="index-nav dib">
                      <div id="navlist" class="list">
                        <ul id="navfouce" class="m0 clearfix">

                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                          <?php $n++;}unset($n); ?>
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                      </div>
                      <div id="navbox" style="height: 0px; opacity: 0; overflow: hidden;width:700px" class="box">
                        <?php $i=0?>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r1) { ?>
                            <?php $i =1 ?>
                            <div <?php if($i == 1) { ?>style="display:none"<?php } else { ?>style=""<?php } ?> class="cont">
                                <ul class="index-sublist">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=417f33e93ea02f43679da314cc76ac2f&action=category&catid=%24r1%5B%27catid%27%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r1['catid'],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r2) { ?>
                                <li class="clearfix"><h3 class="mcate-item-hd"><a href="<?php echo $r2['url'];?>" ><?php echo $r2['catname'];?></a></h3>
                                  <p class="mcate-item-bd">
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f437d0916c012a4463b413315427de7c&action=category&catid=%24r2%5B%27catid%27%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r2['catid'],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $r3) { ?>
                                    <a href="<?php echo $r3['url'];?>" class="recom"><?php echo $r3['catname'];?></a>
                                    <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                  </p>
                                </li>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                      </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--搜索 end-->

<!-- 浮动搜索 -->
<div id="searchHeader" class="search-box posf" style=" ">
    <div class="search-heater">
        <div class="container tac clearfix">
            <h1 class="pull-left">
                  <a href="<?php echo siteurl($siteid);?>"> <img src="<?php echo CSS_PATH;?>/sujie/images/logo.png" alt=""></a>
            </h1>
            <div class="search inb">
                <form action="<?php echo APP_PATH;?>index.php" method="get" target="_target">
                    <input type="hidden" name="m" value="search"/>
                    <input type="hidden" name="c" value="index"/>
                    <input type="hidden" name="a" value="init"/>
                    <input type="hidden" name="typeid" value="54" id="typeid"/>
                    <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                    <div class="inputTxt">
                        <input class="text" type="text" placeholder="请输入你查找的内容" name="q" id="q">
                        <input class="btn" type="submit" value="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
