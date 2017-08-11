<?php
	$config = array(
		'viewconfig' => array(
			'left_delimiter' => '{',  'right_delimiter' => '}',  'template_dir' => 'app/View',  'compile_dir' => 'app/runtime/template_c'),
		'dbconfig' => array(
			'dbhost' => '127.0.0.1', 'dbuser'=>'root', 'dbpsw' => '' , 'dbname' => 'xiaoming', 'dbcharset' => 'utf8')
	);

	define('DB_PREFIX', 'xm_');
?>