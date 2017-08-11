<?php

/**
 * 系统操作：目前是添加类别，分类，地区等
 */
class sysController extends controller
{
    // 登陆信息
    public $auth;

    public static function getInstance()
    {
        static $instance;
        if (!$instance) {
            $instance = new sysController();
        }
        return $instance;
    }

    public function category()
    {
        $data = $this->getCategoryList();
        VIEW::assign(array('data' => $data, 'auth' => $this->auth));
        VIEW::display('admin/category.html');
    }

    private function getCategoryList()
    {
        $obj = M('sys');
        return $obj->findAll_orderby_cid();
    }

}

?>