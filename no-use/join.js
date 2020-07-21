
//회원정보 누락 없는지
//아이디, 비번, 비번확인, 이름, 전화번호, 이메일 은 필수입력
//아티스트 체크박스는 제외

$(documnet).ready(function(e){
    $("#email_auth_btn").on("click", function(){

        var email =  $("#inputEmail").val();

        $.ajax({
            type: 'POST',
            url : "/drawingDay/email_auth.php",
            data:{
                email : email
            },
            success: function(data){
                 //data returned from php

                 $("#result_email_msg").html("입력하신 이메일로 등록합니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                 $('#result_email_msg').css("color", "#5280D4");
            }
         });
    })


})




//작가로 가입하기에 대한 호버 적용
$(document).ready(function () {
    $(".artist-check-info-ment").hide();
    $(".artist-check-info").mouseover(function () {
        $(".artist-check-info-ment").show();
    }
    );
    $(".artist-check-info").mouseleave(function(){
            $('.artist-check-info-ment').hide();
            $('.form-check-label')
            // removeClass("artist-check-info-ment");
        }
    );

})//작가로 가입하기에 대한 호버 적용 END

//실시간 아이디 중복체크
$(document).ready(function(e) { 
    $("#inputId").on("keyup", function(){ //check라는 클래스에 입력을 감지
        if($('#inputId').val().length <4){
            $("#result_id_msg").html("아이디는 4자 이상이여야 합니다.");
            $('#result_id_msg').css("color", "brown");

        }else if($('#inputId').val().length >= 4){
            //$("#result_id_msg").html("아이디는 4자 이상이여야 합니다.")
        // }else{
           var self = $(this); 
           var userid; 
		
		    if(self.attr("id") === "inputId"){ 
			userid = self.val(); 
            } 
            
            $.ajax({//post방식으로 id_check.php에 입력한 userid값을 넘깁니다
                type: 'POST',
                url : "/drawingDay/id_check.php",
                data:{
                    userid : userid
                },
                success : function(result){ 
                    console.log(result);
                    console.log(result.length);

                    if(result=="\n\n\nno"){ //만약 data값이 전송되면
                        $("#result_id_msg").html("이미 존재하는 아이디입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                        $('#result_id_msg').css("color", "brown");
                    }else if(result=="\n\n\nok"){
                        $("#result_id_msg").html("사용 가능한 아이디입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                        $('#result_id_msg').css("color", "#5280D4");
                    }
              
                }

            }); //end ajax
        }
    }); //end keyup
});	//실시간 아이디 중복체크 END
        

//비밀번호 정규식 확인
$(document).ready(function(e) { 
    $("#inputPassword").on("keyup", function(){
        if($('#inputPassword').val().length <8 || $('#inputPassword').val().length>16){
        
            $('#result_pw_msg').html("비밀번호를 8자이상 16자이하로 설정해주세요.");
            $('#result_pw_msg').css("color", "brown");
        
        }else if($('#inputPassword').val().length >= 8 && $('#inputPassword').val().length <= 16){ 
            var userpw =  $("#inputPassword").val();
            var check = /^(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])(?=.*[0-9]).{8,16}$/;

            if(!check.test(userpw)){
                $('#result_pw_msg').html("영문, 숫자, 특수문자의 조합으로 입력해주세요.");
                $('#result_pw_msg').css("color", "brown");
            }else if(check.test(userpw)){
                $('#result_pw_msg').html("사용 가능한 비밀번호 입니다");
                $('#result_pw_msg').css("color", "#5280D4");
            }
        }
    });
});//비밀번호 정규식 확인 END

//비밀번호-비밀번호 확인 과 일치 여부 
$(document).ready(function(e) { 
    $("#inputPasswordCheck").on("keyup", function(){
        if($('#inputPassword').val() == $('#inputPasswordCheck').val()){
        
            $('#result_pw_check_msg').html("비밀번호가 일치합니다.");
            $('#result_pw_check_msg').css("color", "#5280D4");
        
        }else if($('#inputPassword').val() != $('#inputPasswordCheck').val()){ 
        
            $('#result_pw_check_msg').html("비밀번호가 일치하지 않습니다. 다시 입력해주세요.");
            $('#result_pw_check_msg').css("color", "brown");
        }
        
    });
});//비밀번호-비밀번호 확인 과 일치 여부 END



//연락처 정규식 일치 확인
$(document).ready(function(e) { 
    $("#inputPhone").on("keyup", function(){
        if($('#inputPhone').val().length <1 || $('#inputPhone').val().length>13){
        
            $('#result_phone_msg').html("'-'를 포함해서 연락처를 입력해주세요");
            $('#result_pw_check_msg').css("color", "brown");
        
        }else if($('#inputPhone').val().length >= 8 && $('#inputPhone').val().length <= 16){ 
            var userphone =  $("#inputPhone").val();
            var check = /^(0(2|3[1-3]|4[1-4]|5[1-5]|6[1-4]))-(\d{3,4})-(\d{4})$/;
            var phoneCheck = /^(?:(010-\d{4})|(01[1|6|7|8|9]-\d{3,4}))-(\d{4})$/;
            
            if(!check.test(userphone)){ //전화번호 형식이 아니라면

                var phoneCheck = /^(?:(010-\d{4})|(01[1|6|7|8|9]-\d{3,4}))-(\d{4})$/;

                if(!phoneCheck.test(userphone)){//핸드폰 형식인지 확인
                    $('#result_phone_msg').html("'-'를 포함해서 올바른 연락처를 입력해주세요");
                    $('#result_phone_msg').css("color", "brown");

                }else if(phoneCheck.test(userphone)){


                    $.ajax({//post방식으로 phone_check.php에 입력한 userid값을 넘깁니다
                        type: 'POST',
                        url : "/drawingDay/handphone_check.php",
                        data:{
                            userphone : userphone
                        },
                        success : function(result){ 
                            console.log(result);
                            if(result=="\n\n\nno"){ //만약 data값이 전송되면
                                $("#result_phone_msg").html("이미 등록된 연락처 입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                                $('#result_phone_msg').css("color", "brown");
                            }else if(result=="\n\n\nok"){
                                $("#result_phone_msg").html("핸드폰 번호로 연락처를 등록합니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                                $('#result_phone_msg').css("color", "#5280D4");
                            }
                            // if(re.length>0){ //만약 data값이 전송되면
                            //    $("#result_phone_msg").html(re); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                            // }
                      
                        }
        
                    }); //end ajax
                }
               
            }else if(check.test(userphone)){

                $.ajax({//post방식으로 phone_check.php에 입력한 userid값을 넘깁니다
                    type: 'POST',
                    url : "/drawingDay/phone_check.php",
                    data:{
                        userphone : userphone
                    },
                    success : function(result){ 
                        if(result=="\n\n\nno"){ //만약 data값이 전송되면
                            $("#result_phone_msg").html("이미 등록된 연락처 입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                            $('#result_phone_msg').css("color", "brown");
                        }else if(result=="\n\n\nok"){
                            $("#result_phone_msg").html("일반 전화번호로 연락처를 등록합니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                            $('#result_phone_msg').css("color", "#5280D4");
                        }
                  
                    }
    
                }); //end ajax
            }
        }
    });
});//연락처 정규식 일치 & 중복 확인 END


//이메일 정규식 일치 확인
$(document).ready(function(e) { 
    $("#inputEmail").on("keyup", function(){
        if($('#inputEmail').val().length < 1){
            $('#result_email_msg').html("이메일 주소를 입력해주세요");
            $('#result_email_msg').css("color", "brown");


        }else if($('#inputEmail').val().length > 1){
            var email =  $("#inputEmail").val();
            var check = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;
            if(!check.test(email)){
                $('#result_email_msg').html("[abcd@abcd.com] 형식으로 입력해주세요.");
           $('#result_email_msg').css("color", "brown");
            }else if(check.test(email)){

                $.ajax({//post방식으로 phone_check.php에 입력한 userid값을 넘깁니다
                    type: 'POST',
                    url : "/drawingDay/email_check.php",
                    data:{
                        email : email
                    },
                    success : function(result){
                        console.log(result);

                        if(result=="\n\n\nno"){ //만약 data값이 전송되면
                            $("#result_email_msg").html("이미 등록된 이메일 입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                            $('#result_email_msg').css("color", "brown");
                        }else if(result=="\n\n\nok"){

                            //여기에서 검사

                            // $("#result_email_msg").html("입력하신 이메일로 등록합니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                            // $('#result_email_msg').css("color", "#5280D4");
                        }

                        // if(re.length>0){ //만약 data값이 전송되면
                        //    $("#result_email_msg").html(re); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                        // }
                  
                    }
    
                }); //end ajax
                
            }

        }
    
    });
});//이메일 정규식 일치 & 중복 확인 END



//$(function(){//정규식 확인(비밀번호, 연락처, 이메일) //빈칸체크

function checkSubmit(){//정규식 확인(비밀번호, 연락처, 이메일) //빈칸체크
    // 회원 가입 처리
    // $('#join-submit').click(function(e){
    //     e.preventDefault();

//빈칸

//아이디
if($("#inputId").val() ==''){
    alert('아이디를 입력하세요');
    $("#inputId").focus();
    return false;
}
       
//이름

if($("#inputName").val() ==''){
    alert('이름을 입력하세요');
    $("#inputName").focus();
    return false;
}


//비빌번호
        var pw = $('#inputPassword').val();

        if(pw.length<8 || pw.length > 16){//8자리 미만, 16자리 초과일 경우
        
            alert('비밀번호가 유효하지 않습니다. 조건을 확인해주세요.');
            $("#inputPassword").focus();
            return false;

        }else{ //자리수는 맞을 때, 정규식 검사

            var pwRegex = /^(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])(?=.*[0-9]).{8,16}$/;

            if (!pwRegex.test(pw)) {
                alert('비밀번호가 유효하지 않습니다. 조건을 확인해주세요.');
                $("#inputPassword").focus();
                return false;
            }

        }//비밀번호 조건 검사

        if($("#inputPassword").val()!== $("#inputPasswordCheck").val()){
            alert('비밀번호 확인이 일치하지 않습니다. 다시 입력해주세요');
            return false;
        }//비밀번호 확인 일치 여부


        //비빌번호 끝

//연락처 
        var pcheck = /^(0(2|3[1-3]|4[1-4]|5[1-5]|6[1-4]))-(\d{3,4})-(\d{4})$/; //일반전화 정규식
        var phoneCheck = /^(?:(010-\d{4})|(01[1|6|7|8|9]-\d{3,4}))-(\d{4})$/; //핸드폰 정규식

        var phone = $('#inputPhone').val();

        if($("#inputPhone").val() ==''){
            alert('연락처를 입력하세요');
            $("#inputPhone").focus();
            return false;
        }

        if (!pcheck.test(phone)) {//일반전화 정규식에 안맞으면

            if(!phoneCheck.test(phone)){ //핸드폰 정규식에도 안맞으면

                alert('연락처는 휴대전화번호 또는 일반전화번호를 등록할 수 있습니다.\n다시 입력해주세요.');
                $("#inputPhone").focus();
                return false;
            }
            
        }

        //연락처 끝

//이메일        
        var email = $('#inputEmail').val();

        var emailRegex = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;
        
        if(email.length<=0){
            alert('이메일을 입력하세요');
            $("#inputEmail").focus();
            return false;
        }else{
            if (!emailRegex.test(email)) {
            alert('이메일 주소가 유효하지 않습니다. ex)abc@abc.com');
            $("#inputEmail").focus();
            return false;
            }
        }






    }// 회원 가입 처리 버튼 누를때 //정규식 확인(비밀번호, 연락처, 이메일) END

//});//정규식 확인(비밀번호, 연락처, 이메일) END





        
       
    

        

        // if($("#inputPassword").val() ==''){
        //     alert('비밀번호를 입력하세요');
        //     $("#inputPassword").focus();
        //     return false;
        // }else 
        

        // if($("#inputPasswordCheck").val() ==''){
        //     alert('비밀번호를 다시 한번 더 입력하세요');
        //     $("#inputPasswordCheck").focus();
        //     return false;
        // }
        
       
        


      
        
        // if($("#agree").is(":checked") == false){
        //     alert('약관에 동의하셔야 합니다');
        //     return false;      
        // }
        
              
        

