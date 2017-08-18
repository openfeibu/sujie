<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!--底部-->

<div class="outW bottomAr">
    <img src="<?php echo CSS_PATH;?>/sujie/images/home_BotBanner.png" alt="">
    <!--3.29 -->
    <!--add-->
    <div class="outW clear">
     <div class="inW">

        <div class="pullAr">
            <div class="pull_left ">
                 <span class="pull_left1"></span>
                <h3>全程服务</h3>
               <p> 售前咨询，下单24小时内响应，关键环节100%提醒</p>
            </div>
            <div class="pull_left pull_left2">
                 <span class="pull_left2">
                 </span>
                <h3>品质保障</h3>
                <p>所有产品保证服务质量由专业人士进行操作</p>
            </div>
            <div class="pull_left ">
                 <span class="pull_left3">

                 </span>
                <h3>多元产品</h3>
                <p>提供TMT/文创等20多项领域服务支持</p>
            </div>
            <div class="pull_left ">

                 <span class="pull_left4">

                 </span>
                <h3>安全送到</h3>
                <p>办理完成后所有材料精心包装，快递直达</p>
            </div>

            <div class="pull_left ">

                 <span class="pull_left5">

                 </span>
                <h3>信息保密</h3>
                <p>所有客户信息严格保密，保护客户信息免遭外泄</p>
            </div>

        </div>

     </div>

</div>
    <!--add end-->

    <div class="outW bgWin">
        <div class="inW">
           <div class="bottomCon">
               <div class="img inb">
               <img src="<?php echo CSS_PATH;?>/sujie/images/logo2.png" alt="">
               </div>
               <ul>
					<li class="title">速捷财税</li>
					<li><a href="<?php echo $CATEGORYS['22']['url'];?>"><?php echo $CATEGORYS['22']['catname'];?></a></li>

          <li><a href="<?php echo $CATEGORYS['25']['url'];?>"><?php echo $CATEGORYS['25']['catname'];?></a></li>
               </ul>
               <ul>
                   	<li class="title">服务项目</li>
                   	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5cf79ec42579edabfcd7d7556a44eeb1&action=category&catid=161&num=5+siteid%3D&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'161','order'=>'listorder ASC','limit'=>'5',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

               </ul>
               <ul>
                   	<li class="title">公司注册</li>
                   	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d553bfdabd23feb64dc4e34e349e8d91&action=category&catid=13&num=5+siteid%3D&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'13','order'=>'listorder ASC','limit'=>'5',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               </ul>
               <ul>
                   	<li class="title">财税记账</li>
                   	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a156983c9f8809cf2fabc239af27f1de&action=category&catid=18&num=5+siteid%3D&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'18','order'=>'listorder ASC','limit'=>'5',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               </ul>
               <div class="inb contact">
                <div class="tel"><?php echo $CATEGORYS['27']['catname'];?></div>
                <div class="phone"><?php echo $CATEGORYS['27']['catname'];?></div>
                <div class="mail"><?php echo $CATEGORYS['28']['catname'];?></div>

               </div>
           </div>


           <div class="copy">
©mi.com 京ICP证110507号 京ICP备6442224444号
<br>
声明：本网站保留图片、资料、文字的解释权，转载、引用请于我们联系建议使用IE8.0以上浏览器，分辨率1366X768浏览 <br>
           </div>


        </div>
    </div>
