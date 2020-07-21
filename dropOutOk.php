<!-- 데이터 베이스에 있는 정보값으로 세션값을 넘기면 끝 -->

<meta charset="utf-8" />
<?php	
	include "db.php";
	include "session.php";
	// include "../password.php";


	if ( $jb_login ) {
        $userid = $_SESSION['userId'];

        $sql = "delete from user where user_id='".$userid."';";
       

        $result = mysqli_query($db_con, $sql);

        session_destroy();
        

        echo "<script>alert('회원탈퇴 완료.'); location.href='/drawingDay/home.php';</script>";

		
    }else{
        //세션에 값이 없는 경우,
        echo "<script>alert('로그인 해주세요.'); location.href='/drawingDay/login_page.php';</script>";
    }
    
    mysqli_close($db_con);
?>