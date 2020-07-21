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




//메인 파일 넣기
// 설정
//$uploads_dir = "ClassMainImg/";
$id = $aritst_regi_member;

$uploads_dir = "Artist_Regi/";
//$uploadfile = $uploads_dir . basename($_FILES['classMainImg']['name']);

$uploadfile_name = $id."_profile";

$uploadfile = $uploads_dir . $uploadfile_name;

$allowed_ext = array('JPG','JPEG','PNG','GIF','jpg','jpeg','png','gif');

// 변수 정리
$error = $_FILES['aritst_regi_profile']['error'];
$name = $_FILES['aritst_regi_profile']['name'];
$ext = array_pop(explode('.', $name));

//echo $ext;
 
// 오류 확인
if( $error != UPLOAD_ERR_OK ) {
	switch( $error ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			echo "파일이 너무 큽니다. ($error)";
			break;
		case UPLOAD_ERR_NO_FILE:
			echo "파일이 첨부되지 않았습니다. ($error)";
			break;
		default:
			echo "파일이 제대로 업로드되지 않았습니다. ($error)";
	}
	exit;
}
 
// 확장자 확인
if( !in_array($ext, $allowed_ext) ) {
	echo "허용되지 않는 확장자입니다.";
	exit;
}
 
// 파일 이동
move_uploaded_file($_FILES['aritst_regi_profile']['tmp_name'], $uploadfile.".".$ext);

$aritst_regi_profile = $uploadfile.".".$ext;

// 파일 정보 출력
echo "<h2>파일 정보</h2>
<ul>
    <li>파일명: $name</li>
    <li>저장파일 경로: $uploadfile</li>
	<li>확장자: $ext</li>
	<li>파일형식: {$_FILES['aritst_regi_profile']['type']}</li>
	<li>파일크기: {$_FILES['aritst_regi_profile']['size']} 바이트</li>
</ul>";

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








//신분증 사진
//$aritst_regi_id = $_POST['aritst_regi_id'];

//학력_대학_사진
//$aritst_regi_univ_file = $_POST['aritst_regi_univ_file'];

//학력_대학원_사진
//$aritst_regi_gradu_file = $_POST['aritst_regi_gradu_file'];

//기타 pdf
//$aritst_regi_portfolio = $_POST['aritst_regi_portfolio'];


echo $aritst_regi_member;
echo $aritst_regi_phone;
echo $aritst_regi_nick;

//echo $class_main_img;

echo $aritst_regi_univ;
echo $aritst_regi_univ_major;
echo $aritst_regi_gradu;
echo $aritst_regi_gradu_major;
echo $aritst_regi_sns;
echo $aritst_regi_blog;
echo $aritst_regi_youtube;
echo $date;





// 중복된 아이디 -> 연락처 -> 이메일 -> isArtist


// $class_index = "class_index_".$class_teacher."_".$class_tool;
// $class_status = -1;
// $sql = "insert into class_list (member_id, class_index, class_status, main_img, title, intro, drawing_tool, drawing_theme, target_num, spot, start_time, end_time, class_date, price, upload_date) values ('" .$class_teacher. "','" .$class_index. "'," .$class_status.",'".$class_main_img."','".$class_title."','".$class_intro_txt."','".$class_tool."','".$class_theme."',".$target_num.",'".$class_spot."','".$class_time_start."','".$class_time_end."','".$class_date."','".$class_price."','".$date."');";


 
// $result = mysqli_query($db_con, $sql);

// if($result){
//     echo "1";
// }else{
//     echo "-1";
// }


?>