</div>
<div id="floatTools" class="rides-cs" style="height:246px;">
  <div class="floatL">
    <a id="aFloatTools_Show" class="btnOpen" title="查看在线客服" style="top:20px;display:block" href="javascript:void(0);">展开</a>
    <a id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" style="top:20px;display:none" href="javascript:void(0);">收缩</a>
  </div>
  <div id="divFloatToolsView" class="floatR" style="display: none;height:237px;width: 140px;">
    <div class="cn">
      <h3 class="titZx">速捷在线客服</h3>
      <ul>
        <li><span>客服1</span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=595318872&amp;site=qq&amp;menu=yes"><img border="0" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAAAUCAYAAAAwaEt4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTA4ODJGQzhFNTQ2MTFFM0FBODFFOEM0RUVCNTZFNjQiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTA4ODJGQzdFNTQ2MTFFM0FBODFFOEM0RUVCNTZFNjQiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5kaWQ6Q0Y3MzdENUY0MkU1RTMxMUE0NThFRkVEREE3RTM3MzkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6Q0Y3MzdENUY0MkU1RTMxMUE0NThFRkVEREE3RTM3MzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz777RZ6AAAKgElEQVR42pRYaWxU1xX+7nsz9ozNYsaAdwzGNgHFdoCCDRVrs7CpC40qldDmBy3QVphIUVW1ahUVVZRKbVmVCNK0CiWp1GJQoNghYXFIlLKFYI9xAZuhLGMoXsbr7PNuz71v3psZzwyFKz3P87333XfPd79zvnMe45xDtBDwcCSi2R75g1AZklp0WsqWbogx/Xqqh8QQw2Na6kHlMQsqPN0WGI3RpXHkZmdCpT4LQzfZX2ExJvki4Qk3u7ozbvUOw6oqKYDhaY3RwB5jZOox/hikNSiPwZI/FWByROMpZ2sEikVRkKVoKMufiKmTxgpShMS4CUzP4KDW0z+AadOfAQ/Hb4XJvyrBmZkBZGToq0YiQMBPTAtotJKScnsaXeF0gPH0NkZ4ogE8bjcRw8h4wGkxLbrPVC3IY9N59J7Rb0Swie5D3kG4HvWgcOJY8b9miQcmwCwYDgCOEcEePzSawTVV0syWpaLndhcuX/gcrW1tZG0Ek2iRhcuWonzWfHjFljQdRPHGgUAgakh0F5xL2iaAwhLvDaB47ElzksEuHoXJGOPcODhuuroBJI8jF2extVmK88gZk4XQUA+sdL7WaJ8JDFdUaNYMhC2CAVxSRAlZYM8E2luu4Pg778J1sw1d3Q8RGvHBbtdw7ep5rHh5M76ycoXOIgJHk8dhbJJFDY+hII2LBwVxKDEkWmKMRYG71toq+2ZV14ziUfQVdHuqqRELly6DzW7H7c4OePr65P20ikrYbLaUrNKi+xRLJAEjqKVRlPLTSCjMJZ8zCUHf0AhOHjmCjpYvsHPXdnT8pxMnjzdi1x+2Y/Nrr+PIX99FXmUpSssrEZBxSI2dDN34/D40nz6LjpsdcN+/j6LiYixZvhRV1dXRWQytV1tx6fx5dHZ0wOFw4NmaaixatpzAt9Ez9+Dz+eRaxxoOY4IjlwzNMtXAgG9aRQWuXLiA0x82YU5tHT1rh4uAEeCI5/vfO4QNW+pRUFScBA4fdc/igZGdFBRU6lYJFI0CcAax5frla3Ce+xhjeT+KHEHsP/A3DHkGcP36pyibbMWVo+dw8eQJzJgxHV56XlEsCfHh7bf2k8Gd0uBy2ryTTl0AsGHTRgKgCk4C5S8H3pbznyWwBHgfNTbhFj3zo631+KChAS66N5pgwP49u5NOffuevTj1YSNmVVXjNq0/obZW9vsJlDnza3GmqQmff9KMtevWJ7mTwZb4lmCFkDVbhFFQUhAIa7DYAO9DF/qdF/GNNTMxZvg83tr2HaLrZ1hexXG3uQ9tWR70/bsd2TyCnmCYCKOaL2mRIHRifl0t1r/6Pbmbnt5ebPvVGzj6j8OSGUcPN8i5v9z2azhyHdKN/nzgANro2bZWJ368das0Yudvd0imbCKwXDc7sX/vbuzYs8+MOZ81n0U/gVZIjDj8/iF5mWASiwqKiyRIaWQwSSWV0RTiEQ1aRI8P1pCGqUoEL+fnoay3G/aOq8hzt+CVWdkYOnkM0wc8WJihooworw4NIpskSzECJl3ue/flfTUBYKh9bm6udKM+MsJDIAkGCKaIfhlIyafn1dXJ57rIjcQzn55pRpfbjRdWr9RXZ2b4jQYXhnYCUbR2ZysWLlmKH5DbCKYUFBVh/YYfYvb8OnkvwEt2JS6B4akYw6LyKvQkTNquWBQMdz/C8I0bWDRuHHIGPfjy4GmEyL2YYBNdA4845tqm4rLHg06nE+PmfpVA5fHhVLaKysoE+kpmUOvr7ZO/Iu7EH08hGWC0B/fcOHakAWXl5di/e0+CQT+r3yJ/v7ZyFTbW12PP73bI/0UcOU2uI+KLaH/apz+XT+vm07tyHA78v2YCEyKWBH1hOgBOwDBk0gbPHv8nrv79MFYXF6I04kOeVUWmfRICxCqvRcWY4nG4FVDw0bkvcMuejbV5JZgwZQaYP/ElLS0tqF1QZ0qms6VV9heW6AA4afyl1atMONtaW/Sk0+vDm0Y8oaFNZLy4EUw6ToIgwBAL5hDbTjU24gGxShh94mgDsWYZxZsquj8i40ojgSsC90yKQWxUrhqUyVNEgsGSYoxkqIYMok0GxRkeDOF0czNCQS8qVi6G47oVd653YMaCBZhYWEygTAGbMh2zrdn4/Ypv4jKp1nMuF2pLZ5iG1C2oRdOJRnxy5qzOHAq+F0h9hBuJuJNly8J06rtFwfIkzVtMatXWIhTqgpTYRctIdrOy4Pd64Xbfl3PjdaSMlNDIkITR04hVos9Gri0kWzShUkco3gi2SAmnd00rr3hyxsiAo4iETqPMN4KRwSE4r7fhhepyFC6ivGG4m/zfgYItr0ObXEgZLVUnQQ3h/46gbnkNrtz1oLubkqQ42MVmX/n+erx38BDePxgLhksoMVyxZrWMFRs2b8S+P+7CSTpxcenPOSjo1pPL5eLFVatIpU4QOD6pVHrs0WOXq6PDjBH2LLt8X7uzRTJHBGrhSkbAXf2tb+MdcikBSpIqaTy9KokBIgp8opKyMpJqFb/Z/gYcgbsYGXJj1to1mOAnmRpXgLBmpZoiCK/3EUm0B88//xxWFszGkL0Mfr+WkM8LFyqvrEArMeHiv87LuCL+F83r88Nus+Onv/g5jbdIpgg1EuN2Mszn88p8RMYjYtnHBJCRu5aRgaeaYv/b5HwfuU+NnN9ALBFuJdzoDMm4AEUmevRcquCLUcGXGTLl9Iz4Lt1w20poU8ODPmRZqOLUeuA+fxQOrwulcxYhp2weFHs+eCgINuLGg7tXcOfONfgGQ6hc/CruoAT94UySbD3t4nFlsugRG9+7cxflKm7Z95PX6mVuY9RjYmvnzjbjg6iEC9fZTMwRkt9PCja3ts6UZz33YAklhKG4QplEfJodnS9Y006AC1XKLypOrr5JWVm3C+tqZ4JSx0fUlWcC0+rx+r68+cBWOm06+oeHYbeEyE1a4W9vwqISFTfa3Bhg5KelVXBMnIj+OxeQE7lHhZcV5y65YKn8OsbM+y56FJJuymnMuofFEijDCJEFC+ZU1dTIU0w8Ocp1iB23aE4R5R56phpPfjZKWqM1E4uvteJchTPEz05VEjASFaX3NtbNf8YEJq4koOQs5INCcYPOHJoWRObYcejNGI9zrruwWB0IKdlg5G8DIwE8GNLQFVZxJxJGdskcMEeBrKVZmEpKNTNW/PLEolD8lpN868rMzXqJSwN163IpVjgW5MJIfpIMY/EoJI7x5AiipyLMTH+SmpUGQiQ2WqqSQAsOUTgdgWJTkK3a9XLKNh7lL1WBUV7DwkQ5yvw4AaGRelXWvCg+RshvGl4mAnZIgjmJ+iLR3DEijVVjtX5chiMCHo8rd2O2cl0+UyeoehEPnvRNIqIp5ucIwSBmFq7i84Jm1m4wKzTqp7REob1rQx4wsi0c/UxijQemOMfBPJPCcF5pg9VqhaLGPn+RvyHAuEQ9VcsIizlUSiiKDpbcDy3AQtCTGvZUn+m0NCcrTjzdqevLMTxx49GPMaTCVi2Amoqp5Ckwa38W+9YBz0BYs3UNDIOJL3gsekLRS2XpX2ucRLy7GHcsjSVPYcITAZPmo59ZHKdrqviKxxRMHp8FCxmict6doSpT/ifAACWt+G5tnASCAAAAAElFTkSuQmCC" alt="点击这里给我发消息" title="点击这里给我发消息"></a> </li>
       <li><span>客服2</span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=120691996&amp;site=qq&amp;menu=yes"><img border="0" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAAAUCAYAAAAwaEt4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTA4ODJGQzhFNTQ2MTFFM0FBODFFOEM0RUVCNTZFNjQiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTA4ODJGQzdFNTQ2MTFFM0FBODFFOEM0RUVCNTZFNjQiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5kaWQ6Q0Y3MzdENUY0MkU1RTMxMUE0NThFRkVEREE3RTM3MzkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6Q0Y3MzdENUY0MkU1RTMxMUE0NThFRkVEREE3RTM3MzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz777RZ6AAAKgElEQVR42pRYaWxU1xX+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" alt="点击这里给我发消息" title="点击这里给我发消息"></a> </li>
       <li><span>客服3</span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=1693044071&amp;site=qq&amp;menu=yes"><img border="0" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEYAAAAUCAYAAAAwaEt4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OTA4ODJGQzhFNTQ2MTFFM0FBODFFOEM0RUVCNTZFNjQiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OTA4ODJGQzdFNTQ2MTFFM0FBODFFOEM0RUVCNTZFNjQiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5kaWQ6Q0Y3MzdENUY0MkU1RTMxMUE0NThFRkVEREE3RTM3MzkiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6Q0Y3MzdENUY0MkU1RTMxMUE0NThFRkVEREE3RTM3MzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz777RZ6AAAKgElEQVR42pRYaWxU1xX+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" alt="点击这里给我发消息" title="点击这里给我发消息"></a> </li>
      <li></li>

      </ul>
    </div>
  </div>
</div>

<script>
  $(function(){
    $("#aFloatTools_Show").click(function(){
      $('#divFloatToolsView').animate({width:'show',opacity:'show'},100,function(){$('#divFloatToolsView').show();});
      $('#aFloatTools_Show').hide();
      $('#aFloatTools_Hide').show();
    });
    $("#aFloatTools_Hide").click(function(){
      $('#divFloatToolsView').animate({width:'hide', opacity:'hide'},100,function(){$('#divFloatToolsView').hide();});
      $('#aFloatTools_Show').show();
      $('#aFloatTools_Hide').hide();
    });
  });
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?e1d328f07fc777230507907fd9c76d1b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!--底部 end-->
</body>
</html>