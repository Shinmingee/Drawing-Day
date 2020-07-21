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

 <!-- Custom styles for this template -->
 <link href="css/modern-business.css" rel="stylesheet">
 <link href="css/my_class_page.css" rel="stylesheet">

</head>

<body>


 <!-- Navigation -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark-edit fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index_artist.php">Drawing-Day</a>
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
    <h1 class="mt-4 mb-3">
      <small></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index_artist.php">Home</a>
      </li>
      <li class="breadcrumb-item active">내 클래스 관리</li>
    </ol>

    <!-- Content Row -->
    <div class="row">

      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
        <div class="list-group">
          <a href="myClassPage.php" class="list-group-item">내 클래스 목록</a>
          <a href="createClassPage.php" class="list-group-item">클래스 개설하기</a>
          <a href="contact.html" class="list-group-item">수강생 관리</a> 
          <!-- <a href="classPage.html" class="list-group-item">내 정보 수정</a>
          <a href="about.html" class="list-group-item">작가 등록</a> -->

          </div>
      </div>
      <!-- Sidebar Column END -->

      <!-- Content Column -->
      <div class="col-lg-9 mb-4">

        <!-- Page Content -->
  <div class="container">

    
<!-- Project One -->
<div class="row">
<div>
<?php

include "db.php";
// select * from board_free order by b_no desc;
$sql = "select * from class_list where member_id='".$_SESSION['userId']."' order by upload_date desc";
$result = mysqli_query($db_con, $sql);

//$row = mysqli_fetch_array($result); 

while($row = mysqli_fetch_assoc($result)){
 
  $row['class_status'];

  $title = $row['title'];

  //echo $class_main_img;
  if(strlen($title)>30){ 
  $title=str_replace($row['title'],mb_substr($row['title'],0,30,"utf-8")."...",$row['title']);
  }

  // echo $class_tool;
  // echo $class_theme;
  // echo $target_num;
  // echo $class_date;
  // echo $class_time_start;
  // echo $class_time_end;
  // echo $class_spot;
  // echo $class_price;
  //echo $row['class_index'];
  // $class_status;
  // echo $date;

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

  

?>

<?php
if($row['class_status']==-1){
  echo "<p> 수업 심사 중</p>";
}elseif($row['class_status']==0){
  echo "<p> 모집 진행중</p>";
}elseif($row['class_status']==1){
  echo "<p> 모집 완료</p>";
}elseif($row['class_status']==2){
  echo "<p> 수업 종료</p>";
}


?>

<a href="#">
  <h3 style="vertical-align: bottom; margin-top: 10px;">
  <?php 
  $title
  ?>
  </h3>
  </a>
</div>

<div class="create_class_content">
<div class="col-md-5">

<div class = "class_list_img_size" style="margin-top: 20px;">
<?php
  echo '<a href=./classDetailPage.php?index='.$row['class_index'].'>';
  
  echo '<img width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src='.$row['main_img'].' alt=""/>';
  echo '</a>';
?>
</div>

</div> <!-- class="col-md-5" END-->

<div class="col-md-6">

<div><h3>
<?php
echo $title
?>
</h3></div>

<table style="margin-top: 20px; margin-left: 10px; background-color: red;">
    <tr style="background-color: FFF;">
        <td width = "130" style="font-size: 8px;">첫 수업날짜</td>
        <td width = "150" style="font-size: 8px;">드로잉분야</td>
        <td width = "80" style="font-size: 8px;">장소</td>
        
    </tr>
    <tr style="background-color: FFF; font-weight: bold; font-size: 20px;">
        <td width = "130" ><?php echo $row['class_date'] ?></td>
        <td width = "150" ><?php echo $tool ?></td>
        <td width = "80"  ><?php echo $row['spot'] ?></td>
        
    </tr>
</table>

<table style="margin-top: 5px; margin-bottom: 20px; margin-left: 10px;">
    <tr style="background-color: FFF;">
        <td width = "100" style="font-size: 8px;">시간</td>
        <td width = "80" style="font-size: 11px;"> </td>
        <td width = "100" style="font-size: 11px;"> </td>
    </tr>
    <tr style="background-color: FFF; font-weight: bold; font-size: 20px;">
        <td width = "100" ><?php echo $row['start_time'] ?></td>
        <td width = "80" style="text-align: right;"><?php echo $row['price'] ?></td>
        <td width = "100" style="font-size: 15px; font-weight: bolder;">원(시간 당)</td>
        
    </tr>
</table>

<div style="margin-top: 15px; text-align: right;">
    <a class="btn btn-primary" href="#">수정
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>

    <a class="btn btn-primary" href="#">삭제
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
    <br>
    <br>
    <?php
    echo '<p style="font-size: smaller">클래스 개설 신청일 : '.$row['upload_date'].'</p>';
    ?>
</div>



</div> <!-- class="col-md-6" END-->

</div> <!-- create_class_content END -->

</div> <!-- /.row -->

<hr>
<?php
}
?>

<!-- Project Two -->
<!-- <div class="row">
  <div class="col-md-7">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
    </a>
  </div>
  <div class="col-md-5">
    <h3>Project Two</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
    <a class="btn btn-primary" href="#">View Project
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div> -->
<!-- /.row -->

<!-- <hr> -->

<!-- Project Three -->
<!-- <div class="row">
  <div class="col-md-7">
    <a href="#">
      <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
    </a>
  </div>
  <div class="col-md-5">
    <h3>Project Three</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
    <a class="btn btn-primary" href="#">View Project
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div> -->
<!-- /.row -->

<!-- <hr> -->






</div>
<!-- /.container -->
        <!-- <iframe name="myClass-main", id="myClass-main", title="마이페이지 메인" src="testPage.php" 
        width="100%" height="100%" frameborder="0" scrolling="no" marginwidth="0" 
        marginheight="0" allowtransparency="true" allowfullscreen="" style="height: 1800px; width: 98%;">
    
    
        </iframe> -->

        <hr>
  
  <!-- Pagination -->
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>

</div>
<!-- div class="col-lg-9 mb-4" END -->

</div>

<!-- Content row END --> 

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

</body>

</html>
