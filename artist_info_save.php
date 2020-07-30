<?php
include 'db.php';
include "session.php";

//세션에서 받아온 아이디 값으로 member_id 값에 넣는다
$aritst_regi_member = $_SESSION['userId'];

//핸드폰
$aritst_regi_phone = $_POST['aritst_regi_phone'];
//프로필사진
//$aritst_regi_profile = $_POST['aritst_regi_profile'];
//별명
$aritst_regi_nick = $_POST['aritst_regi_nick'];
//신분증 사진
//$aritst_regi_id = $_POST['aritst_regi_id'];

//학력_대학이름
$aritst_regi_univ = $_POST['aritst_regi_univ'];
//학력_대학_과
$aritst_regi_univ_major = $_POST['aritst_regi_univ_major'];
//학력_대학_사진
//$aritst_regi_univ_file = $_POST['aritst_regi_univ_file'];

//학력_대학원이름
$aritst_regi_gradu = $_POST['aritst_regi_gradu'];
//학력_대학원_과
$aritst_regi_gradu_major = $_POST['aritst_regi_gradu_major'];
//학력_대학원_사진
//$aritst_regi_gradu_file = $_POST['aritst_regi_gradu_file'];


//sns계정
$aritst_regi_sns = $_POST['aritst_regi_sns'];
//블로그 주소
$aritst_regi_blog = $_POST['aritst_regi_blog'];
//유투브 주소
$aritst_regi_youtube = $_POST['aritst_regi_youtube'];

//기타 pdf
//$aritst_regi_portfolio = $_POST['aritst_regi_portfolio'];

//등록 날짜_현재날짜
$date = date("Y-m-d H:i:s");


//폼에 있는 이미지, pdf 저장


//artist_list table에 넣어야 하니까 그 sql문

//user테이블에 있는 아이디


//$sql = "select * from user where member_id='".$_SESSION['userId']."'";
//$result = mysqli_query($db_con, $sql);


$id = $aritst_regi_member;

//사진파일 서버에 저장

//작가등록 step1 사진 저장 경로
$uploads_dir = "Artist_Regi/";

//프로필 사진 저장시, 
//1.이름
$uploadfile_profile_name = $id."_profile";
//2.업로드 파일 저장경로+이름
$uploadfile_profile = $uploads_dir . $uploadfile_profile_name;

//허용 확장자
$allowed_ext = array('JPG','JPEG','PNG','GIF','jpg','jpeg','png','gif');

//프로필 사진 변수 정리
$error_profile = $_FILES['aritst_regi_profile']['error'];
$name_profile = $_FILES['aritst_regi_profile']['name'];
$ext_profile = array_pop(explode('.', $name_profile));

 // 확장자 확인
if(!in_array($ext_profile, $allowed_ext) ) {
	echo "<script>alert('[프로필 사진] 허용되지 않는 확장자입니다.'); history.back();</script>";
	//echo "허용되지 않는 확장자입니다. profile";
	exit;
}

//프로필 사진 오류 확인
if( $error_profile != UPLOAD_ERR_OK ) {
	switch( $error_profile ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			//echo "프로필사진의 파일이 너무 큽니다. ($error_profile)";
			echo "<script>alert('프로필사진의 파일이 너무 큽니다.($error_profile)'); history.back();</script>";
			break;
		case UPLOAD_ERR_NO_FILE:
			//echo "프로필사진의 파일이 첨부되지 않았습니다. ($error_profile)";
			echo "<script>alert('프로필사진의 파일이 첨부되지 않았습니다. ($error_profile)'); history.back();</script>";
			break;
		default:
			//echo "프로필사진의 파일이 제대로 업로드되지 않았습니다. ($error_profile)";
			echo "<script>alert('프로필사진의 파일이 제대로 업로드되지 않았습니다. ($error_profile)'); history.back();</script>";
	}
	exit;
}

