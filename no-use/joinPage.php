
<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <meta http-equiv="Content-Type" content="text/html;charset=utf-8" > -->

  <title>join-member</title>

  <!-- Bootstrap core CSS
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/join-page.css" rel="stylesheet">

 


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

    <div class=userInfo style="margin-bottom: 50px;" >
    
    <section class="joinFrom">
    <form name="artist_join_form" action="joinOK.php" method="POST" onsubmit="return checkSubmit()">
        <div>
            <h4>회원정보 입력</h4><br>
        </div>

        <div class="form-group">
            <div>
            <label for="inputId">아이디</label>
            </div>
            <input type="text" class="form-control" name="inputId" id="inputId" placeholder="사용하실 아이디를 입력하세요" required>
            <div style="margin-top: 3px; font-size: smaller; color: brown;">
               <span id="result_id_msg"></span>
            </div>
            <!-- <div style="margin-top: 3px;">
            <button style="font-size: small; border-radius: 12px; border-width: 1.3px; border-color:teal;" >중복확인</button>
            </div> -->
        </div>
        
        <div class="form-group">
            <label for="inputPassword">비밀번호</label>
            <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="비밀번호는 영문, 특수문자 조합으로 8~16자리로 정하세요" required>
            <div style="margin-top: 3px; font-size: smaller; color: brown;">
                <span id="result_pw_msg"></span>
            </div>
        </div>
        
        <div class="form-group">
            <label for="inputPasswordCheck">비밀번호 확인</label>
            <input type="password" class="form-control" name="inputPasswordCheck" id="inputPasswordCheck" placeholder="비밀번호를 한 번 더 입력하세요" required>
            <div style="margin-top: 3px; font-size: smaller; color: brown;">
                <span id="result_pw_check_msg"></span>
            </div>
        </div>
        
        <div class="form-group">
            <label for="inputName">이름</label>
            <input type="text" class="form-control" name="inputName" id="inputName" placeholder="이름을 입력하세요" required>
        </div>
        
        <div class="form-group">
            <label for="inputPhone">연락처</label>
            <input type="tel" class="form-control" name="inputPhone" id="inputPhone" placeholder="010-1234-5678 와 같은 형식으로 입력해주세요" required>
            <div style="margin-top: 3px; font-size: smaller; color: brown;">
                <span id="result_phone_msg"></span>
            </div>
        </div>
        
        <div class="form-group">
            <div>
            <label for="inputEmail">E-mail</label>
            </div>
            <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="아이디 또는 비밀번호를 찾을 때 필요합니다">
            <div style="margin-top: 3px; font-size: smaller; color: brown;">
                <span id="result_email_msg"></span>
            </div>
            <!-- <div style="margin-top: 3px;">
                <button style="font-size: small; border-radius: 12px; border-width: 1.3px; border-color:teal;" >중복확인</button>
            </div> -->
        </div>
        
        <div class="form-group">
            
            <p class="artist-check-info" style="width: fit-content; margin-bottom: 3px;">
            작가로 가입하기
            <img src = 'image/icons8-help-16.png'>
            </p>
            <p class="artist-check-info-ment" style="font-size: small;" >작가로 가입하기를 체크하시면 작가등록 후, 드로잉 원데이 클래스를 개설 할 수 있습니다.<br>만약 체크를 안하시면 작가등록이 불가능하기 때문에 클래스 개설은 할 수 없습니다.<br></p>
            <label class="form-check-label" style="font-size: small;"><input type="checkbox" name='isArtist' value='artist'> 드로잉 원데이 클래스 개설을 희망합니다</label>
            
        </div>
        
        <!-- <div class="form-group">
            <label for="inputMember">
                가입 회원 구분<br>
                <select name="inputMember">
                    <option value="artist">작가</option>
                    <option value="">프로그래머</option>
                    <option value="planner">기획자</option>
                </select>
            </label>
        </div> -->
        
        <!-- <hr style="margin-top: 25px; margin-bottom: 25px;"> -->


        <button type="submit" class="btn btn-primary" id="join-submit" style="margin-top: 8px; background-color: darkcyan; border-color: darkcyan;" >회원가입</button>

    </form>
</section>
    </div>
    </div>



    <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  
    <script type="text/javascript" src="js/join.js">
    //작가로 가입하기에 대한 호버 적용
        // $(document).ready(function () {
        //     $(".artist-check-info-ment").hide();
        //     $(".artist-check-info").mouseover(function () {
        //         $(".artist-check-info-ment").show();
        //     }
        //     );
        //     $(".artist-check-info").mouseleave(function(){
        //             $('.artist-check-info-ment').hide();
        //             $('.form-check-label')
        //             // removeClass("artist-check-info-ment");
        //         }
        //     );

        // })
    </script>

</body>
</html>