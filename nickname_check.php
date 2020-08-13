<?php
include "db.php";

//닉네임 중복확인
//user에 있는 닉네임 + artist_list에 있는 닉네임 둘다 비교



$nickname = $_POST['usernick'];
    //echo $id;

    if($_POST['usernick'] != NULL){

    $sql = "select * from user where nick_name='".$_POST['usernick']."'";
    
    $result = mysqli_query($db_con, $sql);

    $nickname_check = mysqli_fetch_array($result);

    // $id_check = mq("select * from member where id='{$_POST['userid']}'");
	// $id_check = $id_check->fetch_array();
    

	if($nickname_check >= 1){
        //  $sql2 = "select * from artist_list where artist_nickname='".$_POST['usernick']."'";
    
        //  $result2 = mysqli_query($db_con, $sql2);

        //  $nickname_check2 = mysqli_fetch_array($result2);

        // if($nickname_check2 >= 1){
            echo "no";
        // } else{
        //     echo "ok";
        // }
		
	}else{
         $sql2 = "select * from artist_list where artist_nickname='".$_POST['usernick']."'";
    
         $result2 = mysqli_query($db_con, $sql2);

         $nickname_check2 = mysqli_fetch_array($result2);

        if($nickname_check2 >= 1){
		    echo "no";
        } else{
            echo "ok";
        }
    }
    
    }?>