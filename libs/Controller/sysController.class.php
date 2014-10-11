<?php 
/**
* 系统操作：目前是添加类别，分类，地区等
*/
class sysController
{
	// 登陆信息
	public $auth;
	//构造函数：创建admin控制器的时候，验证登陆
	public function __construct(){
		//启动session
		session_start();

		if(!(isset($_SESSION['auth']))&&(PC::$method!='login')){
			$this->showmessage('请登录后在操作！', 'admin.php?controller=admin&method=login');
		}else{
			$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:array();
		}
	}
	public function category(){
		$data = $this->getCategoryList();
		VIEW::assign(array('data'=>$data,'auth'=>$this->auth));			
		VIEW::display('admin/category.html');
	}
	private function getCategoryList(){
		$obj = M('sys');
		return $obj->findAll_orderby_cid();
	}

}

?>