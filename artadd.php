<?php 
	require('./lib/int.php');

	$sql = "select * from cat";
	$cats = mGetAll($sql);
	//print_r($cats);exit; 

	if (empty($_POST)) {
		include(ROOT. '/view/admin/artadd.html');
	}else{
		//检测标题是否为空
		$art['title'] = trim($_POST['title']);
		if ($art['title'] == '') {
			error('标题不能为空');
			header('location: artadd.php');
			exit();
		}

		//print_r($_FILES);exit();
		//判断是否有图片上传 且error是否为0
		//var_dump(empty($_FILES['pic']['name']));exit;
		if (!($_FILES['pic']['name'] == '') && $_FILES['pic']['error'] == 0) {
			$filename = createDir().'/'.randStr().getExt($_FILES['pic']['name']);
			if(move_uploaded_file($_FILES['pic']['tmp_name'], ROOT . $filename)){
				$art['pic'] = $filename;
				$art['thumb'] = makeThumb($filename);

			}
		}

		//检测内容是否存在

		$art['content'] = $_POST['content'];
		//$art['pic'] = $_POST['pic'];
	/*	if ($art['content'] == '') {
			
				error('内容不能为空');
			
			
		}
*/
		//栏目是否合法
		$art['cat_id'] = $_POST['cat_id'];
		if (!is_numeric($art['cat_id'])) {
			//var_dump($art['cat_id']);
			error('栏目不合法');
		}

		//插入时间
		$art['pubtime'] = time();

		//收集tag
		$art['tag'] = trim($_POST['tag']);

		if (!mExec('art' , $art)) {
			error('文章发布失败');
		}else{
			//判断是否有tag
			$art['tag'] = trim($_POST['tag']);
			//print_r($art['tag']);
			if ($art['tag'] == '') {
				//将cat表的nun字段 当前栏目下的文章数+1
				$sql ="update cat set num=num+1 where cat_id=$art[cat_id]";
				//echo $sql;exit();
				mQuery($sql);
				succ('文章发布成功');
			}else{
				//获取上次insert操作产生的主键id
				$art_id = getLastId();
				//插入tag到tag表
				$sql = "insert into tag (art_id,tag)";
				//linux,mysql,php
				//insert into tag (art_id,tag) values($art_id,'linux') , ($art_id,'mysql') , ($art_id, 'php');
				$tag = explode(',',$art['tag']);//索引数组
				//print_r($tag);
				$sql = "insert into tag (art_id,tag) values ( ";
				foreach($tag as $t){
					$sql .= $art_id . ",'" . $t . "') ,(";
					

				}
				$sql = rtrim($sql , ",(");
				//echo $sql;
				if (mQuery($sql)) {
					//将cat表的nun字段 当前栏目下的文章数+1
					$sql = "update cat set num=num+1 where cat_id=$art[cat_id]";
				mQuery($sql);
					succ('文章添加成功');
				}else{
					//tag 添加失败  删除文章
					$sql = "delete from art where art_id=$art_id";
					//将cat表的nun字段 当前栏目下的文章数-1
					$sql = "update cat set num=num-1 where cat_id=$art[cat_id]";
					mQuery($sql);
					if(mQuery($sql)){
						error('文章添加失败');
				}
			}
			
		}

	}

}


 ?>