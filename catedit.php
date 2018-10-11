<?php 

$cat_id = $_GET['cat_id'];
//var_dump($cat_id);

$link = @mysql_connect('localhost','root','');
			mysql_query('use blog',$link);
			mysql_query('set names utf8');


			if (!is_numeric($cat_id)) {
					echo '栏目不合法';
					exit();
				}

	//检测栏目是否存在

			$sql = "select count(*) from cat where cat_id='$cat_id'";
			$rs = mysql_query($sql);
			//var_dump(mysql_fetch_row($rs));

			if (mysql_fetch_row($rs)[0]==0) {
				echo '栏目不存在';
				exit();
			}



			if (empty($_POST)) {
			$sql = "select catname from cat where cat_id = '$cat_id'";
			$rs = mysql_query($sql);
			$cat = mysql_fetch_assoc($rs);
			//var_dump($cat);
			require('./view/admin/catedit.html');
		}

		if (!empty($_POST)) {
			$sql = "update cat set catname = '$_POST[catname]' where cat_id = '$cat_id'";
			if (!mysql_query($sql)){

				echo '栏目修改失败';
			}else{
				echo '栏目修改成功';
			}
		}
			
		


 ?>