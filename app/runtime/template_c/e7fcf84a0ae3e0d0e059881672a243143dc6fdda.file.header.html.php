<?php /* Smarty version Smarty-3.1.16, created on 2014-10-10 08:16:07
         compiled from "tpl\admin\header.html" */ ?>
<?php /*%%SmartyHeaderCode:11585542a52189176f0-99350169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7fcf84a0ae3e0d0e059881672a243143dc6fdda' => 
    array (
      0 => 'tpl\\admin\\header.html',
      1 => 1412928790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11585542a52189176f0-99350169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_542a5218919dd5_83444648',
  'variables' => 
  array (
    'login_' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a5218919dd5_83444648')) {function content_542a5218919dd5_83444648($_smarty_tpl) {?><!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>后台管理系统</title>
  <!-- <link rel="stylesheet" href="img/css/layout.css" type="text/css" media="screen" />
  -->
  <!-- Bootstrap -->
  <link href="img/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="img/css/style.css">
  <!--[if lt IE 9]>
  <script src="img/js/html5shiv.min.js"></script>
  <script src="img/js/respond.min.js"></script>
  <![endif]-->
  <script src="img/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="img/js/hideshow.js" type="text/javascript"></script>
  <script src="img/js/jquery.tablesorter.min.js" type="text/javascript"></script>
  <!-- <script type="text/javascript" src="img/js/jquery.equalHeight.js"></script>
-->
<script src="img/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() 
      { 
          $(".tablesorter").tablesorter(); 
     } 
  );
  $(document).ready(function() {

  //When page loads...
  $(".tab_content").hide(); //Hide all content
  $("ul.tabs li:first").addClass("active").show(); //Activate first tab
  $(".tab_content:first").show(); //Show first tab content

  //On Click Event
  $("ul.tabs li").click(function() {

    $("ul.tabs li").removeClass("active"); //Remove any "active" class
    $(this).addClass("active"); //Add "active" class to selected tab
    $(".tab_content").hide(); //Hide all tab content

    var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
    $(activeTab).fadeIn(); //Fade in the active ID content
    return false;
  });

});
    </script>
<!--  <script type="text/javascript">
$(function(){
        $('.column').equalHeight();
    });
</script>
-->
</head>

<body>
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="admin.php?controller=admin">后台首页</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="disabled">
        <a href="#">导入EXCEL</a>
      </li>
      <li class="disabled">
        <a href="#">导出EXCEL</a>
      </li>
    </ul>
    <form class="navbar-form navbar-left" role="search" method="post" action="admin.php?controller=search&method=search">
      <div class="form-group">
        <select class="form-control" name="option">
          <option value="微博">微博</option>
          <option value="微信">微信</option>
          <option value="论坛">论坛</option>
        </select>
        <input type="text" name="keyword" class="form-control" placeholder="搜索一下"></div>
      <button type="submit" name="submit" class="btn btn-default"> <i class="glyphicon glyphicon-search"></i>
        搜索
      </button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="index.php"> <i class="glyphicon glyphicon-globe"></i>
          查看网站
        </a>
      </li>
      <?php if (isset($_smarty_tpl->tpl_vars['login_']->value)) {?>
      <li>
        <a href="#" data-toggle="modal" data-target="#myModal">登陆</a>
      </li>
      <?php } else { ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          用户中心
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li>
            <a href="admin.php?controller=admin&method=editpw">
              <i class="glyphicon glyphicon-wrench"></i>
              修改密码
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="admin.php?controller=admin&method=logout">
              <i class="glyphicon glyphicon-off"></i>
              退出登陆
            </a>
          </li>
        </ul>
      </li>
      <?php }?>
    </ul>
  </div>
  <!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav><?php }} ?>
