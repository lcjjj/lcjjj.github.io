

<?php 
/**
*mysql.php mysql系列操作函数
*@author lutece
*
*/




//连接数据库
//$conn = null;

function mConn(){
	static $conn = null;
	if ($conn === null) {
		$cfg = require(ROOT . '/lib/config.php');
		//print_r($cfg);
		$conn = @mysql_connect($cfg['host'] , $cfg['user'] , $cfg['pwd']);
		mysql_query('use '.$cfg['db']  , $conn);
		mysql_query('set names '.$cfg['charset'] , $conn);

	}

	return $conn;

}



//查询的函数
function mQuery($sql){
	$rs =  mysql_query($sql,mConn());
	if ($rs) {
		mLog($sql);
	}else{
		mLog($sql. "\n" . mysql_error());
	}

	return $rs;
}

//log日志

function mLog($str){
	$filename = ROOT . '/log/' . date('Ymd') . '.txt';
	$log = "-----------------------------------------\n".date('Y/m/d H:i:s') . "\n" .$str . "\n" ."-----------------------------------------\n\n";
	return file_put_contents($filename, $log,FILE_APPEND);


}


//select查询多行数据

function mGetAll($sql){
	$rs = mQuery($sql);
	if(!$rs){
		return false;

	}
	$data = array();
	while ($row = mysql_fetch_assoc($rs)) {
		$data[] = $row;
	}
	return $data;
}

//$sql = "select * from cat";
//print_r(mGetAll($sql));

	//select 取出一行数据
function mGetRow($sql){

	$rs = mQuery($sql);
	if (!$rs) {
		return false;
	}
	return mysql_fetch_assoc($rs);


}


//$sql = "select * from cat";
//print_r(mGetRow($sql));

//select 查询返回一个结果

function mGetOne($sql){
	$rs = mQuery($sql);
	if (!$rs) {
		return false;
	}

	return mysql_fetch_row($rs)[0];
}

$sql = "select count(*) from art";
//echo mGetOne($sql);
//var_dump(mGetOne($sql));

/**
* 自动拼接insert 和 update sql语句,并且调用mQuery() 去执行sql
*
* @param str $table 表名
* @param arr $data 接收到的数据,一维数组
* @param str $act 动作 默认为'insert'
* @param str $where 防止update更改时少加where条件
* @return bool insert 或者update 插入成功或失败 
*/

//$data = array('title'=>'天气','content'=>'天气阴天','pubtime'=>'123456789','author'=>'lutece');

function mExec($table,$data,$act='insert',$where = 0){
	if ($act == 'insert') {
		$sql = "insert into $table (" ;
		$sql .= implode(',', array_keys($data)).") values('";
		$sql .= implode("','", array_values($data))."')";
		return mQuery($sql); 
	}else if($act = 'update'){
		$sql = "update $table set ";
		foreach ($data as $key => $value) {
			$sql .= $key."='".$value."',"; 
		}
		$sql = rtrim($sql,',') . ' where '. $where;
		//echo $sql;
		return mQuery($sql);


	}

}

//$data = array('title'=>'天气','content'=>'天气阴天','pubtime'=>'123456789','author'=>'lutece');
//update art set title='',content='',pubtime='',author='' where art_id = 1; 
//echo mExec('art',$data,'update','art_id = 0');


//取得上一步insert操作产生的主键id

function getLastId(){
	return mysql_insert_id(mConn());
}

/**
* 使用反斜线 转义字符串
* @param arr 待转义的数组
* @return arr 被转义后的数组
*/

function _addslashes($arr){
	foreach ($arr as $k => $v) {
		if (is_string($v)) {
			$arr[$k] = addslashes($v);
		}else if(is_array($v)){
			$arr[$k] = _addslashes($v);
		}
	}

	return $arr;
}



 ?>
