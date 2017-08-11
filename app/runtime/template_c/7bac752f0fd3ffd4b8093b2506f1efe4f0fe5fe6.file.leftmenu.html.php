<?php /* Smarty version Smarty-3.1.16, created on 2014-10-10 15:05:00
         compiled from "tpl\admin\leftmenu.html" */ ?>
<?php /*%%SmartyHeaderCode:26293539d921c295dd0-60924783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bac752f0fd3ffd4b8093b2506f1efe4f0fe5fe6' => 
    array (
      0 => 'tpl\\admin\\leftmenu.html',
      1 => 1412953152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26293539d921c295dd0-60924783',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_539d921c29b383_34050383',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d921c29b383_34050383')) {function content_539d921c29b383_34050383($_smarty_tpl) {?><aside id="sidebar" class="column">
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">新闻管理</div>
  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item"> <a href="admin.php?controller=admin&method=newsadd"><i class="glyphicon glyphicon-plus"></i> 添加新闻</a></li>
    <li class="list-group-item"><a href="admin.php?controller=admin&method=newslist"><i class="glyphicon glyphicon-th-list"></i> 管理新闻</a></li>
  </ul>
</div>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">微博资源管理</div>
  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item"> <a href="admin.php?controller=weibo&method=add"><i class="glyphicon glyphicon-plus"></i> 添加微博</a></li>
    <li class="list-group-item"><a href="admin.php?controller=weibo&method=weiboList"><i class="glyphicon glyphicon-th-list"></i> 管理微博</a></li>
    <li class="list-group-item"> <a href="admin.php?controller=weibo&method=weiboRecList"><i class="glyphicon glyphicon-gift"></i> 回收站</a></li>
  </ul>
</div>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">系统操作</div>
  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item"> <a href="admin.php?controller=sys&method=category"><i class="glyphicon glyphicon-tasks"></i> 类别列表</a></li>
    <li class="list-group-item"><a href="admin.php?controller=weibo&method=weiboList"><i class="glyphicon glyphicon-th-list"></i> 分类列表</a></li>
    <li class="list-group-item"> <a href="admin.php?controller=weibo&method=weiboRecList"><i class="glyphicon glyphicon-globe"></i> 地区</a></li>
  </ul>
</div>
</aside><!-- end of sidebar -->
<?php }} ?>