//프로필 파일 이동
move_uploaded_file($_FILES['aritst_regi_profile']['tmp_name'], $uploadfile_profile.".".$ext_profile);
$aritst_regi_profile = $uploadfile_profile.".".$ext_profile;


//신분증 사진 저장시, 
//1.이름
$uploadfile_id_name = $id."_id";
//2.업로드 파일 저장경로+이름
$uploadfile_id = $uploads_dir . $uploadfile_id_name;

//신분증 사진 변수 정리
$error_id = $_FILES['aritst_regi_id']['error'];
$name_id = $_FILES['aritst_regi_id']['name'];
$ext_id = array_pop(explode('.', $name_id));

//확장자 확인
if( !in_array($ext_id, $allowed_ext) ) {
	echo "<script>alert('[신분증 인증] 허용되지 않는 확장자입니다.'); history.back();</script>";
	exit;
}

//신분증 사진 오류 확인
if( $error_id != UPLOAD_ERR_OK ) {
	switch( $error_id ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			//echo "신분증 사진 파일이 너무 큽니다. ($error_id)";
			echo "<script>alert('신분증 인증 파일이 너무 큽니다.($error_id)'); history.back();</script>";
			break;
		case UPLOAD_ERR_NO_FILE:
			//echo "신분증 사진 파일이 첨부되지 않았습니다. ($error_id)";
			echo "<script>alert('신분증 인증 파일이 첨부되지 않았습니다.($error_id)'); history.back();</script>";
			break;
		default:
			//echo "신분증 사진 파일이 제대로 업로드되지 않았습니다. ($error_id)";
			echo "<script>alert('신분증 인증 파일이 제대로 업로드되지 않았습니다. ($error_id)'); history.back();</script>";
	}
	exit;
}
 
//신분증 파일 이동
move_uploaded_file($_FILES['aritst_regi_id']['tmp_name'], $uploadfile_id.".".$ext_id);
$aritst_regi_id = $uploadfile_id.".".$ext_id;

if(strlen($aritst_regi_univ)>0 && strlen($aritst_regi_univ_major)>0){

	//대학교 사진 저장시, 
	//1.이름
	$uploadfile_univ_name = $id."_univ";
	//2.업로드 파일 저장경로+이름
	$uploadfile_univ = $uploads_dir . $uploadfile_univ_name;

	//대학교 사진 변수 정리
	$error_univ = $_FILES['aritst_regi_univ_file']['error'];
	$name_univ = $_FILES['aritst_regi_univ_file']['name'];
	$ext_univ = array_pop(explode('.', $name_univ));

	// 확장자 확인
	if( !in_array($ext_univ, $allowed_ext) ) {
		echo "<script>alert('[학력(대학교) 인증] 허용되지 않는 확장자입니다.'); history.back();</script>";
		exit;
	}

	//대학교 사진 오류 확인
	if( $error_univ != UPLOAD_ERR_OK ) {
		switch( $error_univ ) {
			case UPLOAD_ERR_INI_SIZE:
			case UPLOAD_ERR_FORM_SIZE:
				//echo "대학 첨부 파일이 너무 큽니다. ($error_univ)";
				echo "<script>alert('대학 인증 파일이 너무 큽니다.($error_univ)'); history.back();</script>";
			break;
			case UPLOAD_ERR_NO_FILE:
				//echo "대학 첨부 파일이 첨부되지 않았습니다. ($error_univ)";
				echo "<script>alert('대학 인증 파일이 첨부되지 않았습니다.($error_univ)'); history.back();</script>";
			break;
			default:
				//echo "대학 첨부 파일이 제대로 업로드되지 않았습니다. ($error_univ)";
				echo "<script>alert('대학 인증 파일이 제대로 업로드되지 않았습니다.($error_univ)'); history.back();</script>";
		}
		exit;
	}
 
	//대학교 파일 이동
	move_uploaded_file($_FILES['aritst_regi_univ_file']['tmp_name'], $uploadfile_univ.".".$ext_univ);
	$aritst_regi_univ_file = $uploadfile_univ.".".$ext_univ;

}//대학교 파일 if문 END


