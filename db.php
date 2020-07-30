<?php
	// session_start();
	

	// localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, post_board="DB이름"
    //$db = new mysqli("localhost","web","1234","post_board"); 
	
	$mysql_username = 'shinmingee';
	$mysql_password = '111';
	$mysql_dbname = 'drawingDB';
	//$mysql_table = 'member';

	$db_con = mysqli_connect("127.0.0.1", $mysql_username, $mysql_password,$mysql_dbname);

	//$db = new mysqli("localhost","shinmingee", "111","drawingDB");
	//$db->set_charset("utf8");

	// if($db_con){
	// 	echo '참';
	// 	}else{
	// 	echo 'ggg';
	// 	}
	
	mysqli_select_db($db_con, $mysql_dbname) or die('DB선택 실패');



	
	

?>



