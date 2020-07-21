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
    <title>Drawing-Day | 개인정보처리방침</title>

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
                    개인정보처리방침

 

l 제1조(총칙)

㈜크몽(이하 '회사'라고 함)은 회원의 정보를 소중하게 생각하고 안전하게 보호하기 위하여 최선의 노력을 다하고 있으며 개인정보보호법 및 정부의 가이드라인을 준수합니다.

회사는 회원의 개인정보를 필요한 시점에 따라 최소한으로 수집하고 수집한 정보는 사전 고지한 범위 내에서만 사용하며, 사전 동의 없이 그 범위를 초과하여 이용하거나 외부에 공개하지 않습니다.

다만, 법령의 규정에 의거하거나 수사기관 및 행정기관이 수사 또는 조사의 목적으로 법령에 정해진 절차와 방법에 따라 요청한 경우에는 내부 절차를 거쳐 최소한의 정보가 동의없이 제공될 수 있습니다.

회사는 ‘개인정보처리방침’을 제정하고 이를 준수하여 회원의 개인정보의 이용 및 보호에 대한 조치를 알리며, 관련법규를 준수하고 있습니다.

회사의 ‘개인정보처리방침’은 관련법률 및 지침의 변경 또는 내부 운영방침의 변경 등으로 인하여 개정될 수 있습니다.

‘개인정보처리방침’이 변경될 경우 변경사항은 공지사항 또는 이메일 등의 연락수단을 통해 공지해드립니다.

변경사항에 의문이 있으신 경우에는 언제라도 담당부서에 문의하시거나 홈페이지를 방문하여 확인하실 수 있습니다.

개인정보 처리방침과 이용 약관의 개인정보 관련한 내용의 경우 이용약관이 우선 순위를 갖습니다.

 

l 제2조(개인정보의 수집∙이용 및 보유)

회사는 최적화된 서비스를 제공하기 위하여 아래와 같은 목적으로 개인정보를 수집 및 이용하고 있으며, 동의하신 목적 이외에 다른 용도로 이를 이용하거나 동의없이 제3자에게 이를 제공하지 않습니다.

회사는 전자상거래 등에서의 소비자보호에 관한 법률, 국세기본법, 전자금융거래법 등 관련법령에 따라 주민등록번호 및 은행계좌번호의 수집∙보관이 불가피한 경우에는 이용자에게 사전 고지하여 정보를 수집할 수 있습니다.

회사는 이용자의 기본적 인권을 침해할 우려가 있는 인종, 출신지, 본적지, 사상, 정치적 성향, 범죄기록, 건강상태 등의 정보는 이용자의 동의 또는 법령의 규정에 의한 경우 이외에는 수집하지 않습니다.

만 14세 미만 아동의 개인정보는 법정대리인의 동의를 얻은 경우에 수집·이용할 수 있습니다. 이 경우 회사는 법정대리인의 이름, 생년월일, 휴대폰 번호, 이메일 주소, 본인확인 값(CI, DI)을 추가로 수집할 수 있습니다.

 

 1. 개인정보의 수집 방법

회사는 다음과 같은 방법으로 개인정보를 수집할 수 있습니다.

- 홈페이지, 모바일 어플리케이션, 모바일 웹페이지, 서면, 팩스, 전화, 고객센터 문의하기, 이벤트 응모

- 생성정보 수집 툴을 통한 자동 수집

 

 2. 개인정보의 수집·이용 목적

회사는 개인정보를 다음의 목적을 위해 수집∙이용합니다. 수집한 개인정보는 다음의 목적 이외의 용도로는 사용되지 않으며 이용 목적이 변경될 시에는 사전동의를 구합니다.

수집한 개인정보는 법령에 따른 개인정보 보유·이용기간 또는 정보주체로부터 개인정보를 수집 시에 동의 받은 개인정보 보유·이용기간 내에서 처리 및 보관합니다. 

  1) 플랫폼 회원가입 및 서비스 이용 관리

회원 가입 의사 확인, 회원제 서비스 제공에 따른 본인 식별·인증, 회원자격 유지·관리, 제한적 본인확인제 시행에 따른 본인확인, 서비스 부정이용 방지, 만14세 미만 아동 개인정보 수집 시 법정대리인 동의 여부 확인, 서비스 이용 관련 각종 고지·통지, 고충처리, 분쟁 조정을 위한 기록 보존 등을 목적으로 개인정보를 처리합니다.

  2) 민원사무 처리

민원인의 신원 확인, 민원사항 확인, 사실조사를 위한 연락·통지, 처리결과 통보 등을 목적으로 개인정보를 처리합니다.

  3) 재화 또는 서비스 제공

물품배송, 서비스 제공, 청구서 발송, 콘텐츠 제공, 맞춤 서비스 제공, 본인인증, 연령인증, 요금결제·정산, 채권추심 등을 목적으로 개인정보를 처리합니다.

  4) 마케팅 및 광고에의 활용 

신규 서비스(제품) 개발 및 맞춤 서비스 제공, 이벤트 및 광고성 정보 제공 및 참여기회 제공, 인구통계학적 특성에 따른 서비스 제공 및 광고 게재, 서비스의 유효성 확인, 접속빈도 파악 또는 회원의 서비스 이용에 대한 통계 등을 목적으로 개인정보를 처리합니다.

 

 3. 개인정보의 수집 항목 및 보유

회사가 제공하는 서비스 이용과정에서 회원 본인이 자발적으로 공개한 개인정보 및 게시물과 관련한 권리와 책임은 작성자 본인에게 있습니다.
자발적으로 공개된 정보는 보호받기 어려우며 타인에 의해 무단으로 수집되거나 처리될 수 있으며, 이로 인해 발생한 손실이나 문제는 전적으로 본인에게 있음을 유념하시기 바랍니다. 서비스 이용과정에서 개인에 관한 정보는 공개되지 않도록 심혈을 기울여 주시기 바랍니다.
회사는 다음 목적 이외로는 개인정보를 이용하지 않으며, 회사에서 제공하는 서비스의 목적이 변경되는 경우 별도의 동의를 받는 등 필요한 조치를 합니다.

 
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