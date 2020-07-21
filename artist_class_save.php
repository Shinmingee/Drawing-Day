<?php
include 'db.php';
include "session.php";

//sql문으로 세션에서 받아온 아이디값을 찾습니다.
$sql = "select * from member where member_id='".$_SESSION['userId']."'";



$result = mysqli_query($db_con, $sql);
$member = mysqli_fetch_array($result);

$class_teacher = $member["member_id"];







$class_title = $_POST['class_title'];

//$class_intro_txt = mysql_real_escape_string($_POST['class_intro_txt']);
$class_intro_txt = $_POST['class_intro_txt'];

$class_tool = $_POST['class_tool'];

//클래스 태마 관련
$check = $_POST['class_theme'];
// POST로 넘어온 값들을 $check에 저장
$array = array($check);
// check의 값들을 새로운 배열에 저장

foreach ($array as $value){
	$class_theme = implode("|",$value);
	// 배열 값들을 "|" 로 나누어서 한 문자열로 저장

	echo "<pre>";
	var_dump($class_theme);
	echo "</pre>";
}



$target_num = $_POST['target_num'];
$class_date = $_POST['class_date'];
$class_time_start = $_POST['class_time_start'];
$class_time_end = $_POST['class_time_end'];
$class_spot = $_POST['class_spot'];

$class_price = $_POST['class_price'];
$date = date("Y-m-d H:i:s");


//메인 파일 넣기
// 설정
$uploads_dir = "ClassMainImg/";
//$uploadfile = $uploads_dir . basename($_FILES['classMainImg']['name']);
$id = "test8";
$uploadfile_name = "class_main_".$id."_".$class_tool;

$uploadfile = $uploads_dir . $uploadfile_name;

$allowed_ext = array('JPG','JPEG','PNG','GIF','jpg','jpeg','png','gif');

// 변수 정리
$error = $_FILES['classMainImg']['error'];
$name = $_FILES['classMainImg']['name'];
$ext = array_pop(explode('.', $name));

echo $ext;
 
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
move_uploaded_file( $_FILES['classMainImg']['tmp_name'], $uploadfile.".".$ext);

$class_main_img = $uploadfile.".".$ext;

// 파일 정보 출력
echo "<h2>파일 정보</h2>
<ul>
    <li>파일명: $name</li>
    <li>저장파일 경로: $uploadfile</li>
	<li>확장자: $ext</li>
	<li>파일형식: {$_FILES['classMainImg']['type']}</li>
	<li>파일크기: {$_FILES['classMainImg']['size']} 바이트</li>
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






echo $class_teacher;
echo $class_title;
echo $class_intro_txt;

//echo $class_main_img;

echo $class_tool;
echo $class_theme;
echo $target_num;
echo $class_date;
echo $class_time_start;
echo $class_time_end;
echo $class_spot;
echo $class_price;
echo $date;





// 중복된 아이디 -> 연락처 -> 이메일 -> isArtist
// $sq = "select * from member where member_id='".$_POST['inputId']."'";  
// $result = mysqli_query($db_con, $sq);
// $id_check = mysqli_fetch_array($result);
$class_index = "class_index_".$class_teacher."_".$class_tool;
$class_status = -1;

$sql = "insert into class_list (member_id, class_index, class_status, main_img, title, intro, drawing_tool, drawing_theme, target_num, spot, start_time, end_time, class_date, price, upload_date) values ('" .$class_teacher. "','" .$class_index. "'," .$class_status.",'".$class_main_img."','".$class_title."','".$class_intro_txt."','".$class_tool."','".$class_theme."',".$target_num.",'".$class_spot."','".$class_time_start."','".$class_time_end."','".$class_date."','".$class_price."','".$date."');";

//$sql = "insert into test (title, intro, drawing_tool, drawing_theme, target_num, class_date, start_time, upload_date) values ('".$class_title."','".$class_intro_txt."','".$class_tool."','".$class_theme."','".$class_date."','".$class_time_start."','".$date."');";

//$sql = "insert into test (title, drawing_tool, drawing_theme, target_num, class_date, start_time, upload_date) values ('".$class_title."','".$class_tool."','".$class_theme."',".$target_num.",'".$class_date."','".$class_time_start."','".$date."');";
//$sql = "insert into test (title, drawing_tool, drawing_theme, target_num, class_date, start_time, upload_date) values ('테스트합니다','paint','person',1,'2020-06-30','15:07','2020-06-17 17:12:57');";
//$sql = "insert into test (intro,upload_date) values ('".$class_intro_txt."','".$date."');";

 
$result = mysqli_query($db_con, $sql);

if($result){
    echo "1";
}else{
    echo "-1";
}


?>