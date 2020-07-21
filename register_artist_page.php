<?php
  include "loginCheck.php";
  //include "session.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drawing-Day | 작가등록</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">

    

    
    
    <link rel="stylesheet" href="css/asset.css">

    <link rel="stylesheet" href="css/styler.css" type="text/css">

    <link href="css/register_artist_page.css" rel="stylesheet">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu">
        <div class="offcanvas__logo">
            <a href="./home.php">Drawing-Day</a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">

        <?php
            if($jb_login){

                $userNick = $_SESSION['userNick'];
                echo $userNick."님 환영합니다!";
                echo '<a href="./register_artist_page.php" >작가등록</a>';
                echo '<a href="./my_page.php">마이페이지</a>';
                                    
            }else{
                echo '<a href="./register_artist_page.php" >작가등록</a>';
                echo '<a href="./login_page.php">로그인</a>';
                echo '<a href="./join_member_page.php" >회원가입</a>';
                }
        ?>

        </div>
        
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="header__logo">
                            <a href="./home.php" style="color: black;"><h3>Drawing-Day</h3></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="header__top__widget">
                                <ul>
                                <?php
                                    if($jb_login){

                                    $userNick = $_SESSION['userNick'];
                                    echo $userNick."님 환영합니다!";
                                    echo '<li><a href="./register_artist_page.php" >작가등록</a></li>';
                                    echo '<li><a href="./my_page.php">마이페이지</a></li>';
                                    
                                }else{
                                    echo ' <li><a href="./register_artist_page.php" >작가등록</a></li>';
                                    echo '<li><a href="./login_page.php"  >로그인</a></li>';
                                    echo '<li><a href="./join_member_page.php" >회원가입</a></li>';
                                }
                                ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="canvas__open">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
            </div>

    </header>

    <!-- Header Section End -->


 <!-- Blog Hero Begin -->
 
 <section class="hero">
    <div class="register-banner set-bg" data-setbg="image/oil_pastel.jpg">
    당신의 재능으로 수업을 열어보세요!<br><br><br>
    <button class="register-banner-btn" onclick="location.href='./artist_info_page.php'">작가 등록 하러가기</button>
    
 </div>

 </section>
    <!-- Blog Hero End -->

