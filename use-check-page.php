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
    <title>Drawing-Day | 이용약관</title>

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
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!-- <link href="css/join-page.css" rel="stylesheet" type="text/css"> -->

</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

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


                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="blog__sidebar">
                        <!-- <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button><span class="icon_search"></span></button>
                            </form>
                        </div> -->
                        <div class="blog__sidebar__categories">
                            <h4>약관 및 정책</h4>
                            <ul>
                                <li><a href="use-check-page.php">이용약관</a></li>
                                <li><a href="privit-check-page.php">개인정보 정책</a></li>
                                <!-- <li><a href="#"></a></li>
                                <li><a href="#">Play (9)</a></li>
                                <li><a href="#">Live (10)</a></li> -->
                            </ul>
                        </div>
                     
                    </div>
                </div>

                
                <div class="col-lg-8 order-lg-2 order-1">
                    <div class="row">
                    <div style="overflow:scroll; width: auto; height:500px;">
                    제1장 총칙

 

제1조 (목적)

이 약관은 주식회사 크몽(이하 “회사”라고 합니다)이 온라인 마켓플레이스(http://www.kmong.com, 이하 "크몽 사이트”라고 합니다)와 스마트폰 등 이동통신기기를 통해 제공되는 모바일 애플리케이션(이하 “모바일 크몽”이라고 합니다)을 통하여 제공하는 중개 서비스 및 기타 정보서비스(이하 "서비스"라고 합니다)와 관련하여 회사와 회원 간의 권리와 의무, 책임 사항 및 회원의 서비스 이용 절차에 관한 사항을 규정함을 목적으로 합니다.

 

제2조 (약관의 명시, 효력 및 변경)

가. 회사는 본 약관의 내용과 상호, 회사소재지, 대표자의 성명, 사업자등록번호, 연락처 등을 서비스를 이용하고자 하는 자와 회원이 알 수 있도록 서비스가 제공되는 크몽 사이트의 초기화면(이하 연결화면 포함)에 게시합니다.

나. 회사가 이 약관을 개정하는 경우에는 개정된 약관의 적용일자 및 개정사유를 명시하여 현행 약관과 함께 그 적용일자 7일(다만, 제5조 가. 2)의 회원에게 불리한 내용으로 변경하는 경우에는 30일) 이전부터 적용일자 전일까지 위 가항의 방법으로 공지합니다. 개정된 약관은 개정약관에서 소급효를 부여하지 않는 이상 적용일자 이전으로 소급하여 적용되지 아니합니다.

다. 이 약관은 회사와 회원간에 성립되는 서비스이용계약의 기본약정입니다. 회사는 필요한 경우 특정 서비스에 관하여 적용될 사항(이하 "개별약관"이라고 합니다)을 정하여 미리 공지할 수 있습니다. 회원이 이러한 개별약관에 동의하고 특정 서비스를 이용하는 경우에는 개별약관이 우선적으로 적용되고, 이 약관은 보충적인 효력을 갖습니다. 개별약관의 게시·변경에 관해서는 위 가항, 나항을 준용합니다. 단, 회사는 개별약관을 크몽 사이트의 판매관리 화면에 게시할 수 있습니다.

라. 회사는 특정 전문가와 개별적으로 이 약관 및 개별약관(이하 “약관 등”이라고 합니다)에 규정된 내용과 다른 내용의 계약(이하 “개별계약”이라고 합니다)을 체결할 수 있습니다. 이 경우 개별계약이 약관 등에 우선하여 적용됩니다. 회사는 개별계약을 체결한 전문가에게 계약내용을 서면(전자문서 포함)교부하거나 판매관리 화면에서 확인할 수 있도록 합니다.

 

제3조 (관련법령과의 관계)

가. 회사는 수수료(제29조의 판매서비스 이용료 등 회사가 전문가에게 서비스를 제공한 대가로 전문가로부터 받는 일체의 금원을 말함) 및 판매촉진 서비스이용료의 결정과 관련하여 다른 온라인 마켓 플레이스(오픈마켓 형태의 모든 서비스 포함) 사업자와 담합 등 불공정행위를 하지 않습니다.

나. 회사는 전문가에게 가격 인하, 기획전 참여 등을 부당하게 강요하지 않습니다.

다. 회사는 전문가가 다른 온라인 마켓플레이스(오픈마켓 형태의 모든 서비스 포함) 사업자와 거래하지 못하게 하거나 다른 온라인 마켓플레이스(오픈마켓 형태의 모든 서비스 포함) 사업자와 거래한다는 이유로 전문가에게 불이익을 제공하지 아니합니다.

 
                    </div>



                        <!-- <div class="col-lg-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-1.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                        quaerat </p>
                                    <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-2.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">You can keep fit at university</a></h5>
                                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                        quaerat </p>
                                    <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-3.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">6 reasons to get rebounding</a></h5>
                                    <p>Rebounding is fast becoming the low impact, high-intensity workout of choice for
                                        those looking</p>
                                    <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-4.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Cooking tips make cooking simple</a></h5>
                                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                        quaerat </p>
                                    <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-5.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">optimise your muscle gains</a></h5>
                                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                        quaerat </p>
                                    <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="col-lg-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-6.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4, 2019</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Cooking tips make cooking simple</a></h5>
                                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam
                                        quaerat </p>
                                    <a href="#" class="blog_read_more">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div> -->
<!--                         
                        <div class="col-lg-12">
                            <div class="classes__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#"><span class="arrow_carrot-right"></span></a>
                            </div>
                        </div> -->

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