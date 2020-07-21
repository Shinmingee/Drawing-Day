<?php
include "db.php";

    $userphone = $_POST['userphone'];
    //echo $userphone;

    if($_POST['userphone'] != NULL){

    $sql = "select * from member where phone_num='".$_POST['userphone']."'";
    
    $result = mysqli_query($db_con, $sql);

    $phone_check = mysqli_fetch_array($result);

    // $id_check = mq("select * from member where id='{$_POST['userid']}'");
	// $id_check = $id_check->fetch_array();
    
    
    if($phone_check >= 1){
		echo "no";
	} else {
		echo "ok";
    }

	// if($phone_check >= 1){
	// 	echo ": 이미 등록된 연락처 입니다";
	// } else {
	// 	echo ": 일반 전화번호로 연락처를 등록합니다";
    // }
    
} ?>