<!-- About Section Begin -->
<section class="about">
        <div class="container">
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
          
            
        </div>
    </section>
    <!-- About Section End -->


    <!-- About Section Begin -->
    <section class="home-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home__about__pic">
                        <div class="home__about__pic__item large-item set-bg" data-setbg="image/ipad2.jpg"></div>
                        <div class="home__about__pic__item">
                            <div class="home__about__pic__item__inner set-bg" data-setbg="image/oil_pastel.jpg"></div>
                            <div class="home__about__pic__item__inner set-bg" data-setbg="image/youtube.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home__about__text">
                        <div class="section-title">
                            <img src="img/icon.png" alt="">
                            <h2>Welcome to Zogin</h2>
                        </div>
                        <span>“What hurts today makes you stronger tomorrow.”</span>
                        <p>We are offering internationally certified 200 Hour Yoga Teacher Training in Rishikesh and 300
                            hour yoga teacher training in Rishikesh, India - Join us to have such life-transforming
                            experience in The world capital of Yoga in Rishikesh.</p>
                        <p class="para-2">Zogin is a great place for those who are in search of the ancient practice and
                            true essence of yoga, meditation, health, peace and learning the art of creating a class to
                            teach safely. We are passionate about adjustments and mainly focus on the alignment of the
                            asanas.</p>
                        <a href="#" class="primary-btn">MORE ABOUT US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

   

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img src="img/icon.png" alt="">
                        <h2>Enjoy All Aspects Of Yoga</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="services__list">
                <div class="row">
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-1.png" alt="">
                            <h5>Asana</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-2.png" alt="">
                            <h5>Meditation</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-3.png" alt="">
                            <h5>Mudra</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-4.png" alt="">
                            <h5>Bandhas</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-5.png" alt="">
                            <h5>Philosophy</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="img/services/services-6.png" alt="">
                            <h5>Pranayama</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

     <!-- Faq Begin -->
     <div class="faq spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="faq__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">
                                        <span>How to join the community?</span>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>No. You may not transfer, trade, or otherwise exchange ClassPass credits. If
                                            you’re interested in gifting ClassPass to someone, you can purchase a gift
                                            card here.</p>
                                        <p>Please allow 1 day for tracking information to update on your order. If you
                                            are unable to track your order, please let us know and we'll be happy to
                                            assist.</p>
                                        <h6>Still need help? <a href="#">Get in touch with us.</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading active">
                                    <a data-toggle="collapse" data-target="#collapseTwo">
                                        <span>Can I give my credits to someone else?</span>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>No. You may not transfer, trade, or otherwise exchange ClassPass credits. If
                                            you’re interested in gifting ClassPass to someone, you can purchase a gift
                                            card here.</p>
                                        <p>Please allow 1 day for tracking information to update on your order. If you
                                            are unable to track your order, please let us know and we'll be happy to
                                            assist.</p>
                                        <h6>Still need help? <a href="#">Get in touch with us.</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">
                                        <span>How to watch video workouts?</span>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>No. You may not transfer, trade, or otherwise exchange ClassPass credits. If
                                            you’re interested in gifting ClassPass to someone, you can purchase a gift
                                            card here.</p>
                                        <p>Please allow 1 day for tracking information to update on your order. If you
                                            are unable to track your order, please let us know and we'll be happy to
                                            assist.</p>
                                        <h6>Still need help? <a href="#">Get in touch with us.</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFour">
                                        <span>What is Zogin?</span>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>No. You may not transfer, trade, or otherwise exchange ClassPass credits. If
                                            you’re interested in gifting ClassPass to someone, you can purchase a gift
                                            card here.</p>
                                        <p>Please allow 1 day for tracking information to update on your order. If you
                                            are unable to track your order, please let us know and we'll be happy to
                                            assist.</p>
                                        <h6>Still need help? <a href="#">Get in touch with us.</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFive">
                                        <span>How many times can I visit a studio each cycle?</span>
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>No. You may not transfer, trade, or otherwise exchange ClassPass credits. If
                                            you’re interested in gifting ClassPass to someone, you can purchase a gift
                                            card here.</p>
                                        <p>Please allow 1 day for tracking information to update on your order. If you
                                            are unable to track your order, please let us know and we'll be happy to
                                            assist.</p>
                                        <h6>Still need help? <a href="#">Get in touch with us.</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseSix">
                                        <span>What is the class cancellation policy?</span>
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>No. You may not transfer, trade, or otherwise exchange ClassPass credits. If
                                            you’re interested in gifting ClassPass to someone, you can purchase a gift
                                            card here.</p>
                                        <p>Please allow 1 day for tracking information to update on your order. If you
                                            are unable to track your order, please let us know and we'll be happy to
                                            assist.</p>
                                        <h6>Still need help? <a href="#">Get in touch with us.</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq End -->


    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="chooseus__text">
                        <h2>Why Choose Us</h2>
                        <p>We are offering internationally certified 200 Hour Yoga Teacher Training in Rishikesh and 300
                            hour yoga teacher training in Rishikesh, India - Join us to have such life-transforming
                            experience in The world capital of Yoga in Rishikesh.</p>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="img/chooseus/choose-1.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">2146</h2>
                            <p>Students</p>
                        </div>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="img/chooseus/choose-2.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">15</h2>
                            <p>Years Of Experience</p>
                        </div>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="img/chooseus/choose-3.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">48</h2>
                            <p>Branches</p>
                        </div>
                    </div>
                    <div class="chooseus__item">
                        <div class="chooseus__item__icon">
                            <img src="img/chooseus/choose-4.png" alt="">
                        </div>
                        <div class="chooseus__item__text">
                            <h2 class="choose-counter">234</h2>
                            <p>Expert Staffs</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chooseus__pic">
                        <img src="img/chooseus/choose-pic.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

   

 



  
    <!-- Footer Section Begin -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <img src="img/footer-logo.png" alt="">
                        <ul>
                            <li><i class="fa fa-clock-o"></i> Mon - Fri: 6:30am - 07:45pm</li>
                            <li><i class="fa fa-clock-o"></i> Sat - Sun: 8:30am - 05:45pm</li>
                        </ul>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Your Email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Inspiration</h5>
                        <ul>
                            <li><a href="#">Online Pilates</a></li>
                            <li><a href="#">Yoga for Beginners</a></li>
                            <li><a href="#">Online Pilates</a></li>
                            <li><a href="#">Online Yoga</a></li>
                            <li><a href="#">Conditioning</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Meet The Team</a></li>
                            <li><a href="#">Introduce</a></li>
                            <li><a href="#">Customer Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h5>Contact Us</h5>
                        <ul class="footer-address">
                            <li><i class="fa fa-phone"></i> (01) 436 8888</li>
                            <li><i class="fa fa-envelope"></i> hello@zogin.com</li>
                            <li><i class="fa fa-location-arrow"></i> 828 Granville Lights Suite 466</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer__copyright__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>