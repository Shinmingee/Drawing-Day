<!-- 데이터 베이스에 있는 정보값으로 세션값을 넘기면 끝 -->

<meta charset="utf-8" />
<?php	
	include "db.php";
	include "session.php";
	// include "../password.php";


	if ( $jb_login ) {
		echo "<script>alert('이미 로그인 하셨습니다.'); location.href='/drawingDay/home.php';</script>";
		
    }else{

		//POST로 받아온 아이다와 비밀번호가 비었다면 알림창을 띄우고 전 페이지로 돌아갑니다.
		if($_POST["userid"] == "" || $_POST["userpw"] == ""){
			echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
		}else{

		//password변수에 POST로 받아온 값을 저장하고 
		$password = $_POST['userpw'];
		//$userId = $_POST['userid'];
    
    	//sql문으로 POST로 받아온 아이디값을 찾습니다.
    	$sql = "select * from user where user_id='".$_POST['userid']."'";
    
    	$result = mysqli_query($db_con, $sql);

//       if($result){
//     echo "1";
// }else{
//     echo "-1";
// }

    // while($info=mysqli_fetch_array($result)){
    // echo $info[$mysql_col1]."|";
    // echo $info[$mysql_col2]."|";
    // echo $info[$mysql_col3]."|";
    // echo $info[$mysql_col4]."<br/>\n";
    // }

    	$user = mysqli_fetch_array($result);




//$member = $sql->fetch_array();
    

		$hash_pw = $user['password']; //$hash_pw에 POSt로 받아온 아이디열의 비밀번호를 저장합니다. 

			if(password_verify($password, $hash_pw)) //만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림창을 띄운후 main.php파일로 넘어갑니다.
			{
				$_SESSION['userId'] = $user["user_id"];
				$_SESSION['userPw'] = $user["password"];
				$_SESSION['userNick'] = $user["nick_name"];

				// $_SESSION['isArtist'] = $member["isArtist"];

				// if($member["isArtist"]=="artist"){
				// 	echo "<script>alert('[작가]로 로그인되었습니다.'); location.href='/drawingDay/index_member.php';</script>";
				// }elseif($member["isArtist"]=="member"){
				// 	echo "<script>alert('로그인되었습니다.'); location.href='/drawingDay/index_member.php';</script>";
				// }
				echo "<script>alert('로그인되었습니다.'); location.href='/drawingDay/home.php';</script>";
				
				
			}else{ // 비밀번호가 같지 않다면 알림창을 띄우고 전 페이지로 돌아갑니다

       			echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";

    		}
    
			mysqli_close($db_con);
		}
	}
?>