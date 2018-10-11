<?php 


require('./lib/int.php');
$art_id = $_GET['art_id'];

//判断地址栏传来的art_id是否合法
if(!is_numeric($art_id)) {
	error('文章id不合法');
}

//是否有这篇文章
$sql = "select * from art where art_id=$art_id";
if(!mGetRow($sql)) {
	error('文章不存在');
}

//查询出所有的栏目
$sql = "select * from cat";
$cats = mGetAll($sql);

if(empty($_POST)) {
	$sql = "select title,content,cat_id,tag from art where art_id=$art_id";
	$art = mGetRow($sql);
	include(ROOT . '/view/admin/artedit.html');
} else {
	//检测标题是否为空
	$art['title'] = trim($_POST['title']);
	if($art['title'] == '') {
		error('标题不能为空');
	}

	//检测栏目是否合法
	$art['cat_id'] = $_POST['cat_id'];
	if(!is_numeric($art['cat_id'])) {
		error('栏目不合法');
	}

	//检测内容是否为空
	$art['content'] = trim($_POST['content']);
	if($art['content'] == '') {
		error('内容不能为空');
	}


	$art['tag'] = trim($_POST['tag']);


	$art['lastup'] = time();
	if(!mExec('art' , $art ,'update' , "art_id=$art_id")) {
		error('文章修改失败');
	} else {
		//删除tag表的所有tag 再insert插入新的tag
		$sql = "delete * from tag where tag.art_id=$art_id";
		mQuery($sql);
		$tag = explode(',',$art['tag']);
		$sql = "insert into tag (art_id,tag) values ( ";
				foreach($tag as $t){
					$sql .= $art_id . ",'" . $t . "') ,(";
					

				}
				$sql = rtrim($sql , ",(");
				if (mQuery($sql)) {
					succ('文章修改成功');
				}else{
					//tag 添加失败  删除文章
					$sql = "delete from art where art_id=$art_id";
					if(mQuery($sql)){
						error('文章添加失败');
				}
		}

	}
}

?>