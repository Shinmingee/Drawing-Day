<?php
 include "db.php";

 //$db = new mysqli("localhost","shinmingee", "111","drawingDB");
// $db->set_charset("utf8");

//   if($db){
//     echo '참';
//     }else{
//     echo 'ggg';
//     }

//   function mq($sql)
// 	{
// 		global $db;
// 		//$result = mysqli_query($db_con, $sql);
// 		return $db->query($sql);
	 
// 	}

    $inputId='test00';
    $inputPassword='111';
    $inputName='홍길동';
    $inputPhone='010-1111-1234';
    $inputEmail='test@test.com';
    $isArtist='artist';
  


   $sql = "insert into member (member_id, password, name, phone_num, email, isArtist) values ('".$inputId."','".$inputPassword."','".$inputName."','".$inputPhone."','".$inputEmail."','".$isArtist."')";
    //"insert into member (member_id, password, name, phone_num, email, isArtist) values ('test','111','홍길동','010-1111-1234','test@test.com','artist')"
    //$sql = "insert into member (member_id, password, name, phone_num, email, isArtist) values ('test111','123','홍길동','010-1234-5678','test@test.com','artist')";

    echo $sql;

    // $result = $db->query($sql);

    $result = mysqli_query($db_con, $sql);
    //$result = mq($sql);

    //echo $result;

    if($result){
        echo "1";
    }else{
        echo "-1";
    }

    // $re = $db->query($sql);
    
    // if($result){
    //     echo "1";
    // }else{
    //     echo "-1";
    // }

    //$db->close($db);

    mysqli_close($db_con);
?>