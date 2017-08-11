<?php

class DbMysqli
{
    private $db;

    /**
     * 报错函数
     * @param string $error
     */
    function err($error)
    {
        die("对不起，您的操作有误，错误原因为：" . $error);
    }

    /**
     * 连接数据库
     * @param array $config ['dbhost', 'dbuser', 'dbpsw', 'dbname']
     */
    function connect($config = array())
    {
        $dbhost = $config['dbhost'];
        $dbuser = $config['dbuser'];
        $dbpsw = $config['dbpsw'];
        $dbname = $config['dbname'];
        $mysqli = new mysqli($dbhost, $dbuser, $dbpsw, $dbname);
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        } else {
            $this->db = $mysqli;
        }
    }

    /**
     * 执行sql语句
     *
     * @param string $sql
     * @return bool 返回执行成功、资源或执行失败
     */
    function query($sql)
    {
        if (!($query = mysqli_query($this->db, $sql))) {
            $this->err($sql . "<br />" . $this->db->connect_errno);
        } else {
            return $query;
        }
    }

    /**
     * 查找多条信息
     * @param resource $query sql语句通过mysql_query 执行出来的资源
     * @return array|string 返回列表数组
     */
    function findAll($query)
    {
        while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $list[] = $rs;
        }
        return isset($list) ? $list : "";
    }

    /**
     * 查找单挑信息
     * @param $query
     * @return array|null
     */
    function findOne($query)
    {
        return mysqli_fetch_array($query, MYSQLI_ASSOC);
    }

    /**
     * 指定行的指定字段的值
     * @param $query $query sql语句通过mysql_query执行出的来的资源
     * @param int $row
     * @param int $filed
     * @return mixed
     */
    function findResult($query, $row = 0, $filed = 0)
    {
        mysqli_data_seek($query, $row);
        $row = mysqli_fetch_array($query);
        return $row[$filed];
    }

    /**
     * 新增数据
     * @param $table
     * @param $arr
     * @return int
     * sql插入数据语法: insert into 表名(多个字段) values(多个值)
     */
    function insert($table, $arr)
    {
        $keyArr = array();
        $valueArr = array();
        // foreach循环数组
        foreach ($arr as $key => $value) {
            $key = addslashes($key);
            $value = addslashes($value);
            // 把$arr数组当中的键名保存到$keyArr数组当中
            $keyArr[] = "`" . $key . "`";
            //把$arr数组当中的键值保存到$valueArr当中，因为值多为字符串，而sql语句里面insert当中如果值是字符串的话要加单引号，所以这个地方要加上单引号
            $valueArr[] = "'" . $value . "'";
        }
        $keys = implode(",", $keyArr);//implode函数是把数组组合成字符串 implode(分隔符，数组)
        $values = implode(",", $valueArr);
        //sql的插入语句  格式：insert into 表(多个字段)values(多个值)
        $sql = "insert into " . $table . "(" . $keys . ") values(" . $values . ")";
        //调用类自身的query(执行)方法执行这条sql语句  注：$this指代自身
        $this->query($sql);
        return mysqli_insert_id($this->db);
    }

    /**
     * 更新数据
     * @param $table
     * @param $arr
     * @param $where
     * 更新表语法：update 表名 set 字段=字段值 where ……
     */
    function update($table, $arr, $where)
    {
        $keyAndvalueArr = array();
        foreach ($arr as $key => $value) {
            $value = addslashes($value);
            $keyAndvalueArr[] = "`" . $key . "`='" . $value . "'";
        }
        $keyAndvalues = implode(",", $keyAndvalueArr);
        //修改操作 格式 update 表名 set 字段=值 where 条件
        $sql = "update " . $table . " set " . $keyAndvalues . " where " . $where;
        $this->query($sql);
    }

    /**
     * 删除数据
     * @param $table
     * @param $where
     * 删除sql语法：delete from 表名 where 条件
     */
    function del($table, $where)
    {
        $sql = "delete from " . $table . " where " . $where;
        $this->query($sql);
    }

}