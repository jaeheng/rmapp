<?php /* Smarty version Smarty-3.1.16, created on 2014-10-09 14:32:02
         compiled from "tpl\admin\weiboreclist.html" */ ?>
<?php /*%%SmartyHeaderCode:8082542e6d373a1092-33940478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a1d3b78f9e8903ebbfb7fef50ab1f584386f4c3' => 
    array (
      0 => 'tpl\\admin\\weiboreclist.html',
      1 => 1412865089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8082542e6d373a1092-33940478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_542e6d374639c7_62428909',
  'variables' => 
  array (
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542e6d374639c7_62428909')) {function content_542e6d374639c7_62428909($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/bread.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main" class="column">		
	<div class="page-header">
	  <h3>微博回收站资源列表<small> The recycle bin of weibo</small></h3>
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
						<th>直发成本</th>
						<th>转发成本</th>
						<th>状态</th>
						<th>地区</th>
						<th>等级</th>
						<th>拥有者</th>
						<th>资源添加时间</th>
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
	    				<td><?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['value']->value['dateline']);?>
</td> 
	    				<td>
	    				<input type="image" src="img/images/icn_jump_back.png" title="恢复" onclick="window.location.href='admin.php?controller=weibo&method=recovery&w_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['w_id'];?>
'">
	    				&nbsp;
	    				<input type="image" src="img/images/icn_trash.png" title="删除" onclick="window.location.href='admin.php?controller=weibo&method=del_weibo_in_flush&w_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['w_id'];?>
'">
	    				</td>
					</tr>
				<?php } ?>
				<?php } else { ?>

					<tr>
						<td  colspan=13>
							暂无资源
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
