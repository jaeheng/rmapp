<?php
/* 公共函数 */

/**
 * 执行某控制器下的某个方法
 * @param $name
 * @param $method
 */
function C($name, $method)
{
    require_once('app/controller/' . $name . 'Controller.class.php');
    $obj = call_user_func(array($name . 'Controller', 'getInstance'));
    $obj->$method();
}

/**
 * 获得一个模型的实例
 * @param $name
 * @return mixed
 */
function M($name)
{
    require_once('app/Model/' . $name . 'Model.class.php');
    return call_user_func(array($name . 'Model', 'getInstance'));
}

/**
 * 去除危险字符
 * @param $str
 * @return string
 */
function daddslashes($str)
{
    return (!get_magic_quotes_gpc()) ? addslashes($str) : $str;
}

/**
 * 提示消息
 * @param $info
 * @param $url
 */
function msg($info, $url)
{
    echo "<script>alert('$info');window.location.href='$url'</script>";
    exit;
}

/**
 * 是否登录
 * @return bool
 */
function isLogin()
{
    return isset($_SESSION['auth']) ? $_SESSION['auth'] : false;
}