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
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- <link rel="stylesheet" href="css/home.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <link href="css/join-page.css" rel="stylesheet" type="text/css">

</head>

<body>

<div class="form-group">
                        <div>
                            <label for="inputEmail">E-mail</label>
                        </div>
                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="아이디 또는 비밀번호를 찾을 때 필요합니다">
                        <div style="margin-top: 3px; font-size: smaller; color: brown;">
                            <span id="result_email_msg"></span>
                        </div>
                        <button id="email_auth_btn" name="email_auth_btn" onclick="myAjax()">인증</button>
                        
                    </div>
                    </div>


<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script> 
    function myAjax() {

        var email =  $("#inputEmail").val();
        $.ajax({

           type: "POST",
           url: 'email_auth.php',
           data:{email:email},
           success:function(html) {
             alert(html);
           }

        });
    }
    </script>

</body>

</html>
