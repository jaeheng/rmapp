<?php
	class indexController{
		function __construct(){
			session_start();
			if(!(isset($_SESSION['auth']))){
					echo "<script>window.location.href='admin.php?controller=admin&method=login'</script>";
			}
		}

		function index(){
			// VIEW::assign(array('title'=>'快乐的一天', 'author'=>'开心的一天'));
			VIEW::display('admin/test.html');
		}
	}
?>