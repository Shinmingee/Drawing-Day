<?php
include "db.php";

    $email = $_POST['email'];
    //echo $email;

    if($_POST['email'] != NULL){

    $sql = "select * from user where user_id='".$_POST['email']."'";
    
    $result = mysqli_query($db_con, $sql);

    $email_check = mysqli_fetch_array($result);

    // $id_check = mq("select * from member where id='{$_POST['userid']}'");
	// $id_check = $id_check->fetch_array();
    
    
    if($email_check >= 1){
		echo "no";
	} else {
		echo "ok";
    }


	// if($email_check >= 1){
	// 	echo ": 이미 등록된 이메일 입니다";
	// } else {
	// 	echo ": 이메일로 등록합니다";
    // }
    
} ?>