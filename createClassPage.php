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

    <!-- <ol class="breadcrumb"> -->
      <!-- <li class="breadcrumb-item">
        <a>작가정보입력 >> </a>
        <a href="index_artist">수업 계획서 작성 >> </a>
        <a>작가등록 완료</a>
      </li> -->
    
    <!-- </ol> -->

    <!-- Content Row -->
    <div class="row">

      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
        <div class="list-group">
          <a href="myClassPage.php" class="list-group-item" target="myClass-main">내 클래스 목록</a>
          <a href="createClassPage.php" class="list-group-item" target="myClass-main">클래스 개설하기</a>
          <a href="contact.html" class="list-group-item">수강생 관리</a> 
      

          </div>
      </div>
      <!-- Sidebar Column END -->

      <!-- Content Column -->
      <div class="col-lg-9 mb-4">

  
  <!-- Page Content -->
  <div class="container">
 
    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <!-- <div class="col-lg-8 mb-4"> -->
        <h4><br>수업 계획서<br><br></h4>
          <div class="class_create_section_border">
          <section class="class_create_section">
          <form enctype="multipart/form-data" name="class_create_form" id="class_create_form" action="save.php" method="POST">

          <!-- <hr style="margin-bottom: 0px;"> -->
          <p class="class_create_title">◈ 수업 정보</p>

          <div class="control-group form-group">
        <div class="controls">
          <label>대표사진</label>
          <br>
          <input type="file" name="classMainImg" id="classMainImg" required>
          <div id='preview'>
        <!-- 미리보기 공간 -->
          </div>

        </div>
      <!-- </div> -->

          <div class="control-group form-group">
            <div class="controls">
              <label>수업 제목</label>
              <input type="text" name="class_title" id="class_title" class="form-control" required>
              <p class="help-block"></p>
            </div>
          </div>

        <!-- 여긴 편집툴을 사용하는 게 좋을 듯 -->
          <div class="control-group form-group">
            <div class="controls">
              <label>소개글</label>
              <textarea name="class_intro_txt" id="class_intro_txt" class="form-control" rows="10" cols="100" style="resize:none"></textarea>
              
              <p class="help-block"></p>
            </div>
          </div>
 
          <div class="control-group form-group">
        <div class="controls">
          <label>사용할 그림 도구</label>
          <select name="class_tool" id="class_tool" class="form-control" style="width: fit-content;" required>
            <option value="paint">유화/수채화</option>
            <option value="pen">색연필/마카/펜</option>
            <option value="pastel">파스텔</option>
            <option value="digital">태블릿/폰</option>
            <option value="other_tool">기타</option>
          </select>
          <!-- <input type="" class="form-control" name="class_title" id="class_title" required data-validation-required-message="Please enter your name.">
          <p class="help-block"></p> -->
        </div>
      </div>

      <div class="control-group form-group">
        <div class="controls">
          <label>수업 주제</label>
          <br>
          <input type="checkbox" name="class_theme[]" value="person" style="margin-left: 5px;"/>
          인물
          
          <input type="checkbox" name="class_theme[]" value="things" style="margin-left: 10px;"/>
          사물/소품

          
          <input type="checkbox" name="class_theme[]" value="landscape" style="margin-left: 10px;"/>
          풍경
          
          
          <input type="checkbox" name="class_theme[]" value="space" style="margin-left: 10px;"/>
          공간
          
          <input type="checkbox" name="class_theme[]" value="other_theme" style="margin-left: 10px;"/>
          기타

          <!-- <select name="class_theme" id="class_theme" class="form-control" style="width: fit-content;" required>
            <option value="person">인물</option>
            <option value="things">사물/소품</option>
            <option value="landscape">풍경</option>
            <option value="space">공간</option>
            <option value="other_theme">기타</option>
          </select> -->

          <!-- <input type="" class="form-control" name="class_title" id="class_title" required data-validation-required-message="Please enter your name.">
          <p class="help-block"></p> -->
        
        </div>
      </div>


          <div class="control-group form-group">
            <div class="controls">
              <label>최대인원</label><br>
              <input type="number" name="target_num" id="target_num" class="class_create_form" style="width: 90px" required>
              명
            </div>
          </div>

        
          <hr style="margin-bottom: 10px;">
          <p class="class_create_title">◈ 수업 시간&장소</p>

          <div class="control-group form-group">
            <div class="controls">
              <label>날짜</label><br>
              <input type="date" name = "class_date" id="class_date" class="class_create_form" required>
              
              <!-- style="width: 50px" id="email" required data-validation-required-message="Please enter your email address."> -->
            
            </div>
          </div>

          

          <div class="control-group form-group">
            <div class="controls">
              <label>시작시간</label><br>
              <input type="time" name="class_time_start" id="class_time_start" class="class_create_form" style="width: 200px" required>
              
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>종료시간</label><br>
              <input type="time" name="class_time_end" id="class_time_end" class="class_create_form" style="width: 200px" required>
              
            </div>
          </div>


          <div class="control-group form-group">
            <div class="controls">
              <label>장소</label>
              <input type="text" name="class_spot" id="class_spot" class="form-control" required>
            </div>
          </div>

          <hr style="margin-bottom: 10px;">
          <p class="class_create_title">◈ 수업 가격</p>

          <div class="control-group form-group">
            <div class="controls">
              <label>수업 금액(시간 당)</label><br>
              <input type="text" name="class_price" id="class_price" class="class_create_form" style="width: 120px" required>
              원
            </div>
          </div>

          <!-- <hr style="margin-bottom: 10px;">
          <p class="class_create_title">◈ 클래스 관련 공지사항</p>

          <div class="control-group form-group">
            <div class="controls">
              <label>공지사항</label>
              <textarea name="class_notice" id="class_notice" rows="10" cols="30" class="form-control" maxlength="999" style="resize:none"></textarea>
              
            </div>
          </div>
          <div id="success"></div> -->
          <!-- For success/fail messages -->
          <br>
          <br>
          <button type="submit" class="btn btn-primary" name="create_class_btn" id="create_class_btn">수업계획서 제출</button>
        </form>

          </section>
        </div>
      
    </div>

    </div>
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

<script type="text/javascript" src="js/createClassPage.js"></script>


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


