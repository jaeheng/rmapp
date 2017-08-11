<?php

/**
 * 搜索类
 */
class searchController extends controller
{
    public $auth;

    public static function getInstance()
    {
        static $instance;
        if (!$instance) {
            $instance = new searchController();
        }
        return $instance;
    }

    function search()
    {
        extract($_POST);
        if ($option == '微博') {
            $data = $this->search_in_weibo($keyword);
            foreach ($data as $key => $value) {
                $data[$key]['nick'] = str_replace($keyword, '<font color="#C60A00">' . $keyword . '</font>', $value['nick']);
            }
            VIEW::assign(array('data' => $data, 'auth' => $this->auth, 'keyword' => $keyword));
            VIEW::display('admin/weibolist.html');
        } elseif ($option == '微信') {
            $this->search_in_weixin($keyword);
        } elseif ($option == '论坛') {
            $this->search_in_forum($keyword);
        }
    }

    private function search_in_weibo($keyword)
    {
        $weibo = M('weibo');
        return $weibo->search($keyword);
    }

    private function search_in_weixin($keyword)
    {
        echo $keyword . "微信你好";
    }

    private function search_in_forum($keyword)
    {
        echo $keyword . "论坛你好";
    }
}

?>