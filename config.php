<?php
	$config = array(
		'viewconfig' => array(
			'left_delimiter' => '{',  'right_delimiter' => '}',  'template_dir' => 'tpl',  'compile_dir' => 'data/template_c'),
		'dbconfig' => array(
			'dbhost' => 'localhost', 'dbuser'=>'root', 'dbpsw' => '' , 'dbname' => 'xiaoming', 'dbcharset' => 'utf8')
	);

	define('DB_PREFIX', 'xm_');
?>