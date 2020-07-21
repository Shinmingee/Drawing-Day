<?php
include "db.php";

    $username = $_POST['username'];
    //echo $id;

    if($_POST['username'] != NULL){

    $sql = "select * from user where name='".$_POST['username']."'";
    
    $result = mysqli_query($db_con, $sql);

    $id_check = mysqli_fetch_array($result);

    // $id_check = mq("select * from member where id='{$_POST['userid']}'");
	// $id_check = $id_check->fetch_array();
    

	if($id_check >= 1){
		echo "no";
	} else {
		echo "ok";
    }
    
} ?>