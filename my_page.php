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
    <title>Drawing-Day | 마이페이지</title>

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

    <!-- <link rel="stylesheet" href="css/home.css" type="text/css"> -->


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

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">


            <!-- <div class="col-lg-4 order-lg-1 order-2"> -->
                <div class="blog__sidebar">
                    <!-- <div class="blog__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button><span class="icon_search"></span></button>
                        </form>
                    </div> -->
                    <div class="blog__sidebar__categories">
                        <h4>마이페이지</h4>
                        <ul>
                            <li style="background-color: cornflowerblue;"><a href="my_page.php">내 정보 관리</a></li>
                            <li><a href="my_class_page.php">내 클래스 관리</a></li>
                            <li><a href="logout_page.php">로그아웃</a></li>
                            <li><a href="drop_out_page.php">회원탈퇴</a></li>
                            <!-- <li><a href="#"></a></li>
                            <li><a href="#">Play (9)</a></li>
                            <li><a href="#">Live (10)</a></li> -->
                        </ul>
                    </div>
                     
                </div>
            <!-- </div> -->

                
            <div class="col-lg-8 order-lg-2 order-1">
                <div class="row" style="border-radius: 4px; border: solid 2px cornflowerblue; position: relative; padding: 10px;">
                

                    <div class="blog__details">
                        <div class="blog__details__large">
                            <img src="img/blog/details/blog-large.jpg" alt="">
                            <span>Fuel</span>
                        </div>
                        <div class="blog__details__text">
                            <p>Keeping fit during your university years may not be at the front of your mind, but by
                                maintaining a healthy body, you’re going to see some positive side effects spilling into
                                the rest of your uni life, from having better concentration to having more energy to
                                party. </p>
                        </div>
                        <div class="blog__details__quote">
                            <p>This is my second time completing a 200 hr TTC from Zogin and I loved the experiences
                                even more</p>
                        </div>
                        <div class="blog__details__pic">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/blog/details/bd-1.jpg" alt="">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/blog/details/bd-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__desc">
                            <h4>The Secret to improving</h4>
                            <p>Keeping fit during your university years may not be at the front of your mind, but by
                                maintaining a healthy body, you’re going to see some positive side effects spilling into
                                the rest of your uni life, from having better concentration to having more energy to
                                party.</p>
                            <p>Seriously, skip a session and get some rest. There will be some days when taking a nap
                                will have way more benefit to you than putting in a hard session and feeling exhausted.
                                Exercise is supposed to energise and inspire.</p>
                        </div>
                        <div class="blog__details__tags__share">
                            <p><span>Tags:</span> All, Trending, Fuel, Cardio, Life Style</p>
                            <div class="blog__details__share">
                                <a href="#"><span class="social_facebook"></span></a>
                                <a href="#"><span class="social_instagram"></span></a>
                                <a href="#"><span class="social_twitter"></span></a>
                                <a href="#"><span class="social_linkedin"></span></a>
                            </div>
                        </div>
                        <div class="blog__details__author">
                            <div class="blog__details__author__pic">
                                <img src="img/blog/details/blog-posted.png" alt="">
                            </div>
                            <div class="blog__details__author__text">
                                <h4>Grace Carter</h4>
                                <p>The face of the moon was in shadow.The spectacle before us was indeed sublime. All
                                    the their that dummy equipment and instruments are alive.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <a href="#" class="blog__previous__btn">
                                    <i class="fa fa-angle-left"></i>
                                    <h6>6 Reasons to get rebounding</h6>
                                    <span>Previous Post</span>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <a href="#" class="blog__next__btn">
                                    <i class="fa fa-angle-right"></i>
                                    <h6>Tips make cooking simple</h6>
                                    <span>Previous Post</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    </div>
            </div>




        </div>
    </div>
</section>
    <!-- Blog Section End -->
                   


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