<?php /* Smarty version Smarty-3.1.16, created on 2014-10-09 14:12:51
         compiled from "tpl\admin\newslist.html" */ ?>
<?php /*%%SmartyHeaderCode:15668539d93e66b70b9-78548279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79b02dc9ee4a4edeacd766122de7f48dbfba6d8a' => 
    array (
      0 => 'tpl\\admin\\newslist.html',
      1 => 1412863968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15668539d93e66b70b9-78548279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_539d93e688eb01_42141355',
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d93e688eb01_42141355')) {function content_539d93e688eb01_42141355($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/bread.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="main" class="column">
	
	<div class="module width_full">
	<div class="page-header">
	  <h3>新闻列表<small> News list</small></h3>
	</div>
	<div class="tab_container">
		<div class="table-responsive">
			<table class="table table-hover" cellspacing="0" style="margin:0"> 
				<thead> 
					<tr>  
		    				<th>序号</th>
		    				<th>新闻标题</th>
		    				<th>作者</th>
		    				<th>发布时间</th>
		    				<th>操作</th>
					</tr> 
				</thead>
				<tbody>
				<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
					<tr>
		    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td> 
		    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td> 
		    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</td> 
		    				<td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['value']->value['dateline']);?>
</td>
		    				<td>
		    				<input type="image" src="img/images/icn_edit.png" title="Edit" onclick="window.location.href='admin.php?controller=admin&method=newsadd&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'">
		    				&nbsp;&nbsp;
		    				<input type="image" src="img/images/icn_trash.png" title="Trash" onclick="window.location.href='admin.php?controller=admin&method=newsdel&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'">
		    				</td>
					</tr>
				<?php } ?>
				<?php } else { ?>
					<tr>
						<td  colspan=4>
							暂无新闻
						</td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</div><!-- end of #tab1 -->
		
	</div><!-- end of .tab_container -->
	
	</div><!-- end of content manager article -->
	<div class="spacer"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