if(strlen($aritst_regi_gradu)>0 && strlen($aritst_regi_gradu_major)>0){

	//대학원 사진 저장시  
	//1.이름
	$uploadfile_regi_name = $id."_regi";
	//2.업로드 파일 저장경로+이름
	$uploadfile_regi = $uploads_dir . $uploadfile_regi_name;

	//대학교 사진 변수 정리
	$error_regi = $_FILES['aritst_regi_gradu_file']['error'];
	$name_regi = $_FILES['aritst_regi_gradu_file']['name'];
	$ext_regi = array_pop(explode('.', $name_regi));

	//확장자 확인
	if( !in_array($ext_regi, $allowed_ext) ) {
		echo "<script>alert('[학력(대학원) 인증] 허용되지 않는 확장자입니다.'); history.back();</script>";
		exit;
	}

	//대학교 사진 오류 확인
	if( $error_regi != UPLOAD_ERR_OK ) {
		switch( $error_regi ) {
			case UPLOAD_ERR_INI_SIZE:
			case UPLOAD_ERR_FORM_SIZE:
				//echo "파일이 너무 큽니다. ($error_regi)";
				echo "<script>alert('대학원 인증 파일이 너무 큽니다.($error_regi)'); history.back();</script>";
				break;
			case UPLOAD_ERR_NO_FILE:
				//echo "파일이 첨부되지 않았습니다. ($error_regi)";
				echo "<script>alert('대학원 인증 파일이 첨부되지 않았습니다.($error_regi)'); history.back();</script>";
				break;
			default:
				//echo "파일이 제대로 업로드되지 않았습니다. ($error_regi)";
				echo "<script>alert('대학 인증 파일이 제대로 업로드되지 않았습니다.($error_regi)'); history.back();</script>";
		}
		exit;
	}
	
	//대학원 파일 이동
	move_uploaded_file($_FILES['aritst_regi_gradu_file']['tmp_name'], $uploadfile_regi.".".$ext_regi);
	$aritst_regi_gradu_file = $uploadfile_regi.".".$ext_regi;

}//대학원 if문 END



$name_portfolio = $_FILES['aritst_regi_portfolio']['name'];

if(strlen($name_portfolio)>0){

	//포트폴리오 aritst_regi_portfolio
	$allowed_ext_portfolio = array('pdf','PDF');

	//포트폴리오 사진 변수 정리
	$error_portfolio = $_FILES['aritst_regi_portfolio']['error'];
	//$name_portfolio = $_FILES['aritst_regi_portfolio']['name'];
	$ext_portfolio = array_pop(explode('.', $name_portfolio));

	//1.이름
	$uploadfile_portfolio_name = $id."_portfolio";
	//2.업로드 파일 저장경로+이름
	$uploadfile_portfolio = $uploads_dir . $uploadfile_portfolio_name;


	// 확장자 확인
	if( !in_array($ext_portfolio, $allowed_ext_portfolio) ) {
		//echo "허용되지 않는 확장자입니다. portfolio";
		echo "<script>alert('[포트폴리오] 허용되지 않는 확장자입니다.'); history.back();</script>";
		exit;
	}

	//포트폴리오 사진 오류 확인
	if( $error_portfolio != UPLOAD_ERR_OK ) {
		switch( $error_portfolio ) {
			case UPLOAD_ERR_INI_SIZE:
			case UPLOAD_ERR_FORM_SIZE:
				//echo "파일이 너무 큽니다. ($error_portfolio)";
				echo "<script>alert('포트폴리오 파일이 너무 큽니다.($error_portfolio)'); history.back();</script>";
				break;
			case UPLOAD_ERR_NO_FILE:
				//echo "파일이 첨부되지 않았습니다. ($error_portfolio)";
				echo "<script>alert('포트폴리오 파일이 첨부되지 않았습니다.($error_portfolio)'); history.back();</script>";
				break;
			default:
				//echo "파일이 제대로 업로드되지 않았습니다. ($error_portfolio)";
				echo "<script>alert('포트폴리오 파일이 제대로 업로드되지 않았습니다.($error_portfolio)'); history.back();</script>";
		}
		exit;
	}
	
	//포트폴리오 파일 이동
	move_uploaded_file($_FILES['aritst_regi_portfolio']['tmp_name'], $uploadfile_portfolio.".".$ext_portfolio);
	
	$aritst_regi_portfolio = $uploadfile_portfolio.".".$ext_portfolio;
	
}







