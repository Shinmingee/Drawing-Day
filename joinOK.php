<?php
  include "db.php";
  // include "./password.php";

  $inputNickname = $_POST['inputNickname'];
  $inputPassword = password_hash($_POST['inputPassword'],PASSWORD_DEFAULT);
  $inputName = $_POST['inputName'];
  
  $inputEmail = $_POST['inputEmail'];

  $check_privit = $_POST['check_privit'];
  $check_using = $_POST['check_using'];
  
  // echo $inputId;
  // echo $inputPassword;
  // echo $inputName;
  // echo $inputPhone;
  // echo $inputEmail;
  echo "개인정보".$check_privit;
  echo "이용약관".$check_using;
  echo "개인정보 길이>>".strlen($check_privit);
  echo "이용약관 길이>>".strlen($check_using);

  
    //약관동의 했어?! ㅇ ㅇ

    // 중복된 이메일 -> 이름 -> 닉네임 
    $sq = "select * from user where user_id='".$_POST['inputEmail']."'";
    $result = mysqli_query($db_con, $sq);
    $email_check = mysqli_fetch_array($result);

    if($email_check >= 1){
      echo "<script>alert('이미 등록된 이메일입니다.'); history.back();</script>";
    }else{
      //이름
      $sq = "select * from user where name='".$_POST['inputName']."'";  
      $result = mysqli_query($db_con, $sq);
      $name_check = mysqli_fetch_array($result);
    
      if($name_check >= 1){
        echo "<script>alert('이미 가입하셨습니다.'); history.back();</script>";
      } else {
        
        //닉네임
        $sq = "select * from user where nick_name='".$_POST['inputNickname']."'";
        $result = mysqli_query($db_con, $sq);
        $nick_check = mysqli_fetch_array($result);

        if($nick_check>=1){
          echo "<script>alert('닉네임이 중복됩니다.'); history.back();</script>";
        }else{

          if(strlen($check_privit)>0 && strlen($check_using)>0){
          $sql = "insert into user (user_id, password, name, nick_name) values ('".$inputEmail."','".$inputPassword."','".$inputName."','".$inputNickname."');";
          
          
          mysqli_query($db_con, $sql);

          }
 


mysqli_close($db_con);


  ?>


<!-- <!DOCTYPE html>
<html lang="en">

<head> -->

  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=""> -->
  <script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
  <meta http-equiv="refresh" content="0 url=/drawingDay/login_page.php" >

<?php } ?>
<?php } ?>
<?php } ?>

 