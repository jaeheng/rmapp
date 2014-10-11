<?php /* Smarty version Smarty-3.1.16, created on 2014-10-09 14:21:42
         compiled from "tpl\admin\newsadd.html" */ ?>
<?php /*%%SmartyHeaderCode:6331539d9265713ae2-57639055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e8e81acf2279666460f0a8f0787e9a1f7aa686e' => 
    array (
      0 => 'tpl\\admin\\newsadd.html',
      1 => 1412864497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6331539d9265713ae2-57639055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_539d92657c0ec8_21720221',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539d92657c0ec8_21720221')) {function content_539d92657c0ec8_21720221($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/bread.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="main" class="column">
	<form method="post" action="admin.php?controller=admin&method=newsadd" class="form-horizontal" role="form">
			<div class="page-header">
			  <h3>发表新闻<small> Release news</small></h3>
			</div>
				<div class="module_content">
						<fieldset>
							<label>标题</label>
							<input type="text" name="title" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
">
						</fieldset>
						<fieldset>
							<label>内容</label>
							<!--style给定宽度可以影响编辑器的最终宽度-->
							<!-- <textarea rows="12" class="form-control"> -->
							<script type="text/plain" id="myEditor" name="content" style="width:100%;height:300px;">
							    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</p>
							</script>
							<!-- </textarea> -->
						</fieldset>
						<div class="container-fluid two-inline">
							<div class="row">
							    <div class="col-md-6">
							    	<div class="form-group">
									    <label for="author" class="col-sm-2 control-label">作者</label>
									    <div class="col-sm-10">
									      <input type="text" name="author" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['author'])===null||$tmp==='' ? '' : $tmp);?>
">
									    </div>
									  </div>
							    </div>
									<div class="col-md-6">
										<div class="form-group">
									    <label for="from" class="col-sm-2 control-label">出处</label>
									    <div class="col-sm-10">
									      <input type="text" name="from" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['from'])===null||$tmp==='' ? '' : $tmp);?>
">
									    </div>
									</div>
									</div>
							</div>
						</div>
						
						
				</div>
			<footer>
				<div class="submit_link">
					<input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
					<input type="submit" name="submit" value="发布" class="btn btn-primary btn-lg btn-block">
				</div>
			</footer>
	</form>
	<div class="spacer"></div>
</div>
<link href="tpl/admin/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="tpl/admin/umeditor/third-party/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="tpl/admin/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="tpl/admin/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="tpl/admin/umeditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    var um = UM.getEditor('myEditor');
</script>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
