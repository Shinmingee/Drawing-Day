<?php

//모든 페이지에 들어갈 코드입니다. include 함수로 각 페이지에서 불러올 것입니다.
//세션의 userId 값이 있다면, 즉 로그인 상태라면 $jb_login에 TRUE를 할당합니다.

session_start();

  if( isset( $_SESSION[ 'userId' ] ) ) {
    $jb_login = TRUE;
  }else{
    $jb_login = false;
  }


?>