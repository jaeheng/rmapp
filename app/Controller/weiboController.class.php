<?php

/**
 * 微博资源控制器
 */
class weiboController extends controller
{
    public $auth;

    public static function getInstance()
    {
        static $instance;
        if (!$instance) {
            $instance = new weiboController();
        }
        return $instance;
    }

    public function add()
    {
        /*添加微博资源，首先判断是添加还是修改，添加跟修改用一个模型，如果没有post则表示是修改，需要取出数据并显示到相应控件上*/
        if (!isset($_POST['submit'])) {
            $data = $this->getweibosinfo();
            VIEW::assign(array('data' => $data, 'auth' => $this->auth));
            VIEW::display('admin/addweibo.html');
        } else {
            $this->weibosubmit();
        }
    }

    public function weiboList()
    {
        $data = $this->getweibolist();
        VIEW::assign(array('data' => $data, 'auth' => $this->auth));
        VIEW::display('admin/weibolist.html');
    }

    public function weiboRecList()
    {
        $data = $this->getWeiboReclist();
        VIEW::assign(array('data' => $data, 'auth' => $this->auth));
        VIEW::display('admin/weiboreclist.html');
    }

    public function weiboDel()
    {
        if ($_GET['w_id']) {
            $this->delWeibo();
            msg('删除新闻成功！', 'admin.php?controller=weibo&method=weiboList');
        }
    }

    public function recovery()
    {
        if ($_GET['w_id']) {
            $this->rec_weibo();
            msg('恢复成功！', 'admin.php?controller=weibo&method=weiboList');
        }
    }

    public function del_weibo_in_flush()
    {
        if ($_GET['w_id']) {
            $this->d_weibo_i_flush();
            msg('删除成功！', 'admin.php?controller=weibo&method=weiboRecList');
        }
    }

    private function getweibosinfo()
    {
        if (isset($_GET['w_id'])) {
            $w_id = intval($_GET['w_id']);
            $obj = M('weibo');
            return $obj->findOne_by_id($w_id);
        } else {
            return array();
        }
    }

    private function delWeibo()
    {
        $obj = M('weibo');
        return $obj->del_by_id($_GET['w_id']);
    }

    private function rec_weibo()
    {
        $obj = M('flush');
        return $obj->recovery_weibo_by_w_id($_GET['w_id']);
    }

    private function d_weibo_i_flush()
    {
        $obj = M('flush');
        return $obj->del_by_id($_GET['w_id'], 'weibo_rec');
    }

    private function getweibolist()
    {
        $weibo_obj = M('weibo');
        return $weibo_obj->findAll_orderby_dateline();
    }

    private function getWeiboReclist()
    {
        $obj = M('flush');
        return $obj->findAllWeibo_orderby_dateline();
    }

    private function weibosubmit()
    {
        extract($_POST);
        if (empty($nick)) {
            msg('昵称为空！', 'admin.php?controller=weibo&method=add');
        }
        $nick = daddslashes($nick);
        $owner_url = daddslashes($owner_url);
        $category = daddslashes($category);
        $sort = daddslashes($sort);
        $fans = daddslashes($fans);
        $zhi_pri = daddslashes($zhi_pri);
        $zhuan_pri = daddslashes($zhuan_pri);
        $zhi_ben = daddslashes($zhi_ben);
        $zhuan_ben = daddslashes($zhuan_ben);
        $state = daddslashes($state);
        $area = daddslashes($area);
        $classU = daddslashes($classU);
        $owner = daddslashes($owner);
        $weibo_obj = M('weibo');
        $data = array(
            'nick' => $nick,
            'owner_url' => $owner_url,
            'category' => $category,
            'sort' => $sort,
            'fans' => $fans,
            'zhi_pri' => $zhi_pri,
            'zhuan_pri' => $zhuan_pri,
            'zhi_ben' => $zhi_ben,
            'zhuan_ben' => $zhuan_ben,
            'state' => $state,
            'area' => $area,
            'classU' => $classU,
            'owner' => $owner,
            'dateline' => time()
        );
        if ($_POST['w_id'] != '') {
            $weibo_obj->update($data, intval($_POST['w_id']));
            msg('修改成功！', 'admin.php?controller=weibo&method=weiboList');
        } else {
            $weibo_obj->insert($data);
            msg('添加成功！', 'admin.php?controller=weibo&method=weiboList');
        }
    }

}

?>