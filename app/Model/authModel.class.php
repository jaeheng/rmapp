<?php

class authModel
{
    static function getInstance()
    {
        static $instance;
        if (!$instance) {
            $instance = new authModel();
        }
        return $instance;
    }

    function checkauth($username, $password)
    {
        $adminobj = M('admin');
        $auth = $adminobj->findOne_by_username($username);
        if ((!empty($auth)) && $auth['password'] == md5($password)) {
            return $auth;
        } else {
            return false;
        }
    }

    function update($data, $uid)
    {
        extract($data);
        $adminobj = M('admin');
        $auth = $adminobj->findOne_by_uid($uid);

        if (!empty($auth) && $auth['password'] == md5($oldpw)) {
            $data = array('password' => md5($newpw));
            DB::update(DB_PREFIX . 'admin', $data, 'uid=' . $uid);
            return $newpw;
        } else {
            msg('旧密码输入错误', 'admin.php?controller=admin&method=editpw');
            return false;
        }
    }
}

?>