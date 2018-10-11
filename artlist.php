<?php 


	require('./lib/int.php');

	if (!acc()) {
		error('请登录');
		header('location: login.php');
	}


//分页代码
	$sql = "select count(*) from art"; //获取总的文章数
	$num = mGetone($sql);// 总的文章数
	//var_dump($num);
	$curr = isset($_GET['page']) ? $_GET['page']:1;//当前页码数
	$cnt = 12; //每页显示条数
	$page = getPage($num,$curr,$cnt);
	//print_r($page);


	$sql = "select art_id,title,pubtime,comm,catname from art left join cat on art.cat_id=cat.cat_id".' order by art_id desc limit '. ($curr-1)*$cnt ." , ". $cnt;
	//echo $sql; exit();
	$arts = mGetAll($sql);
	//print_r($arts); exit();


	require(ROOT. '/view/admin/artlist.html');
 ?>