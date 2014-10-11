<?php /* Smarty version Smarty-3.1.16, created on 2014-10-10 15:05:58
         compiled from "tpl\admin\bread.html" */ ?>
<?php /*%%SmartyHeaderCode:24569543697e32e7a67-51128840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a479ced154102b46eb41b9667430754c9910691' => 
    array (
      0 => 'tpl\\admin\\bread.html',
      1 => 1412953554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24569543697e32e7a67-51128840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_543697e32e9f55_42194886',
  'variables' => 
  array (
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543697e32e9f55_42194886')) {function content_543697e32e9f55_42194886($_smarty_tpl) {?><ol class="breadcrumb">
	<li>欢迎您：<a href=""><?php echo $_smarty_tpl->tpl_vars['auth']->value['username'];?>
</a></li>
	<li><a href="admin.php?controller=admin">后台管理中心</a></li>
	<?php if (empty($_GET['method'])) {?>
	<li class="active">新闻管理列表</li>
	<?php } elseif ($_GET['method']=='newsadd') {?>
	<li class="active">文章发布</li>
	<?php } elseif ($_GET['method']=='newslist') {?>
	<li class="active">管理新闻</li>
	<?php } elseif ($_GET['method']=='add') {?>
	<li class="active">添加微博</li>
	<?php } elseif ($_GET['method']=='weiboList') {?>
	<li class="active">管理微博资源</li>
	<?php } elseif ($_GET['method']=='weiboRecList') {?>
	<li class="active">微博回收站</li>
	<?php } elseif ($_GET['method']=='editpw') {?>
	<li class="active">修改密码</li>
	<?php } elseif ($_GET['method']=='category') {?>
	<li class="active">类别列表</li>
	<?php }?>
</ol><?php }} ?>
