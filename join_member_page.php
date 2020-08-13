<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drawing-Day | 회원가입</title>

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

    <link href="css/join-page.css" rel="stylesheet" type="text/css">

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
                                <a href="#">작가등록</a>
                                <a href="./login_page.php">로그인</a>
                                <a href="./join_member_page.php">회원가입</a>
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
                                <li><a href="#" >작가등록</a></li>
                                <li><a href="./login_page.php"  >로그인</a></li>
                                <li><a href="./join_member_page.php" >회원가입</a></li>
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

        <!-- Appoinment Section Begin -->
        <section class="appointment">
        <div class="container">
            <div class="appointment__text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>회원가입</h2>
                        </div>
                    </div>
                </div>

                <div class=userInfo style="margin-bottom: 50px;" >
    
                <section class="joinFrom">
                <form name="artist_join_form" action="joinOK.php" method="POST" onsubmit="return checkSubmit()">
                
                    <div class="form-group">
                        <div>
                            <label for="inputEmail">E-mail</label>
                        </div>
                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="가입하실 이메일주소를 입력해주세요">
                        <div style="margin-top: 3px; font-size: smaller; color: brown;">
                            <span id="result_email_msg"></span>
                        </div>

                        <button type="button" id="email_auth_btn" name="email_auth_btn" disabled>인증</button>


                        <div id="randomDiv" style="margin-top: 3px; font-size: smaller; color: brown; display:none">
                            <input type="text" class="form-control" name="inputRandom" id="inputRandom" placeholder="메일로 발송된 인증문자 8자리 입력" style="width: 300px;">
                            <button type="button" id="random_auth_btn" name="random_auth_btn">인증문자 확인</button>
                            <div style="margin-top: 3px; font-size: smaller; color: brown;">
                            <span id="email_msg"></span>
                            </div>
                        </div>


                    </div>

                    <div class="form-group">
                        <label for="inputPassword">비밀번호</label>
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="비밀번호는 영문, 특수문자 조합의 8~16자리로 정해야합니다">
                        <div style="margin-top: 3px; font-size: smaller; color: brown;">
                            <span id="result_pw_msg"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputPasswordCheck">비밀번호 확인</label>
                        <input type="password" class="form-control" name="inputPasswordCheck" id="inputPasswordCheck" placeholder="비밀번호를 한 번 더 입력하세요">
                        <div style="margin-top: 3px; font-size: smaller; color: brown;">
                            <span id="result_pw_check_msg"></span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputName">이름</label>
                        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="이름을 입력하세요">
                        <div style="margin-top: 3px; font-size: smaller; color: brown;">
                        <span id="result_name_msg"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputNickname">닉네임</label>
                        <input type="text" class="form-control" name="inputNickname" id="inputNickname" placeholder="사용하실 닉네임을 입력하세요">
                        <div style="margin-top: 3px; font-size: smaller; color: brown;">
                        <span id="result_nick_msg"></span>
                        </div>
                    </div>
               
                     
                    <div class="form-group">
                        
                        <a href="use-check-page.php" target="_blank">
                        <p class="use-check-info" style="width: fit-content; margin-bottom: 3px; text-decoration: underline; color: #5768AD;">
                        이용약관 동의하기
                        </p>
                        </a>
                        <!-- <img src = 'image/icons8-help-16.png'> -->
                        
                        <!-- <p class="use-check-info-ment" style="font-size: small;" >작가로 가입하기를 체크하시면 작가등록 후, 드로잉 원데이 클래스를 개설 할 수 있습니다.<br>만약 체크를 안하시면 작가등록이 불가능하기 때문에 클래스 개설은 할 수 없습니다.<br></p> -->
                        <label class="form-check-label" style="font-size: small;"><input type="checkbox" name='check_using' value='ok'> 이용약관을 확인하였습니다</label>
                        
                    </div>

                    <div class="form-group">
                    <a href="privit-check-page.php" target="_blank">
                        <p class="privit-check-info" style="width: fit-content; margin-bottom: 3px; text-decoration: underline; color: #5768AD;">
                        개인정보 정책 동의하기
                        <!-- <img src = 'image/icons8-help-16.png'> -->
                        </p>
                        </a>
                        <!-- <p class="privit-check-info-ment" style="font-size: small;" >작가로 가입하기를 체크하시면 작가등록 후, 드로잉 원데이 클래스를 개설 할 수 있습니다.<br>만약 체크를 안하시면 작가등록이 불가능하기 때문에 클래스 개설은 할 수 없습니다.<br></p> -->
                        <label class="form-check-label" style="font-size: small;"><input type="checkbox" name='check_privit' value='ok'> 개인정보 정책을 확인하였습니다</label>
                       
                    </div>

                    <div class="col-lg-12 text-center">
                            <button type="submit" id="join-submit">Submit</button>
                    </div>

                </form>
                </section>

                </div>
            </div>
        </div>
        </section>
    <!-- Appoinment Section End -->

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

    <script type="text/javascript" src="js/join_member_page.js"></script>
</body>

</html>
    

