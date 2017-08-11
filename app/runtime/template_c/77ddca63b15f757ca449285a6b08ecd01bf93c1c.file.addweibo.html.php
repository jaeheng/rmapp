<?php /* Smarty version Smarty-3.1.16, created on 2014-10-09 14:26:31
         compiled from "tpl\admin\addweibo.html" */ ?>
<?php /*%%SmartyHeaderCode:6084542a62f396eae9-49145606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77ddca63b15f757ca449285a6b08ecd01bf93c1c' => 
    array (
      0 => 'tpl\\admin\\addweibo.html',
      1 => 1412864758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6084542a62f396eae9-49145606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_542a62f39ad050_60516283',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542a62f39ad050_60516283')) {function content_542a62f39ad050_60516283($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('admin/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/bread.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('admin/leftmenu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="main" class="column">
	<form method="post" action="admin.php?controller=weibo&method=add">
		<div class="page-header">
		  <h3>添加微博<small> Add weibos</small></h3>
		</div>
		<div class="alert alert-warning alert-dismissible fade in" role="alert">
	      <button type="button" class="close" data-dismiss="alert">
	      <span aria-hidden="true">×</span>
	      <span class="sr-only">Close</span>
	      </button>
	      <strong>提示：</strong>
	      <i class="glyphicon glyphicon-ok"></i> 表示符合输入要求
	      <i class="glyphicon glyphicon-remove"></i> 表示不符合输入要求，会提交不成功
	      <i class="glyphicon glyphicon-warning-sign"></i> 表示不建议这样输入，可提交成功
	    </div>

		<div class="row">
			<div class="form-group col-sm-3">
				<label class="control-label">昵称（<i class="glyphicon glyphicon-asterisk"></i>）</label>
				<input type="text" name="nick" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['nick'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="在此输入昵称">
				<span class="glyphicon form-control-feedback"></span>
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">微博地址</label>
				<input type="url" name="owner_url" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['owner_url'])===null||$tmp==='' ? '' : $tmp);?>
">
				<span class="glyphicon form-control-feedback"></span>
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">粉丝</label>
				<input type="number" name="fans" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['fans'])===null||$tmp==='' ? '' : $tmp);?>
">
				<span class="glyphicon form-control-feedback"></span>
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">地区</label>
				<input type="text" name="area" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['area'])===null||$tmp==='' ? '' : $tmp);?>
">
				<span class="glyphicon form-control-feedback"></span>
			</div>				
			<div class="form-group col-sm-3">
				<label class="control-label">直发报价</label>
				<input type="number" min="1" max="10" name="zhi_pri" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['zhi_pri'])===null||$tmp==='' ? '' : $tmp);?>
">
				<span class="glyphicon form-control-feedback"></span>
			
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">转发报价</label>
				<input type="number" name="zhuan_pri" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['zhuan_pri'])===null||$tmp==='' ? '' : $tmp);?>
">
				<span class="glyphicon form-control-feedback"></span>
			</div>
			<div class="form-group col-sm-3">				
				<label class="control-label">直发成本</label>
				<input type="number" name="zhi_ben" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['zhi_ben'])===null||$tmp==='' ? '' : $tmp);?>
">
				<span class="glyphicon form-control-feedback"></span>
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">转发成本</label>
				<input type="number" name="zhuan_ben" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['zhuan_ben'])===null||$tmp==='' ? '' : $tmp);?>
">
				<span class="glyphicon form-control-feedback"></span>
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">类别</label>
				<select name="category" class="form-control">
		      	 <option value=""></option>
				  <option value="草根">草根</option>
				  <option value="段子手">段子手</option>
				  <option value="自媒体">自媒体</option>
				  <option value="网络红人">网络红人</option>
				  <option value="行业达人">行业达人</option>
				  <option value="主持人">主持人</option>
				  <option value="歌手">歌手</option>
				  <option value="演员">演员</option>
				  <option value="记者">记者</option>
				  <option value="评论家">评论家</option>
				  <option value="地区号">地区号</option>
		      </select>
		     
		    </div>
			<div class="form-group col-sm-3">
				<label class="control-label">分类</label>
				<select name="sort" class="form-control">
			      <option value=""></option>
				  <option value="新闻资讯">新闻资讯</option>
				  <option value="IT互联网">IT互联网</option>
				  <option value="时尚女性">时尚女性</option>
				  <option value="汽车">汽车</option>
				  <option value="科技数码">科技数码</option>
				  <option value="母婴育儿">母婴育儿</option>
				  <option value="医疗健康">医疗健康</option>
				  <option value="游戏动漫">游戏动漫</option>
				  <option value="旅游摄影">旅游摄影</option>
				  <option value="娱乐影视">娱乐影视</option>
				  <option value="创意生活">创意生活</option>
				  <option value="搞笑笑话">搞笑笑话</option>
				  <option value="财经">财经</option>
				  <option value="校园">校园</option>
				  <option value="教育">教育</option>
				  <option value="家居">家居</option>
				  <option value="家电">家电</option>
				  <option value="美食">美食</option>
				  <option value="建材">建材</option>
				  <option value="房产">房产</option>
				  <option value="奢侈品">奢侈品</option>
				  <option value="婚纱">婚纱</option>
				  <option value="公益">公益</option>
				  <option value="宠物">宠物</option>
				  <option value="语录">语录</option>
				  <option value="英语">英语</option>
				  <option value="购物">购物</option>
				  <option value="音乐">音乐</option>
				  <option value="百科">百科</option>
				  <option value="情感">情感</option>
				  <option value="星座">星座</option>
				</select>
				
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">状态</label>
				<select class="form-control" name="state">
			      <option value=""></option>
				  <option value="达人">达人</option>
				  <option value="微博女郎">微博女郎</option>
				  <option value="个人认证">个人认证</option>
				  <option value="企业认证">企业认证</option>
				  <option value="官方认证">官方认证</option>
				</select>
				
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">推荐等级</label>
				<select class="form-control" name="classU">
			      <option value=""></option>
				  <option value="顶级推荐">顶级推荐</option>
				  <option value="重点推荐">重点推荐</option>
				  <option value="一般推荐">一般推荐</option>
				</select>
				
			</div>
			<div class="form-group col-sm-3">
				<label class="control-label">拥有者</label>
				<input type="text" name="owner" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['owner'])===null||$tmp==='' ? '' : $tmp);?>
">
				<span class="glyphicon form-control-feedback"></span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="submit_link">
			<input type="hidden" name="w_id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['w_id'])===null||$tmp==='' ? '' : $tmp);?>
">
			<input type="submit" name="submit" value="发布" class="btn btn-primary btn-lg btn-block">
		</div>
	</form>
	<div class="spacer"></div>
</div>
<script>
$(document).ready(function(){
	$("select[name='sort']").val("<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['sort'])===null||$tmp==='' ? '' : $tmp);?>
");
	$("select[name='state']").val("<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['state'])===null||$tmp==='' ? '' : $tmp);?>
");
	$("select[name='classU']").val("<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['classU'])===null||$tmp==='' ? '' : $tmp);?>
");
	$("select[name='category']").val("<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['category'])===null||$tmp==='' ? '' : $tmp);?>
");
	$('input,select').blur(function(){
		if($(this).val() == ''){
			$(this).parent().addClass('has-warning has-feedback');
			$(this).next('span').addClass('glyphicon-warning-sign');
			
		}else{
			$(this).parent().removeClass('has-warning has-error').addClass('has-success has-feedback');
			$(this).next('span').removeClass('glyphicon-remove glyphicon-warning-sign').addClass('glyphicon-ok');	
		}
	});
	$('input[name="nick"]').blur(function(){
		if($(this).val() == ''){
			$(this).parent().removeClass('has-warning has-feedback').addClass('has-error has-feedback');
			$(this).next('span').removeClass('glyphicon-warning-sign').addClass('glyphicon-remove');
		}
	});
})
</script>
<?php echo $_smarty_tpl->getSubTemplate ('admin/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
