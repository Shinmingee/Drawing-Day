<?php
include "db.php";

    $nickname = $_POST['usernick'];
    //echo $id;

    if($_POST['usernick'] != NULL){

    $sql = "select * from user where nick_name='".$_POST['usernick']."'";
    
    $result = mysqli_query($db_con, $sql);

    $nickname_check = mysqli_fetch_array($result);

    // $id_check = mq("select * from member where id='{$_POST['userid']}'");
	// $id_check = $id_check->fetch_array();
    

	if($nickname_check >= 1){
		echo "no";
	} else {
		echo "ok";
    }
    
} ?>