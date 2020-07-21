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

    <link href="css/artist_info_page.css" rel="stylesheet">

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

<!-- Content Column -->

<section id="artist_info_section">
  <div class="container">
  <h3>작가 등록 과정</h3>
        <section class="step_nav_bar">
                <ul>
                    <li class="step_here">작가정보 입력</li>
                    <li>>></li>
                    <li>수업관련 정보</li>
                    <li>>></li>
                    <li>가격책정</li>
                    <li>>></li>
                    <li>수업 세부내용</li>

                </ul>
        </section>
        <section class="class_create_section">
          <h5>작가정보입력<h5><br><br>
          <div class="class_create_section_border">

          <form enctype="multipart/form-data" name="aritst_regi_form" id="aritst_regi_form" action="artist_info_save.php" method="POST">

            <!-- <hr style="margin-bottom: 0px;"> -->
            <p style="margin-top: 10px; margin-bottom: 0px; font-weight: bold;">1. 본인인증</p>
            <hr style="margin-top: 0px;">
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
                    
                    <div class="profile_box">
                        <div id='preview'>
                            <!-- 미리보기 공간 -->
                        </div>
                    </div>
                    
                    <input type="file" name="aritst_regi_profile" id="aritst_regi_profile" required/>
                    <!-- <button style="font-size: small;" class="btn btn-primary">프로필 사진 선택</button> -->
                   
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
                    <input type="file" name="aritst_regi_id" id="aritst_regi_id" required/>
                    <br>
                <div id='preview_identity'>
                    <!-- 미리보기 공간 -->
                </div>
                </div>
            </div>


            <p style="margin-top: 50px; margin-bottom: 0px; font-weight: bold;">2. 학력인증</p>
            <hr style="margin-top: 0px;">


            <p class="class_create_title">◈ 학력<br>(학력인증은 재학증명서,휴학증명서,졸업증명서로만 가능합니다)</p>

            <div class="control-group form-group">
                <div class="controls">
                <label>학력(대학)</label>
                <br>
                <input type="text" id="aritst_regi_univ" name="aritst_regi_univ">&nbsp;대학교&nbsp;&nbsp;&nbsp;<input type="text" id="aritst_regi_univ_major" name="aritst_regi_univ_major">&nbsp;전공
                <input type="file" id="aritst_regi_univ_file" name="aritst_regi_univ_file">
                <div id='preview_univ'>
                    <!-- 미리보기 공간 -->
                </div>
                <p class="help-block"></p>
                </div>
            </div>

            <div class="control-group form-group">
                <div class="controls">
                <label>학력(대학원)</label>
                <br>
                <input type="text" id="aritst_regi_gradu" name="aritst_regi_gradu">&nbsp;대학원&nbsp;&nbsp;&nbsp;<input type="text" id="aritst_regi_gradu_major" name="aritst_regi_gradu_major">&nbsp;전공
                <input type="file" id="aritst_regi_gradu_file" name="aritst_regi_gradu_file">
                <div id='preview_gradu'>
                    <!-- 미리보기 공간 -->
                </div>
                <p class="help-block"></p>
                </div>
            </div>


            <p style="margin-top: 50px; margin-bottom: 0px; font-weight: bold;">3. 경력인증</p>
            <hr style="margin-top: 0px;">

            <p class="class_create_title">◈ 활동사항<br>(자신의 활동내역을 드러낼 수 있으면 됩니다.)</p>
            <div class="control-group form-group">
                <div class="controls">
                
                <li>SNS 계정 : &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="aritst_regi_sns" name="aritst_regi_sns"></li>
                <li>블로그 주소 : <input type="text" id="aritst_regi_blog" name="aritst_regi_blog"></li>
                <li>유투브 주소 : <input type="text" id="aritst_regi_youtube" name="aritst_regi_youtube"></li>
                <!-- <input type="text" name="class_title" id="class_title" class="form-control" required> -->
                <p class="help-block"></p>
                </div>
            </div>

            <p class="help-block"></p>
            <br>
            <p class="class_create_title">◈ 기타(포트폴리오) only pdf</p>

            <div class="control-group form-group">
                <div class="controls">
                
                <input type="file" accept="application/pdf" id="aritst_regi_portfolio" name="aritst_regi_portfolio">
                
                <p class="help-block"></p>
                </div>
            </div>
            
            <br>
            <br>
            <button class="btn btn-primary" name="aritst_regi_tmp_save" id="aritst_regi_tmp_save">임시저장</button>
            <button type="submit" class="btn btn-primary" name="aritst_regi_btn" id="aritst_regi_btn">저장 후 다음단계로</button>
            
        </form>
        </div>
        <!-- </div class="class_create_section_border"> -->

        </section>
    <!-- </section class="class_create_section"> -->
    </div>

</section>
  <!-- /.container -->
  

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



<script type="text/javascript" src="js/artist_info_regi.js"></script>




</body>

</html>