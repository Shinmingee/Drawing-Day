
//회원정보 누락 없는지
//이메일(id), 비번, 비번확인, 이름, 닉네임 은 필수입력


var name_check = 0;
//실시간 이름 중복체크
$(document).ready(function(e) { 
    $("#inputName").on("keyup", function(){ //check라는 클래스에 입력을 감지
        if($('#inputName').val().length <2){
            $("#result_name_msg").html("이름은 두 자 이상으로 입력해주세요.");
            $('#result_name_msg').css("color", "brown");

        }else if($('#inputName').val().length >= 2){
            //$("#result_id_msg").html("아이디는 4자 이상이여야 합니다.")
        // }else{
           var self = $(this); 
           var username; 
		
		    if(self.attr("id") === "inputName"){ 
                username = self.val(); 
            } 
            
            $.ajax({//post방식으로 name_check.php에 입력한 값을 넘깁니다
                type: 'POST',
                url : "/drawingDay/name_check.php",
                data:{
                    username : username
                },
                success : function(result){ 
                    console.log(result);
                    console.log(result.length);

                    if(result=="\n\n\nno"){ //만약 data값이 전송되면
                        $("#result_name_msg").html("이미 가입된 이름입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                        $('#result_name_msg').css("color", "brown");
                    }else if(result=="\n\n\nok"){
                        $("#result_name_msg").html("가입 가능한 이름입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                        $('#result_name_msg').css("color", "#5280D4");
                        name_check = 100;
                    }
              
                }

            }); //end ajax
        }
    }); //end keyup
});	//실시간 이름 중복체크 END
        
var pw_ = 0;
var pw_check = 0;
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
                pw_ = 100;
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
            pw_check=100;
        
        }else if($('#inputPassword').val() != $('#inputPasswordCheck').val()){ 
        
            $('#result_pw_check_msg').html("비밀번호가 일치하지 않습니다. 다시 입력해주세요.");
            $('#result_pw_check_msg').css("color", "brown");
        }
        
    });
});//비밀번호-비밀번호 확인 과 일치 여부 END



//실시간 닉네임 중복체크
var nickName_check=0;
$(document).ready(function(e) { 
    $("#inputNickname").on("keyup", function(){ //check라는 클래스에 입력을 감지
        if($('#inputNickname').val().length <1){
            $("#result_nick_msg").html("사용하실 닉네임을 입력해주세요.");
            $('#result_nick_msg').css("color", "brown");

        }else if($('#inputNickname').val().length >= 1){
            //$("#result_id_msg").html("아이디는 4자 이상이여야 합니다.")
        // }else{
           var self = $(this); 
           var usernick; 
		
		    if(self.attr("id") === "inputNickname"){ 
                usernick = self.val(); 
            } 
            
            $.ajax({//post방식으로 name_check.php에 입력한 값을 넘깁니다
                type: 'POST',
                url : "/drawingDay/nickname_check.php",
                data:{
                    usernick : usernick
                },
                success : function(result){ 
                    console.log(result);
                    console.log(result.length);

                    if(result=="\n\n\nno"){ //만약 data값이 전송되면
                        $("#result_nick_msg").html("이미 사용중인 닉네임입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                        $('#result_nick_msg').css("color", "brown");
                    }else if(result=="\n\n\nok"){
                        $("#result_nick_msg").html("사용 가능한 닉네임입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                        $('#result_nick_msg').css("color", "#5280D4");
                        nickName_check=100;
                    }
              
                }

            }); //end ajax
        }
    }); //end keyup
});	//실시간 닉네임 중복체크 END






//이메일 정규식 일치 확인
$(document).ready(function(e) { 
   
    $("#inputEmail").on("keyup", function(){
        if($('#inputEmail').val().length < 1){
            $('#result_email_msg').html("이메일 주소를 입력해주세요");
            $('#result_email_msg').css("color", "brown");
            $("#email_auth_btn").attr("disabled", true);
            $("#randomDiv").css("display","none");


        }else if($('#inputEmail').val().length > 1){
            var email =  $("#inputEmail").val();
            var check = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;
            if(!check.test(email)){
                $('#result_email_msg').html("[abcd@abcd.com] 형식으로 입력해주세요.");
                $('#result_email_msg').css("color", "brown");
                $("#email_auth_btn").attr("disabled", true);
                $("#randomDiv").css("display","none");

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
                            $("#email_auth_btn").attr("disabled", true);
                            $("#randomDiv").css("display","none");

                        }else if(result=="\n\n\nok"){
                            $("#result_email_msg").html("이메일을 인증해주세요"); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                            $("#email_auth_btn").attr("disabled", false);

                            //$("#email_auth_btn").css("cursor","allowed");
                           
                            //여기에서 검사

                            
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


var check_email=0;
$(document).ready(function(e) {
    var Str;

    $("#email_auth_btn").click(function(){
        Str = myAjax();
    });

    console.log("Str");
    console.log(Str);

    $("#random_auth_btn").click(function(){
        console.log("여기 randomOk");

        var randomNum =  $("#inputRandom").val();
        console.log(randomNum);
        console.log(Str);
        var check = Str.substr(0,8);
        console.log(check);
        if(check === randomNum){
            alert("이메일 인증 완료");
            check_email=100;
            $("#result_email_msg").html("입력하신 이메일로 등록합니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
            $('#result_email_msg').css("color", "#5280D4");
            $("#email_msg").html("인증 완료"); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
            $('#email_msg').css("color", "#5280D4");
        }else{
            alert("이메일 인증 실패\n인증번호를 정확하게 입력해주세요");

            $("#result_email_msg").html("이메일을 인증해주세요"); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
            $('#result_email_msg').css("color", "brown");
            $("#email_msg").html("인증실패"); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
            $('#email_msg').css("color", "brown");
        }
      
    });


});

function myAjax() {
    var email =  $("#inputEmail").val();
    var ranStr="";
   
    $.ajax({
       type: "POST",
       url: 'email_auth.php',
       async:false,
       data:{email:email},
       success:function(html) { 
        alert("인증메일이 발송되었습니다.");
        //여기서 약 3초간 멈춤..
        if(html.length==9){

            console.log("여기 들어와?");
            $("#randomDiv").css("display","");
        
        }

        ranStr = html;
       }
    });

    return ranStr;
}






//$(function(){//정규식 확인(비밀번호, 연락처, 이메일) //빈칸체크
// $(document).ready(function(e) {
    
//     $("#join-submit").click(function(){
//         checkSubmit();
//     });
// });

function checkSubmit(){//정규식 확인(비밀번호, 연락처, 이메일) //빈칸체크
    // 회원 가입 처리
    // $('#join-submit').click(function(e){
    //     e.preventDefault();

    console.log(check_email);
    

    if ($("input:checkbox[name='check_using']").is(":checked") != true){
        alert('이용약관을 확인해주세요.');
        return false;
    }
      
    if ($("input:checkbox[name='check_privit']").is(":checked") != true){
        alert('개인정보 정책을 확인해주세요.');
        return false;
    }
        



    if(check_email==0){
        alert('이메일 인증을 해주세요');
        $("#inputEmail").focus();
        return false;
    }

    if(nickName_check==0){
        alert('닉네임을 확인해주세요');
        $("#inputNickname").focus();
        return false;
    }

    if(name_check==0){
        alert('이름을 확인해주세요');
        $("#inputName").focus();
        return false;
    }



//빈칸

//닉네임
if($("#inputNickname").val() ==''){
    alert('닉네임를 입력하세요');
    $("#inputNickname").focus();
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


    

 