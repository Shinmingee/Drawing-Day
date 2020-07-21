<?php
  // include "loginCheck.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Drawing-Day</title>

  <!-- Bootstrap core CSS
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="css/artist_register_page.css" rel="stylesheet">
  <link rel="stylesheet" href="css/asset_main.css" />

  

</head>

<body>
 

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark-edit fixed-top">
    <div class="container">

    <?php
            if($_SESSION['isArtist']=="artist"){
              echo '<a class="navbar-brand" href="index_member.php">Drawing-Day</a>';
              //echo "<a class='nav-link' href='/drawingDay/myClassPage.php'>내 클래스 관리</a>";
            }elseif($_SESSION['isArtist']=="member"){
              echo '<a class="navbar-brand" href="index_member.php">Drawing-Day</a>';
            }
      ?>

      <!-- <a class="navbar-brand" href="index_artist.php">Drawing-Day</a> -->
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
          <a class="nav-link" href="/drawingDay/myPage_artist.php">마이페이지</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="artistRegisterPage.php">작가등록</a>
          </li>
          <li class="nav-item">
          <?php
            if($_SESSION['isArtist']=="artist"){
              echo "<a class='nav-link' href='/drawingDay/myClassPage.php'>내 클래스 관리</a>";
            }
          ?>
            <!-- <a class="nav-link" href="contact.html"></a> -->
          </li>
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

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> -->
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0"></li> -->
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
      </ol>

      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('http://localhost/drawingDay/image/brushes.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h2 style="color: aliceblue;">여러분의 재능으로<br>
            "Drawing-Day"의 작가로 활동해보세요!<br>
            
            <a href="/drawingDay/createArtistInfo.php" id="class_link">작가등록하기</a>
            

            </h2>
            
          </div>
        </div>

    

    </div>
  </header>

  <!-- Page Content -->
  <div class="container">


    

    <!-- Marketing Icons Section -->
<!-- <div class="row"> -->

<section id="three" class="wrapper align-center">
<h2 class="my-4">작가등록 과정</h2>
<br>
				<div class="inner">
					<div class="flex flex-3">
						<article>
							<div class="image round">
								<img style="width:150px; height:150px;" src ="image/license_step1.png" alt="Pic 01" />
							</div>
							<header>
              <br />
								<h4>[step 1]<br>작가의 정보와<br /> 수업계획을 등록합니다<br /></h4>
							</header>
							<p>3일 내에 인증절차가 이루어집니다<br /><br /></p>
							<footer>
								<!-- <a href="#" class="button">Learn More</a> -->
							</footer>
						</article>
						<article>
							<div class="image round">
								<img style="width:150px; height:150px;" src="image/aritst_step2.png" alt="Pic 02" />
							</div>
							<header>
              <br />
              <h4>[step 2]<br>수업이 오픈되고<br /> 수강생과 매칭이 이루어 집니다</h4>
							</header>
							<p>결제가 이루어진 후 서로간의 연락처가 공개됩니다<br /><br /></p>
							<footer>
								<!-- <a href="#" class="button">Learn More</a> -->
							</footer>
						</article>
						<article>
							<div class="image round">
								<img style="width:150px; height:150px;" src="image/step3.jpg" alt="Pic 02" />
							</div>
							<header>
              <br />
								<h4>[step 3]<br>수업 종료 후<br />  결제금액을 받습니다</h4>
							</header>
							<p>수수료를 제외한 수업료를 3일 내에 지급합니다<br /><br /></p>
							<footer>
								<!-- <a href="#" class="button">Learn More</a> -->
							</footer>
						</article>
					</div>
				</div>
			</section>




<!-- <div class="row_step"> -->
    <!-- <div class="col-lg-4 mb-4">
      <div class="aritstResigster_step">
      
        <div class="aritstResigster_content">
            <p>
                <img style="width:120px; height:130px; align:center;" src ="image/aritst_step1.png">
            </p>
        
             작가의 정보와 수업을 등록하여 인증을 받습니다
             <p style="font-size: smaller;">수업 분야에 맞는 작가님인지 확인하기 위함입니다</p>

            <h4>step 1</h4>
        </div>
        
     </div>
    </div>

    <div class="col-lg-4 mb-4">
      <div class="aritstResigster_step">
      
       <div class="aritstResigster_content">
          <p>
              <img style="width:120px; height:130px; align:center;" src ="image/aritst_step1.png">
          </p>
      
           수업이 오픈되고 수강생과 매칭이 이루어 집니다
           <p style="font-size: smaller;">결제가 이루어진 후 서로간의 연락처가 공개됩니다</p>

          <h4>step 2</h4>
      </div>
     </div>
    </div> -->

     
<!-- </div> -->

<!-- </div> -->
    <!-- /.row -->

<div style="margin-bottom: 95px;">
    <!-- Portfolio Section -->
    <h2>자주하는 질문</h2>

    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">


      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">수업을 개설할때 </a>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2
            </a>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header" role="tab" id="headingThree">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</a>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" role="tab" id="headingFour">
          <h5 class="mb-0">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Collapsible Group Item #2
            </a>
          </h5>
        </div>
        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>


    </div>

   </div>

  

    <!-- <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project One</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Two</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Three</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Four</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Five</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Project Six</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
          </div>
        </div>
      </div>
    </div> -->
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>이 수업을 소개합니다</h2>
        <p>리뷰를 바탕으로 소개글이 업데이트 됩니다 :</p>
        <ul>
          <li>
            <strong>분야</strong>
          </li>
          <li>jQuery</li>
          <li>Font Awesome</li>
          <li>Working contact form with validation</li>
          <li>Unstyled page elements for easy customization</li>
        </ul>
        <p>prehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>수업을 개설하기 위해서는 작가등록 및 수업 계획 인증이 필요합니다. 지금 바로 등록해 보세요!</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="/drawingDay/createArtistInfo.php">작가등록하기</a>
      </div>
    </div>

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
  <!-- <script src="vendor/jquery/jquery.min.js"></script> 
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    

</body>


</html>
