<?php /* Smarty version Smarty-3.1.16, created on 2014-10-10 15:57:14
         compiled from "tpl\admin\category.html" */ ?>
<?php /*%%SmartyHeaderCode:181275437f59caae219-10741514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a7f79a350cc4b34b01bf873346565c65d20b4be' => 
    array (
      0 => 'tpl\\admin\\category.html',
      1 => 1412956633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181275437f59caae219-10741514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5437f59cb0fbd4_28582285',
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5437f59cb0fbd4_28582285')) {function content_5437f59cb0fbd4_28582285($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/bread.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main">
	<div class="page-header">
	  <h3>类别列表<small> Category list</small></h3>
	</div>
	<div class="table-responsive">
		<table class="category table table-hover">
		  <tr class="info">
		  <th><input type="checkbox"></th>
		  	<th>序号</th>
		  	<th>类别名称</th>
		  	<th>别名</th>
		  	<th>查看</th>
		  	<th>资源</th>
		  	<th>操作</th>
		  </tr>
		  <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
		  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
		  <tr>
		  	<td><input type="checkbox"></td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['value']->value['cate_name'];?>
</td>
		  	<td><?php echo $_smarty_tpl->tpl_vars['value']->value['alias'];?>
</td>
		  	<td><a href="">查看</a></td>
		  	<td><a href="">0</a></td>
		  	<td>
			<input type="image" src="img/images/icn_edit.png" title="Edit" onclick="window.location.href='admin.php?controller=sys&method=add&cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
'">&nbsp;
			<input type="image" src="img/images/icn_trash.png" title="Trash" onclick="window.location.href='admin.php?controller=sys&method=catedel&cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
'">
			</td>
		  </tr>
		  <?php } ?>
		<?php } else { ?>
			<tr>
				<td  colspan=7>
					暂无新闻
				</td>
			</tr>
		<?php }?>
		</table>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<form action="" class="form-horizontal" role="form">
					<div class="form-group">
					    <label for="inputEmail3" class="col-sm-3 control-label">类别名称：</label>
					    <div class="col-sm-9">
					     <input type="text" class="form-control" name="cate_name" placeholder="类别名称">
					    </div>
					</div>
					<div class="form-group">
						<label for="alias" class="col-sm-3 control-label">类别别名：</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="alias" placeholder="类别别名">
						</div>
					</div>

					
				</form>
			</div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
