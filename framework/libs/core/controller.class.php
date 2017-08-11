<?php

class controller
{
    function __construct()
    {
        session_start();
        if (!isLogin()) {
            echo "<script>window.location.href='admin.php?controller=index&method=login'</script>";
        }

        if (isLogin() && PC::$method === 'login') {
            echo "<script>window.location.href='admin.php'</script>";
        }
    }
}