<?php
  include "loginCheck.php";
  //include "session.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>마이페이지-작가</title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <script type="text/javascript" src="editor/ckeditor/ckeditor.js"></script>


 <!-- Custom styles for this template -->
 <link href="css/modern-business.css" rel="stylesheet">
 <link href="css/create_class.css" rel="stylesheet">


</head>

<body>

 <!-- Navigation -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark-edit fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index_member.php">Drawing-Day</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <span class="nav-link" id="memberInfo">
              <?php
                if($jb_login){

                $userId = $_SESSION['userId'];
                echo $userId."님 환영합니다!";
              }
              ?>
              </span>
            <!-- <a class="nav-link" href="joinPage.php"></a> -->
          </li>
          <li class="nav-item">
          <!-- <a class="nav-link">마이페이지 -->
            <?php
            if($_SESSION['isArtist']=="artist"){
              echo "<a class='nav-link' href='/drawingDay/myPage_artist.php'>마이페이지</a>";
            }
            ?>
           <!-- </a> -->
          </li>
          <li class="nav-item">
          <?php
            if($_SESSION['isArtist']=="artist"){
              echo "<a class='nav-link' href='/drawingDay/myClassPage.php'>내 클래스 관리</a>";
            }
          ?>
            <!-- <a class="nav-link" href="contact.html"></a> -->
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="contact.html"></a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              그림도구별
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="classPage.html">유화/수채화</a>
              <a class="dropdown-item" href="portfolio-2-col.html">색연필/마카/펜</a>
              <a class="dropdown-item" href="portfolio-3-col.html">파스텔</a>
              <a class="dropdown-item" href="portfolio-4-col.html">태블릿/폰</a>
              <a class="dropdown-item" href="portfolio-item.html">기타</a>
            </div>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.html">Blog Post</a>
            </div>
          </li> -->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              그림주제별
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="full-width.html">인물</a>
              <a class="dropdown-item" href="sidebar.html">사물/소품</a>
              <a class="dropdown-item" href="faq.html">풍경</a>
              <a class="dropdown-item" href="404.html">공간</a>
              <a class="dropdown-item" href="pricing.html">기타</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">내 클래스 관리
      <small>작가</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index_artist">작가정보입력 >> </a>
        <a>수업 계획서 작성 >> </a>
        <a>작가등록 완료</a>
      </li>
    
    </ol>

    <!-- Content Row -->
    <!-- <div class="row"> -->

      <!-- Sidebar Column -->
      <!-- <div class="col-lg-3 mb-4">
        <div class="list-group">
          <a href="myClassPage.php" class="list-group-item" target="myClass-main">내 클래스 목록</a>
          <a href="createClassPage.php" class="list-group-item" target="myClass-main">클래스 개설하기</a>
          <a href="contact.html" class="list-group-item">수강생 관리</a> 
      

          </div>
      </div> -->
      <!-- Sidebar Column END -->

      <!-- Content Column -->
      <div class="col-lg-9 mb-4">

  
  <!-- Page Content -->
  <div class="container">
 
    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <!-- <div class="row"> -->
      <!-- <div class="col-lg-8 mb-4"> -->
        <h4><br>작가 정보 입력<br><br></h4>
          <div class="class_create_section_border">

          <section class="class_create_section">
          <form enctype="multipart/form-data" name="aritst_regi_form" id="aritst_regi_form" action="save_artist_regi.php" method="POST">

          <!-- <hr style="margin-bottom: 0px;"> -->
          <p class="class_create_title">◈ 핸드폰 인증</p>

          <div class="control-group form-group">
            <div class="controls">
              <!-- <label>핸드폰 인증</label> -->
              <input type="text" name="aritst_regi_phone" id="aritst_regi_phone" class="form-control" placeholder="핸드폰 번호를 인증해주세요" required>
              <button style="font-size: small;" class="btn btn-primary">핸드폰 인증</button>
              <p class="help-block"></p>
            </div>
          </div>

          <p class="class_create_title">◈ 프로필 사진</p>

          <div class="control-group form-group">
            <div class="controls">
                <!-- <label>프로필 설정</label> -->
                <br>
                <input type="file" name="aritst_regi_profile" id="aritst_regi_profile" required>
                <!-- <button style="font-size: small;" class="btn btn-primary">프로필 사진 선택</button> -->
                <div id='preview'>
                <!-- 미리보기 공간 -->
                </div>
            </div>
           </div>

           <p class="class_create_title">◈ 사용 별명</p>

          <div class="control-group form-group">
            <div class="controls">
                <!-- <label>별명 설정</label> -->
                <input type="text" name="aritst_regi_nick" id="aritst_regi_nick" class="form-control" placeholder="자신을 잘 나타낼 수 있는 별명을 입력해주세요" required>
                <!-- <button style="font-size: small;" class="btn btn-primary">프로필 사진 선택</button> -->
            </div>
           </div>


           <p class="class_create_title">◈ 신분증 인증<br>(신분증은 주민등록증, 운전면허증, 여권만 가능합니다.)</p>
          <div class="control-group form-group">
            <div class="controls">
                
                <!-- <label></label> -->
                <br>
                <input type="file" name="aritst_regi_id" id="aritst_regi_id" required>
            <div id='preview'>
                <!-- 미리보기 공간 -->
            </div>
            </div>
          </div>

          <p class="class_create_title">◈ 학력<br>(학력인증은 재학증명서,휴학증명서,졸업증명서로만 가능합니다)</p>

          <div class="control-group form-group">
            <div class="controls">
              <label>학력(대학)</label>
              <br>
              <input type="text" name="aritst_regi_univ">대학교<input type="text" name="aritst_regi_univ_major">전공<input type="file" name="aritst_regi_univ_file">
              <!-- <input type="text" name="class_title" id="class_title" class="form-control" required> -->
              <p class="help-block"></p>
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>학력(대학원)</label>
              <br>
              <input type="text" name="aritst_regi_gradu">대학원<input type="text" name="aritst_regi_gradu_major">전공<input type="file" name="aritst_regi_gradu_file">
              <!-- <input type="text" name="class_title" id="class_title" class="form-control" required> -->
              <p class="help-block"></p>
            </div>
          </div>


          <p class="class_create_title">◈ 활동(경력)<br>(자신의 활동내역을 드러낼 수 있으면 됩니다.)</p>
          <div class="control-group form-group">
            <div class="controls">
              <label></label>
              <br>
              <li>SNS 계정 : <input type="text" name="aritst_regi_gradu"></li>
              <li>블로그 주소 : <input type="text" name="aritst_regi_gradu_major"></li>
              <li>유투브 주소 : <input type="text" name="aritst_regi_gradu_file"></li>
              <!-- <input type="text" name="class_title" id="class_title" class="form-control" required> -->
              <p class="help-block"></p>
            </div>
          </div>

          <p class="class_create_title">◈ 기타(포트폴리오)</p>

          <div class="control-group form-group">
            <div class="controls">
              <label>기타 자료</label>
              <br>
              <input type="file" name="aritst_regi_portfolio">
              <!-- <input type="text" name="class_title" id="class_title" class="form-control" required> -->
              <p class="help-block"></p>
            </div>
          </div>
          
          <br>
          <br>
          <button class="btn btn-primary" name="aritst_regi_tmp_save" id="aritst_regi_tmp_save">임시저장</button>
          <button type="submit" class="btn btn-primary" name="aritst_regi_btn" id="aritst_regi_btn">작가등록 신청</button>
        </form>

        </section>
        <!-- </div> -->
      
    <!-- </div> -->

    <!-- </div> -->
    <!-- /.row -->

  </div>
  <!-- /.container -->

</div>

  </div>
<!-- div class="col-lg-9 mb-4" END -->

</div>

<!-- Content row END --> 



<!-- Footer -->
<footer class="py-5 bg-dark">
<div class="container">
  <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
</div>
<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
CKEDITOR.replace('class_intro_txt');
</script>

<script type="text/javascript" src="js/createArtistInfo.js"></script>


<script>

//날짜 정할 때, 오늘날짜 이후로만 정할 수 있게 막아놈
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("class_date").setAttribute("min", today);

</script>
</body>

</html>


