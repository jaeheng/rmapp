<?php 
	/**
	* 微博资源模型
	*/
	class weiboModel
	{		
		// public $_table = 'xm_weibo';
		// //回收表
		// public $_table_rec = 'xm_weibo_rec';

		function findAll_orderby_dateline(){
			$sql = 'select * from '.DB_PREFIX.'weibo order by dateline desc';
			return DB::findAll($sql);
		}

		function findOne_by_id($id){
			$sql = 'select * from '.DB_PREFIX.'weibo where w_id='.$id;
			return DB::findOne($sql);
		}

		function del_by_id($id){
			$temp = $this->findOne_by_id($id);
			DB::insert(DB_PREFIX.'weibo_rec', $temp);
			return DB::del(DB_PREFIX.'weibo', 'w_id='.$id);
		}

		function count(){
			$sql = 'select count(*) from '.DB_PREFIX.'weibo';
			return DB::findResult($sql, 0, 0);
		}

		function insert($data){
			return DB::insert(DB_PREFIX.'weibo', $data);
		}

		function update($data, $id){
			return DB::update(DB_PREFIX.'weibo', $data, 'w_id='.$id);
		}
		function search($keyword){
			$sql = "select * from ".DB_PREFIX."weibo where nick like '%$keyword%' order by dateline desc";
			return DB::findAll($sql);
		}
	}


?>