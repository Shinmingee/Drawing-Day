<?php
//$mysql_hostname = 'localhost';
$mysql_username = 'shinmingee';
$mysql_password = '111';
$mysql_dbname = 'drawingDB';
$mysql_table = 'member';
$mysql_col1 = 'member_id';
$mysql_col2 = 'password';
$mysql_col3 = 'name';


$db_con = mysqli_connect("127.0.0.1", $mysql_username, $mysql_password,$mysql_dbname);

mysqli_select_db($db_con, $mysql_dbname) or die('DB선택 실패');


if($db_con){
echo '참';
}else{
echo 'ggg';
}

$sql = "insert into member (member_id, password, name, phone_num, email) values ('test89','6789','고길동','010-1212-5688','goodtoday@test.com')";
//$sql="SELECT * FROM testTable";

$result = mysqli_query($db_con, $sql);

if($result){
    echo "1";
}else{
    echo "-1";
}

// while($info=mysqli_fetch_array($result)){
// echo $info[$mysql_col1]."|";
// echo $info[$mysql_col2]."|";
// echo $info[$mysql_col3]."|";
// echo $info[$mysql_col4]."<br/>\n";
// }

mysqli_close($db_con);
?>