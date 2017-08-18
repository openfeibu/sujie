<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header');
?>
<div class="subnav" style="display:none;">
    <div class="content-menu ib-a blue line-x">
    <a href="javascript:window.top.art.dialog({id:'add',iframe:'?m=admin&amp;c=site&amp;a=copy', title:'复制站点', width:'700', height:'500', lock:true}, function(){var d = window.top.art.dialog({id:'add'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'add'}).close()});void(0);" class="add fb"><em>复制站点</em></a>&#12288; </div>
</div>
<div class="pad_10">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
		<tr>
		<th width="80">Siteid</th>
		<th><?php echo L('site_name')?></th>
		<th><?php echo L('site_dirname')?></th>
		<th><?php echo L('site_domain')?></th>
		<th align="center"><?php echo L('godaddy')?></th>
		<th width="150"><?php echo L('operations_manage')?></th>
		</tr>
        </thead>
        <tbody>
<?php 
if(is_array($list)):
	foreach($list as $v):
?>
<tr>
<td width="80" align="center"><?php echo $v['siteid']?></td>
<td align="center"><?php echo $v['name']?></td>
<td align="center"><?php echo $v['dirname']?></td>
<td align="center"><?php echo $v['domain']?></td>
<td align="center"><?php if ($v['siteid']!=1){?><?php echo pc_base::load_config('system', 'html_root')?>/<?php echo $v['dirname'];} else{echo '/';}?></td>
<td align="center"><a href="javascript:edit(<?php echo $v['siteid']?>, '<?php echo  new_addslashes(new_html_special_chars($v['name']))?>')"><?php echo L('edit')?></a> | 
<?php if($v['siteid']!=1) { ?><a href="?m=admin&c=site&a=del&siteid=<?php echo $v['siteid']?>" onclick="return confirm('<?php echo new_addslashes(new_html_special_chars(L('confirm', array('message'=>$v['name']))))?>')"><?php echo L('delete')?></a><?php } else { ?><font color="#cccccc"><?php echo L('delete')?></font><?php } ?></td>
</tr>
<?php 
	endforeach;
endif;
?>
</tbody>
</table>
</div>
</div>
<div id="pages"><?php echo $pages?></div>
<script type="text/javascript">
<!--
function edit(id, name) {
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:'<?php echo L('edit_site')?>《'+name+'》',id:'edit',iframe:'?m=admin&c=site&a=edit&siteid='+id,width:'700',height:'500'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;d.document.getElementById('dosubmit').click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
//-->
</script>
</body>
</html>