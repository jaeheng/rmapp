<?php /* Smarty version Smarty-3.1.16, created on 2014-10-09 15:17:03
         compiled from "tpl\admin\editpw.html" */ ?>
<?php /*%%SmartyHeaderCode:2745454369f4a1c8286-47497518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09d12537601eb64b2182388f6e1809ccb0724aeb' => 
    array (
      0 => 'tpl\\admin\\editpw.html',
      1 => 1412867821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2745454369f4a1c8286-47497518',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54369f4a215ea3_31412195',
  'variables' => 
  array (
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54369f4a215ea3_31412195')) {function content_54369f4a215ea3_31412195($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/bread.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main">
	<form class="form-horizontal" role="form" method="post" action="admin.php?controller=admin&method=editpw">
		<div class="form-group">
			<label class="col-sm-1 control-label">用户名:</label>
			<div class="col-sm-3">
				<input class="form-control" name="username" value="<?php echo $_smarty_tpl->tpl_vars['auth']->value['username'];?>
" readonly>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-1 control-label">旧密码:</label>
			<div class="col-sm-3">
				<input type="password" class="form-control" id="oldpw" name="oldpw" placeholder="输入旧密码"></div>
		</div>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-1 control-label">新密码:</label>
			<div class="col-sm-3">
				<input type="password" class="form-control" id="newpw" name="newpw" placeholder="输入新密码"></div>
		</div>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-1 control-label">确认新密码:</label>
			<div class="col-sm-3">
				<input type="password" class="form-control" id="cfnewpw" name="cfnewpw" placeholder="确认新密码"></div>
		</div>
		<div class="form-group">
			<div class="col-sm-4">
				<!-- <input type="hidden" name="uid" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['auth']->value['uid'])===null||$tmp==='' ? '' : $tmp);?>
"> -->
				<input type="submit" name="submit" value="确定修改" class="form-control btn btn-primary"></div>
		</div>

	</form>
</div><?php }} ?>
