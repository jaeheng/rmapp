<?php

/**
 * 回收站类
 */
class flushModel
{
    static function getInstance()
    {
        static $instance;
        if (!$instance) {
            $instance = new flushModel();
        }
        return $instance;
    }
    
    function findAllWeibo_orderby_dateline()
    {
        $sql = 'select * from ' . DB_PREFIX . 'weibo_rec order by dateline desc';
        return DB::findAll($sql);
    }

    function recovery_weibo_by_w_id($id)
    {
        $temp = $this->findOne_by_id($id, 'weibo_rec');
        // unset($temp['is_rec']);
        $obj = M('weibo');
        $obj->insert($temp);
        //注意参数之间的逗号，
        return $this->del_by_id($id, 'weibo_rec');
    }

    function del_by_id($id, $table)
    {
        // $temp = $this->findOne_by_id($id,DB_PREFIX.$table);
        // DB::insert($this->_table_rec, $temp);
        $table = DB_PREFIX . $table;
        return DB::del($table, 'w_id=' . $id);
    }

    function findOne_by_id($id, $table)
    {
        $sql = 'select * from ' . DB_PREFIX . $table . ' where w_id=' . $id;
        return DB::findOne($sql);
    }
}

?>