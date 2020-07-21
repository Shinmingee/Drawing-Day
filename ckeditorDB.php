<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>테스트-ck/db</title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <script type="text/javascript" src="editor/ckeditor/ckeditor.js"></script>


 <!-- Custom styles for this template -->
 <link href="css/modern-business.css" rel="stylesheet">
 <link href="css/create_class.css" rel="stylesheet">

</head>

<body>

<!-- <hr style="margin-bottom: 0px;"> -->

 <!-- Page Content -->
 <div class="container">
 
 <!-- Contact Form -->
 <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
 <div class="row">
   <div class="col-lg-8 mb-4">
     <h4>클래스 개설하기</h4>
    <div class="class_create_section_border">
    <section class="class_create_section">
     <form enctype="multipart/form-data" name="class_create_form" id="class_create_form" action="save.php" method="POST">

      <p class="class_create_title">◈ 클래스 정보</p>

      <div class="control-group form-group">
        <div class="controls">
          <label>클래스 대표사진</label>
          <br>
          <input type="file" name="classMainImg" id="classMainImg" required>
          <div id='preview'>
        <!-- 미리보기 공간 -->
          </div>

          <!-- <p class="help-block"></p> -->
        </div>
      </div>

      <div class="control-group form-group">
        <div class="controls">
          <label>클래스 제목</label>
          <input type="text" name="class_title" id="class_title" class="form-control" required>
          <p class="help-block"></p>
        </div>
      </div>

      <!-- 여긴 편집툴을 사용하는 게 좋을 듯 -->
      <div class="control-group form-group">
        <div class="controls">
          <label>클래스 소개글</label>
          <textarea name="class_intro_txt" id="class_intro_txt" class="form-control" rows="10" cols="100" style="resize:none"></textarea>
          
          <p class="help-block"></p>
        </div>
      </div>

      <div class="control-group form-group">
        <div class="controls">
          <label>사용할 그림 도구</label>
          <select name="class_tool" id="class_tool" class="form-control" style="width: fit-content;" required>
            <option value="paint">유화/수채화</option>
            <option value="pen">색연필/마카/펜</option>
            <option value="pastel">파스텔</option>
            <option value="digital">태블릿/폰</option>
            <option value="other_tool">기타</option>
          </select>
          <!-- <input type="" class="form-control" name="class_title" id="class_title" required data-validation-required-message="Please enter your name.">
          <p class="help-block"></p> -->
        </div>
      </div>

      <div class="control-group form-group">
        <div class="controls">
          <label>클래스 주제</label>
          <br>
          <input type="checkbox" name="class_theme[]" value="person" style="margin-left: 5px;"/>
          인물
          
          <input type="checkbox" name="class_theme[]" value="things" style="margin-left: 10px;"/>
          사물/소품

          
          <input type="checkbox" name="class_theme[]" value="landscape" style="margin-left: 10px;"/>
          풍경
          
          
          <input type="checkbox" name="class_theme[]" value="space" style="margin-left: 10px;"/>
          공간
          
          <input type="checkbox" name="class_theme[]" value="other_theme" style="margin-left: 10px;"/>
          기타

          <!-- <select name="class_theme" id="class_theme" class="form-control" style="width: fit-content;" required>
            <option value="person">인물</option>
            <option value="things">사물/소품</option>
            <option value="landscape">풍경</option>
            <option value="space">공간</option>
            <option value="other_theme">기타</option>
          </select> -->

          <!-- <input type="" class="form-control" name="class_title" id="class_title" required data-validation-required-message="Please enter your name.">
          <p class="help-block"></p> -->
        
        </div>
      </div>


      <div class="control-group form-group">
        <div class="controls">
          <label>최대인원</label><br>
          <input type="number" name="target_num" id="target_num" class="class_create_form" style="width: 90px" required>
          명
        </div>
      </div>

      <hr style="margin-bottom: 10px;">
          <p class="class_create_title">◈ 클래스 시간&장소</p>

          <div class="control-group form-group">
            <div class="controls">
              <label>클래스 날짜</label><br>
              <input type="date" name = "class_date" id="class_date" class="class_create_form" required>
              
              <!-- style="width: 50px" id="email" required data-validation-required-message="Please enter your email address."> -->
            
            </div>
          </div>

          

          <div class="control-group form-group">
            <div class="controls">
              <label>클래스 시작시간</label><br>
              <input type="time" name="class_time_start" id="class_time_start" class="class_create_form" style="width: 200px" required>
              
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>클래스 종료시간</label><br>
              <input type="time" name="class_time_end" id="class_time_end" class="class_create_form" style="width: 200px" required>
              
            </div>
          </div>

          <hr style="margin-bottom: 10px;">
          <p class="class_create_title">◈ 클래스 가격</p>

          <div class="control-group form-group">
            <div class="controls">
              <label>클래스 금액(시간 당)</label><br>
              <input type="text" name="class_price" id="class_price" class="class_create_form" style="width: 120px" required>
              원
            </div>
          </div>





        <button type="submit" class="btn btn-primary" name="create_class_btn" id="create_class_btn">클래스 개설하기</button>
     </form>

    </section>
    </div> <!-- class_create_section_border -->
      
    </div> <!-- col-lg-8 mb-4 -->

    </div>
    <!-- /.row -->

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
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
CKEDITOR.replace('class_intro_txt');
</script>

<script type="text/javascript" src="js/createClassPage.js"></script>

</body>
</html>