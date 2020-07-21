<?php
if ($_FILES["upload"]["size"] > 0 ){

    // 현재시간 추출
    $date_filedir = date("YmdHis");
    $random_name = 

    //오리지널 파일 이름.확장자
    //$ext 확장자를 저장하는 변수
    //strrchr() : .이후의 문자열을 return,
    //substr() :두번째 문자에서 끝까지 return
    //즉 확장자만 리턴시킨다
    $ext = substr(strrchr($_FILES["upload"]["name"],"."),1);


    //소문자로 바꾼다
    $ext = strtolower($ext);
    //날짜를 덧붙여서 파일이름을 만든다
    //str_replace(): 파일면에 ""공백이 있으면 "-"로 대체
    
    //$savefilename = $date_filedir."_".str_replace(" ", "_", $_FILES["upload"]["name"]);

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }//http://blog.devez.net/285

    $savefilename = $date_filedir."_".generateRandomString()."_.".$ext;
    
    //str_replace(" ", "_", $_FILES["upload"]["name"]);


    //$uploadpath  = $_SERVER['DOCUMENT_ROOT']."/upload/images"; 이거 안됨

    //$uploadpath : upload.php가 있는 폴더를 기준으로 이미지가 저장될 폴더를 지정
    //즉 upload.php가 upload 폴더 안에 있다면  upload/안에 images폴더를 만들면 된다
    $uploadpath = "./images/";

    //내 호스트(즉 root디렉토리)아래에 이미지가 저장될 /upload/images/ 가 있어야 함
    $uploadsrc = $_SERVER['HTTP_HOST']."/upload/images/";

    $http = 'http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on') ? 's' : '') . '://';

    //php 파일업로드하는 부분
    if($ext=="jpg" or $ext=="gif" or $ext =="png"){
        if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadpath."/".iconv("UTF-8","EUC-KR",$savefilename))){
            $uploadfile = $savefilename;
            echo "<script type='text/javascript'>alert('업로드성공: ".$savefilename."');</script>;";
        }
    }else{
        echo "<script type='text/javascript'>alert('jpg,gif,png파일만 업로드가능합니다.');</script>;";
    }

}else{
    exit;
 }

echo "<script type='text/javascript'> window.parent.CKEDITOR.tools.callFunction({$_GET['CKEditorFuncNum']}, '".$http.$uploadsrc."$uploadfile');</script>;";


