<!-- 데이터 베이스에 있는 정보값으로 세션값을 넘기면 끝 -->

<meta charset="utf-8" />
<?php	
	include "db.php";
	include "session.php";
    // include "../password.php";
    
    if(!$jb_login){
        // 로그인이 되어 있지 않았을 때 처리
    
        echo "<script>alert('로그인해주세요.'); location.href='/drawingDay/login_page.php';</script>";

    }else{
        // 로그인 체크
        $flg = false;

    //DB에 저장되어 있는 값 - 세션에 저장되어 있는 값 비교

    //sql문으로 POST로 받아온 아이디값을 찾습니다.
    $sql = "select * from user where user_id='".$_SESSION['userId']."'";
    $result = mysqli_query($db_con, $sql);
    $member = mysqli_fetch_array($result);


    if($_SESSION['userId'] == $member["user_id"] and $_SESSION['userPw'] == $member["password"]
    and $_SESSION['userNick'] == $member["nick_name"]){
        $flg = true;
    }

    }

    mysqli_close($db_con);

?>