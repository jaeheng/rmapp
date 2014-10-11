<?php /* Smarty version Smarty-3.1.16, created on 2014-10-09 14:18:30
         compiled from "tpl\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:5432539821a53b79f9-59459752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960134157fa259e4e66125a4a4ef37297a26b6d9' => 
    array (
      0 => 'tpl\\admin\\index.html',
      1 => 1412864291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5432539821a53b79f9-59459752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_539821a5403be9_85232505',
  'variables' => 
  array (
    'newsnum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539821a5403be9_85232505')) {function content_539821a5403be9_85232505($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/bread.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<ul class="list-group" id="main">
	  <li class="list-group-item active">网站统计信息</li>
	  <li class="list-group-item">本站共有新闻<?php echo $_smarty_tpl->tpl_vars['newsnum']->value;?>
篇.</li>
	  <li class="list-group-item">系统类型及版本号：<?php echo php_uname('s');?>
 <?php echo php_uname('r');?>
</li>
	  <li class="list-group-item">PHP运行方式：<?php echo php_sapi_name();?>
</li>
	  <li class="list-group-item">数据库表前缀：<?php echo @constant('DB_PREFIX');?>
</li>
	  <li class="list-group-item">PHP版本：<?php echo @constant('PHP_VERSION');?>
</li>
	  <li class="list-group-item">Smarty版本：<?php echo 'Smarty-3.1.16';?>
</li>
	  <li class="list-group-item">服务器语言：<?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];?>
</li>
	</ul>
</body>

</html><?php }} ?>
