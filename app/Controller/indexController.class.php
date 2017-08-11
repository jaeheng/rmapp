<?php

class indexController
{
    public static function getInstance()
    {
        static $instance;
        if (!$instance) {
            $instance = new indexController();
        }
        return $instance;
    }

    function index()
    {
        VIEW::display('admin/test.html');
    }

    public function login()
    {
        if (!isset($_POST['submit'])) {
            VIEW::assign(array('login_' => 1));
            VIEW::display('index/login.html');
        } else {
            $this->checklogin();
        }
    }

    private function checklogin()
    {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            msg('登录失败！', 'admin.php?controller=index&method=login');
        }
        $username = daddslashes($_POST['username']);
        $password = daddslashes($_POST['password']);
        $authobj = M('auth');
        if ($auth = $authobj->checkauth($username, $password)) {
            session_start();
            $_SESSION['auth'] = $auth;
            msg('登录成功！', 'admin.php?controller=admin&method=index');
        } else {
            msg('登录失败！', 'admin.php?controller=index&method=login');
        }
    }
}