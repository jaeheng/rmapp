<?php /* Smarty version Smarty-3.1.16, created on 2014-10-11 05:13:49
         compiled from "tpl\admin\weibolist.html" */ ?>
<?php /*%%SmartyHeaderCode:27696542a78c3839c87-29761035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9125aaa54de8e85c1258818d79f258186c32c328' => 
    array (
      0 => 'tpl\\admin\\weibolist.html',
      1 => 1412954501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27696542a78c3839c87-29761035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_542a78c38a75e2_01553267',
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a78c38a75e2_01553267')) {function content_542a78c38a75e2_01553267($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/bread.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="main" class="column">		
	<div class="page-header">
	  <h3>微博资源<small> Weibo list</small></h3>
	</div>
	<!-- 多条件查询 -->
	<div class="mcquery panel panel-default">
	  <div class="panel-heading">条件查询</div>
	  <ul class="list-group">
	  	<li class="list-group-item">
			类别：<a href=""></a>
	  	</li>
	  	<li class="list-group-item">
	  		分类：<a href="">ddd</a>
	  	</li>
	  	<li class="list-group-item">
	  		地区：<a href="">ddd</a>
	  	</li>
	  </ul>
	</div>
	<div class="tab_container">
		<div class="table-responsive">
			<table class="table table-hover" cellspacing="0" style="margin:0"> 
				<thead> 
					<tr>  
	    				<th><input type="checkbox"></th>
						<th>序号</th>
						<th>昵称</th>
						<th>分类</th>
						<th>粉丝(W)</th>
						<th>直发报价</th>
						<th>转发报价</th>
						<th>直发成本</th>
						<th>转发成本</th>
						<th>状态</th>
						<th>地区</th>
						<th>等级</th>
						<th>拥有者</th>
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
						<td><input type="checkbox"></td>
	    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['w_id'];?>
</td> 
	    				<td><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['owner_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['nick'];?>
</a></td> 
	    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['sort'];?>
</td>
	    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['fans'];?>
</td>  
	    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['zhi_pri'];?>
</td>
	    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['zhuan_pri'];?>
</td>
	    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['zhi_ben'];?>
</td>
	    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['zhuan_ben'];?>
</td> 
	    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['state'];?>
</td> 
	    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['area'];?>
</td> 
	    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['classU'];?>
</td> 
	    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['owner'];?>
</td>    
	    				<td>
	    				<input type="image" src="img/images/icn_edit.png" title="Edit" onclick="window.location.href='admin.php?controller=weibo&method=add&w_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['w_id'];?>
'">
	    				<input type="image" src="img/images/icn_trash.png" title="Trash" onclick="window.location.href='admin.php?controller=weibo&method=weiboDel&w_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['w_id'];?>
'">
	    				</td>
					</tr>
				<?php } ?>
				<?php } else { ?>
					<tr>
						<td  colspan=12>
							暂无新闻
						</td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</div><!-- end of #tab1 -->
		
		<div id="tab2" class="tab_content">

		</div><!-- end of #tab2 -->
		
	</div><!-- end of .tab_container -->
	<div class="spacer"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
