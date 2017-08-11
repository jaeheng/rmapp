<?php

/**
 * 系统模型
 */
class sysModel
{
    static function getInstance()
    {
        static $instance;
        if (!$instance) {
            $instance = new sysModel();
        }
        return $instance;
    }

    public function findAll_orderby_cid()
    {
        $sql = 'select * from ' . DB_PREFIX . 'category order by cid';
        return DB::findAll($sql);
    }
}