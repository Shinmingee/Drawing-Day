<?php
  include "home_loginCheck.php";
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
    <title>Drawing-Day | home</title>

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

    <link rel="stylesheet" href="css/styler.css" type="text/css">

    <link rel="stylesheet" href="css/home.css" type="text/css">


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
                echo '<a href="./register_artist_page.php">작가등록</a>';
                echo '<a href="./my_page.php">마이페이지</a>';
                                    
            }else{
                echo '<a href="./register_artist_page.php">작가등록</a>';
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
                                    echo '<li><a href="./register_artist_page.php">작가등록</a></li>';
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

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="image/brushes.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <span>이 수업 들어볼래요?</span>
                                <!-- <h3>이건워</h3> -->
                                <h2>다양한 드로잉 원데이 클래스를<br>소개합니다</h2>
                                <a href="#" class="primary-btn">수업 둘러보기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="image/brushes.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <span>작가가 되어보세요!</span>
                                <h2>여러분의 재능으로<br>원데이클래스를 열어보세요</h2>
                                <a href="./register_artist_page.php" class="primary-btn">작가등록하기</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home_category_zone">

            <div class="home_category">
                <table class="home_cate_table">
                <tr>
                <td style="background-color: red;"><img src="image/cate_palette.png"></td>
                <td><img src="image/cate_pen.png"></td>
                <td style="background-color: blue;"><img src="image/cate_pastel.png"></td>
                <td><img src="image/cate_tablet.png"></td>
                <td style="background-color: green;"><img src="image/cate_etc.png"></td>
                </tr>

                <tr>
                <td>유화/수채화</td>
                <td>색연필/마카/펜</td>
                <td>파스텔</td>
                <td>태블릿/폰</td>
                <td>기타</td>
                </tr>

               
                <!-- <a herf="#">유화/수채화</a>
                <a herf="#">색연필/마카/펜</a>
                <a herf="#">파스텔</a>
                <a herf="#">태블릿/폰</a>
                <a herf="#">기타</a> -->
                </table>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

 <!-- Classes Section Begin -->
 <section class="upcoming-classes spad">
 
        <div class="container">
       
            <div class="row">
                <div class="col-lg-12">
               
                    <div class="section-title normal-title">
                        <h2>이번주 오픈 클래스</h2>
                        <p>이번주 참여할 수 있는 클래스입니다<br />ㅇㅇㄹㅇㄹ</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="classes__item">
                        <div class="classes__item__pic set-bg" data-setbg="img/classes/classes-1.jpg">
                            <span>20 Jun 2019</span>
                        </div>
                        <div class="classes__item__text">
                            <p>14 Days | Start on 10th Every Month</p>
                            <h4><a href="#">100 Hour Yoga Course Rishikesh</a></h4>
                            <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                            <a href="#" class="class-btn">JOIN NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="classes__item">
                        <div class="classes__item__pic set-bg" data-setbg="img/classes/classes-2.jpg">
                            <span>20 Jun 2019</span>
                        </div>
                        <div class="classes__item__text">
                            <p>14 Days | Start on 10th Every Month</p>
                            <h4><a href="#">200 Hour Yoga Course Rishikesh</a></h4>
                            <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                            <a href="#" class="class-btn">JOIN NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="classes__item">
                        <div class="classes__item__pic set-bg" data-setbg="img/classes/classes-3.jpg">
                            <span>20 Jun 2019</span>
                        </div>
                        <div class="classes__item__text">
                            <p>14 Days | Start on 10th Every Month</p>
                            <h4><a href="#">300 Hour Yoga Course Rishikesh</a></h4>
                            <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                            <a href="#" class="class-btn">JOIN NOW</a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="classes__item">
                        <div class="classes__item__pic set-bg" data-setbg="img/classes/classes-1.jpg">
                            <span>20 Jun 2019</span>
                        </div>
                        <div class="classes__item__text">
                            <p>14 Days | Start on 10th Every Month</p>
                            <h4><a href="#">100 Hour Yoga Course Rishikesh</a></h4>
                            <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                            <a href="#" class="class-btn">JOIN NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="classes__item">
                        <div class="classes__item__pic set-bg" data-setbg="img/classes/classes-2.jpg">
                            <span>20 Jun 2019</span>
                        </div>
                        <div class="classes__item__text">
                            <p>14 Days | Start on 10th Every Month</p>
                            <h4><a href="#">200 Hour Yoga Course Rishikesh</a></h4>
                            <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                            <a href="#" class="class-btn">JOIN NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="classes__item">
                        <div class="classes__item__pic set-bg" data-setbg="img/classes/classes-3.jpg">
                            <span>20 Jun 2019</span>
                        </div>
                        <div class="classes__item__text">
                            <p>14 Days | Start on 10th Every Month</p>
                            <h4><a href="#">300 Hour Yoga Course Rishikesh</a></h4>
                            <h6>Jordan Lawson <span>- Yoga Teacher</span></h6>
                            <a href="#" class="class-btn">JOIN NOW</a>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </section>
    <!-- Classes Section End -->


    <!-- About Section Begin -->
    <section class="home-about spad">
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

   

    <!-- Gallery Section Begin -->
    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <h2>Our Gallery</h2>
                        <p>This is the beautiful yogi and yoginis that have shared their journey and growth with<br />
                            us. Take a look!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/gallery/gallery-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/gallery/gallery-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/gallery/gallery-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/gallery/gallery-4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/gallery/gallery-5.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/gallery/gallery-6.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/gallery/gallery-7.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 p-0">
                    <div class="gallery__pic">
                        <img src="img/gallery/gallery-8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
    <section class="instructor spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <h2>Meet Our Instructors</h2>
                        <p>Our Indian and western teachers are highly qualified and will be happy to share this<br />
                            spiritual journey with you.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="instructor__item">
                        <div class="instructor__item__pic">
                            <img src="img/instructor/instructor-1.jpg" alt="">
                        </div>
                        <div class="instructor__item__text">
                            <h5>Emma Hale</h5>
                            <span>Yoga Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="instructor__item">
                        <div class="instructor__item__pic">
                            <img src="img/instructor/instructor-2.jpg" alt="">
                        </div>
                        <div class="instructor__item__text">
                            <h5>Rebecca James</h5>
                            <span>Yoga Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="instructor__item">
                        <div class="instructor__item__pic">
                            <img src="img/instructor/instructor-3.jpg" alt="">
                        </div>
                        <div class="instructor__item__text">
                            <h5>Melissa Smith</h5>
                            <span>Yoga Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="instructor__item">
                        <div class="instructor__item__pic">
                            <img src="img/instructor/instructor-4.jpg" alt="">
                        </div>
                        <div class="instructor__item__text">
                            <h5>Emily Walker</h5>
                            <span>Yoga Trainer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->



    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="testimonial__slider owl-carousel">
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>This is my second time completing a 200 hr TTC from Zogin and I loved the experiences
                                    even more than the first time that I had done in 2014.</p>
                                <img src="img/testimonial/testimonial-1.png" alt="">
                                <h5>Linnie Walton <span>- Trainer</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>This is my second time completing a 200 hr TTC from Zogin and I loved the experiences
                                    even more than the first time that I had done in 2015.</p>
                                <img src="img/testimonial/testimonial-1.png" alt="">
                                <h5>Linnie Walton <span>- Trainer</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>This is my second time completing a 200 hr TTC from Zogin and I loved the experiences
                                    even more than the first time that I had done in 2016.</p>
                                <img src="img/testimonial/testimonial-1.png" alt="">
                                <h5>Linnie Walton <span>- Trainer</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div class="testimonial__text">
                                <p>This is my second time completing a 200 hr TTC from Zogin and I loved the experiences
                                    even more than the first time that I had done in 2017.</p>
                                <img src="img/testimonial/testimonial-1.png" alt="">
                                <h5>Linnie Walton <span>- Trainer</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

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