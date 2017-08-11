<?php /* Smarty version Smarty-3.1.16, created on 2014-10-05 04:40:48
         compiled from "tpl\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:8914539827e3a95c38-66862379%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c80e3fb42803f2b44cb2faa36ed4473503b114f' => 
    array (
      0 => 'tpl\\admin\\login.html',
      1 => 1412484029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8914539827e3a95c38-66862379',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_539827e3adeff3_95667763',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539827e3adeff3_95667763')) {function content_539827e3adeff3_95667763($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container login">
	<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<p align="center">请使用您的用户名和密码在下面登录.</p>
		<form class="form-horizontal" method="post" action="admin.php?controller=admin&method=login">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
		    <div class="col-sm-9">
		      <input type="text" name="username" class="form-control" placeholder="用户名">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
		    <div class="col-sm-9">
		      <input type="password" name="password" class="form-control" placeholder="密码">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <input type="submit" class="btn btn-default" name="submit" value="登陆">
		    </div>
		  </div>
		</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
