<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


if($_POST['email'] != NULL){

require '/usr/local/apache2.4/htdocs/PHPMailer/libphp-phpmailer/src/Exception.php';
require '/usr/local/apache2.4/htdocs/PHPMailer/libphp-phpmailer/src/PHPMailer.php';
require '/usr/local/apache2.4/htdocs/PHPMailer/libphp-phpmailer/src/SMTP.php';

$to = $_POST['email'];

$random = generateRandomString();



$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch $mail->IsSMTP(); // telling the class to use SMTP

try {

$mail->IsSMTP(); // telling the class to use SMTP
$mail->CharSet = "utf-8";   //한글이 안깨지게 CharSet 설정
$mail->Encoding = "base64";
$mail->Host = "smtp.gmail.com"; // email 보낼때 사용할 서버를 지정
$mail->SMTPAuth = true; // SMTP 인증을 사용함
$mail->Port = 465; // email 보낼때 사용할 포트를 지정
$mail->SMTPSecure = "ssl"; // SSL을 사용함
$mail->Username = "gkgkgk0204@gmail.com"; // Gmail 계정
$mail->Password = "djfdmaanf159#"; // 패스워드
$mail->SetFrom('gkgkgk0204@gmail.com', 'drawingday'); // 보내는 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
$mail->AddAddress($to); // 받을 사람 email 주소와 표시될 이름 (표시될 이름은 생략가능)
$mail->Subject = '[Drawing-Day]이메일 인증'; // 메일 제목
$mail->Body =
"이메일 인증 문자입니다\n".$random; // 내용
$mail->Send(); // 발송

echo $random;

 }
catch (phpmailerException $e) {
                        echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
                        echo $e->getMessage(); //Boring error messages from anything else!
}


}


function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>

