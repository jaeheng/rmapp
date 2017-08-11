<?php /* Smarty version Smarty-3.1.16, created on 2014-10-07 11:43:10
         compiled from "tpl\admin\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:56755430c38b918896-56563103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54776a2ba0d3ed82a608f3e41cd42dee93e05e0b' => 
    array (
      0 => 'tpl\\admin\\footer.html',
      1 => 1412682188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56755430c38b918896-56563103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5430c38b91bcd7_34225656',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5430c38b91bcd7_34225656')) {function content_5430c38b91bcd7_34225656($_smarty_tpl) {?><div class="clearfix"></div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">登陆！</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="post" action="admin.php?controller=admin&method=login">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" name="username" placeholder="用户名">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" name="password" placeholder="密码">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default" name="submit">登陆</button>
		    </div>
		  </div>
		</form>
      </div>
    </div>
  </div>
</div>
<p align="center">&copy;jaeheng</p>
</body>
</html><?php }} ?>
