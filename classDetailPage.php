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

  <title>수업세부정보</title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <!-- Custom styles for this template -->
 <link href="css/modern-business.css" rel="stylesheet">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<!-- <link rel="stylesheet" href="jquery.rateyo.css"/> -->

<link href="css/class_detail.css" rel="stylesheet">

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
    <h1 class="mt-4 mb-3"><br>
      <small></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">
        <?php
                if($jb_login){
                $userId = $_SESSION['userId'];
                echo "내 클래스";
                }else{
                echo "";
                }
              ?>
        </a>
      </li>
      <li class="breadcrumb-item active"></li>
    </ol>

    <!-- Content Row -->
    <div class="row">

    <?php

    include "db.php";
    // select * from board_free order by b_no desc;
    $index = $_GET['index'];

    //echo $index;

    $sql = "select * from class_list where member_id='".$_SESSION['userId']."' AND class_index='".$index."'";
    $result = mysqli_query($db_con, $sql);

    //$row = mysqli_fetch_array($result); 

    while($row = mysqli_fetch_assoc($result)){
 
    $row['class_status'];

    $title = $row['title'];

    //echo $class_main_img;
    if(strlen($title)>30){ 
    $title=str_replace($row['title'],mb_substr($row['title'],0,30,"utf-8")."...",$row['title']);
    }


    $drawing_tool = $row['drawing_tool'];
  
    if($drawing_tool=="pastel"){
      $tool = "파스텔";
    }elseif ($drawing_tool=="paint") {
      $tool = "유화/수채화";
    }elseif ($drawing_tool=="pen") {
      $tool = "색연필/마카/펜";
    }elseif ($drawing_tool=="digital") {
      $tool = "태블릿/폰";
    }elseif ($drawing_tool=="other_tool") {
      $tool = "기타";
    }



    $drawing_theme = $row['drawing_theme'];
    //문자열 자르기 : 배열로 저장된다.
    $Theme = explode('|' , $drawing_theme);
    // echo $Theme;
    //배열 크기 가져오기 
    $cnt = count($Theme);
    $theme2="";
    for($i = 0 ; $i < $cnt ; $i++){
      $theme=$Theme[$i];
      // echo $theme;
      if (strpos($theme, 'person') !== false) {
        $theme = str_replace("person","인물", $theme);
      }elseif(strpos($theme, 'things') !== false){
        $theme = str_replace("things","사물/소품", $theme);
      }elseif(strpos($theme, 'landscape') !== false){
        $theme = str_replace("landscape","풍경", $theme);
      }elseif(strpos($theme, 'space') !== false){
        $theme = str_replace("space","공간", $theme);
      }elseif(strpos($theme, 'other_theme') !== false){
        $theme = str_replace("other_theme","기타", $theme);
      }
    
      $theme2=$theme."|".$theme2;

    }
    
    $theme3 = str_replace("|",", ", $theme2);
    $theme4 = substr($theme3, 0, -2);
    


    $time = $row['end_time']-$row['start_time'];


  // echo $class_tool;
  // echo $class_theme;
  // echo $target_num;
  // echo $class_date;
  // echo $class_time_start;
  // echo $class_time_end;
  // echo $class_spot;
  // echo $class_price;
  // $class_index;
  // $class_status;
  // echo $date;
  

?>


      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- 메인 사진 넣는 자리 -->
        <?php
            echo '<img width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src='.$row['main_img'].'></img>';
        ?>
        <!-- <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe> -->
      </div>
      <!-- 클래스 정보를 요약해서 넣는 자리 -->
      <div class="col-lg-4 mb-4">
      <?php
        echo '<h3>'.$title.'</h3>';
        echo '<p>드로잉 분야: '.$tool.'<br>드로잉 주제: '.$theme4.'</p>';
      ?>
        
        <!-- 수업 일자, 시간을 붙여서 여기에 넣기(한 달 단위로) -->
        <?php
          echo '<li>수업일자 | 수업시간</li>'
        ?>
        <p><abbr title="장소">장소</abbr>:<?php echo $row['spot']; ?></p>
        
        <hr>
        <button type="button" onclick="location.href='apply_choiceDate.html'">
            수업 신청하기
        </button>
        <button>1:1 문의하기</button>
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-lg-8 mb-4">
      <?php 
      echo '<h3>'.$title.'</h3>';
      ?>
        
        <hr>
        <div class="control-group form-group">
            <label>작가소개</label>
            <div>
                <img src="/image/person.png"/>
                닉네임
                
            </div>
            <li>인증사항</li>
            <ul>인증인증</ul>
            <ul>인증인증</ul>
            <ul>인증인증</ul>
        </div>
        <!-- <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p> 
            </div>
          </div> -->
          <div class="control-group form-group">
            <div class="controls">
              <label>수업소개</label>
              <div id="class_intro_div" style="">
                <!-- 여기에 수업소개 ckeditor로 적은 내용 옮길 것 -->
                <?php
                echo $row['intro'];
                ?>
                
              </div>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>수업 정보</label>
              <li>장소</li>
              <ul><?php echo $row['spot'] ?></ul>
              <li>수업시간</li>
              <ul><?php echo $time ?>시간</ul>
              <li>최대인원</li>
              <ul><?php echo $row['target_num'] ?>명</ul>
            </div>
          </div>

          <hr>

          <div class="control-group form-group">
            <div class="controls">
              <label>리뷰</label>
            <li>전체리뷰</li>
              <div id="rateYo"></div>
            <br>
            <li>수강평</li>
            <div>
                
            </div>
 
            <!-- <script src="jquery.js"></script> -->
            <!-- <script src="jquery.rateyo.js"></script> -->

            </div>
          </div>
          
          

      </div>
<?php
    }
?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
    </footer>
    
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>


  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <script>

  /* Javascript */
 
//Make sure that the dom is ready
$(function () {
 
 $("#rateYo").rateYo({
   rating: 1,
   starWidth: "50px",
   halfStar : true
 });

 $("#rateYo").rateYo("option", "normalFill", "#B0B0B0"); //returns a jQuery Element

});

  </script>



</body>

</html>
