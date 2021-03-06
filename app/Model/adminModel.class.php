<?php

class adminModel
{
    // in function ,we can use the DB_PREFIX to express the prefix of db table;
    static function getInstance()
    {
        static $instance;
        if (!$instance) {
            $instance = new adminModel();
        }
        return $instance;
    }


    function findOne_by_username($username)
    {
        $sql = 'select * from ' . DB_PREFIX . 'admin where username="' . $username . '"';
        return DB::findOne($sql);
    }

    function findOne_by_uid($uid)
    {
        $sql = 'select * from ' . DB_PREFIX . 'admin where uid = ' . $uid;
        return DB::findOne($sql);
    }

    function count()
    {
        $sql = 'select count(*) from ' . DB_PREFIX . 'admin';
        return DB::findResult($sql, 0, 0);
    }
}

?>