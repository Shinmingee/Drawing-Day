<?php
include "db.php";
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>member-login</title>

  <!-- Bootstrap core CSS
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/login-page.css" rel="stylesheet">


</head>

<body>
  
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark-edit fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Drawing-Day</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="joinPage.php">회원가입</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="loginPage.php">로그인</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
        <div class="Header">
            <div class="navLogo">
                <!-- <a href="index.php">
                    <p style="color:white;">회원가입</p>
                </a> -->
            </div>
    
        </div>
    
    </header>

<!-- Page Content -->
<div class="container">

<div class=loginInfo style="margin-bottom: 50px;" >

<section class="loginForm">
<form action="loginOK.php" method="POST">
    
    <div class="h4-name-center">
        <h4 style="font-weight: bold;">Drawing-Day 에 오신 것을 환영합니다</h4><br>
    </div>

    <div class="form-group">
        <div>
        <label for="userid">아이디</label>
        </div>
        <input type="text" class="form-control" name="userid" placeholder="아이디를 입력하세요" required>
        <div style="margin-top: 3px;">
        </div>
    </div>
    
    <div class="form-group">
        <label for="userpw">비밀번호</label>
        <input type="password" class="form-control" name="userpw" placeholder="비밀번호를 입력하세요" required>
        <div style="margin-top: 10px; font-size: smaller; color: brown;">
        <a href="find_id_pw.php">    
        아이디, 비밀번호를 잊어버리셨나요?
        </a>
        </div>
    </div>
    
    <div class="login-btn-center">
    <button type="submit" class="btn btn-primary" id="join-submit" style="margin-top: 8px; background-color: darkcyan; border-color: darkcyan;" >로그인</button>
</div>

    <div class="login-first-coming-ment">
     <a href="joinPage.php">
     회원가입
     </a>
    </div>
</form>
</section>
</div>
</div>

<div class = "footer">
<footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
</footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

    </body>
</html>
