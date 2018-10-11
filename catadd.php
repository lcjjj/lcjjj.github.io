<meta charset="utf8">
<?php

require('./lib/int.php');


//判断表单是否有post数据
	if (empty($_POST)) {

		include(ROOT.'/view/admin/catadd.html');

	}else{
			
			/*$link = @mysql_connect('localhost','root','');
			mysql_query('use blog',$link);
			mysql_query('set names utf8');*/
			//var_dump($cat[catname]);
			//检测栏目是否为空
			@$cat[catname] = trim($_POST['catname']);
			if (empty($cat['catname'])) {
				error ('栏目不能为空');
				exit();
				var_dump($cat[catname]);
			}
			//print_r($cat[catname]);
			//检测栏目是否存在
			
			$sql = "select count(*) from cat where catname ='$cat[catname]'";
			//echo $sql ;exit();
			$rs = mQuery($sql);
			//var_dump($rs);
			
			if(mysql_fetch_row($rs)[0]!=0){
				echo '栏目已存在';
				exit();

			}

			//var_dump($cat);

			//将栏目写入栏目表
			//$sql = "insert into cat (catname) values ('$cat[catname]')";
			if (!mExec('cat',$cat)) {
				echo '栏目插入失败';
				echo mysql_error();
			}else{
				//echo '栏目插入成功';
				succ('栏目插入成功');
			}

		
		}


 ?>