// 파일 정보 출력
// echo "<h2>파일 정보</h2>
// <ul>
//     <li>파일명: $name</li> 
//     <li>저장파일 경로: $uploadfile</li>
// 	<li>확장자: $ext</li>
// 	<li>파일형식: {$_FILES['aritst_regi_profile']['type']}</li>
// 	<li>파일크기: {$_FILES['aritst_regi_profile']['size']} 바이트</li>
// </ul>";

// // 파일 압축 메소드 
// function compress($source, $destination, $quality) {
 
// 	$info = getimagesize($source);

// 	if ($info['mime'] == 'image/jpeg') 
// 		$image = imagecreatefromjpeg($source);

// 	elseif ($info['mime'] == 'image/gif') 
// 		$image = imagecreatefromgif($source);

// 	elseif ($info['mime'] == 'image/png') 
// 		$image = imagecreatefrompng($source);

// 	imagejpeg($image, $destination, $quality);

// 	return $destination;
// }

// // 파일 리사이즈 후 복사하기
// $source_img = $_FILES['classMainImg']['tmp_name'];
// $destination_img = $_FILES['classMainImg']['tmp_name'];
// $d = compress($source_img, $destination_img, 90);

// // 파일 정보 출력
// echo "<h2>파일 정보22</h2>
// <ul>
//     <li>파일명: $name</li>
//     <li>저장파일 경로: $uploadfile</li>
// 	<li>확장자: $ext</li>
// 	<li>파일형식: {$_FILES['classMainImg']['type']}</li>
// 	<li>파일크기: {$_FILES['classMainImg']['size']} 바이트</li>
// </ul>";



//기타 pdf
//$aritst_regi_portfolio = $_POST['aritst_regi_portfolio'];


// echo $aritst_regi_member;
// echo $aritst_regi_phone;
// echo $aritst_regi_nick;

// echo $aritst_regi_univ;
// echo $aritst_regi_univ_major;
// echo $aritst_regi_gradu;
// echo $aritst_regi_gradu_major;
// echo $aritst_regi_sns;
// echo $aritst_regi_blog;
// echo $aritst_regi_youtube;
// echo $date;





// 연락처 -> 이메일 -> isArtist


//DB에 넣기
$sql = "insert into artist_list(user_id, artist_tel, artist_profile, artist_nickname, artist_id_photo, artist_univ_name, artist_univ_major, artist_univ_photo, artist_gradu_name, artist_gradu_major, artist_gradu_photo, artist_sns, aritst_youtube, artist_blog, artist_protfolio, artist_regi_date) values ('" .$aritst_regi_member. "','" .$aritst_regi_phone. "'," .$aritst_regi_profile.",'".$aritst_regi_nick."','".$aritst_regi_id."','".$aritst_regi_univ."','".$aritst_regi_univ_major."','".$aritst_regi_univ_file."',".$aritst_regi_gradu.",'".$aritst_regi_gradu_major."','".$aritst_regi_gradu_file."','".$aritst_regi_sns."','".$aritst_regi_youtube."','".$aritst_regi_blog."','".$aritst_regi_portfolio."','".$date."');";

 
$result = mysqli_query($db_con, $sql);

// if($result){
//     echo "1";
// }else{
//     echo "-1";
// }


?>



<meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=""> -->
  <script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
  <meta http-equiv="refresh" content="0 url=/drawingDay/artist_class_info_page.php" >

<?php //} ?>
<?php //} ?>
<?php //} ?>