
//전화번호 
var check_pn=0;
//입력시 3/4/4 로 "-" 넣어주기
$(document).ready(function (e){
    $("#aritst_regi_phone").on("keyup", function() { 
        $("#aritst_regi_phone_btn").attr("disabled", true);
        $(this).val( $(this).val().replace(/[^0-9]/g, "").replace(/(01[016789])([1-9]{1}[0-9]{2,3})([0-9]{4})$/,"$1-$2-$3") 
        );
    });
})

//중복확인 바로바로
//핸드폰 형식에 맞추기
$(document).ready(function(e){
    $("#aritst_regi_phone").on("keyup", function(){ //check라는 클래스에 입력을 감지
        if($('#aritst_regi_phone').val().length <13){
            $("#phone_msg").html("올바른 핸드폰 번호를 입력해주세요");
            $('#phone_msg').css("color", "brown");
            $("#aritst_regi_phone_btn").attr("disabled", true);
            


        }else if($('#aritst_regi_phone').val().indexOf("-") === 3 || $('#aritst_regi_phone').val().indexOf("-") === 8){
            //$("#result_id_msg").html("아이디는 4자 이상이여야 합니다.")
        // }else{
           var self = $(this); 
           var phoneNum; 
		
		    if(self.attr("id") === "aritst_regi_phone"){ 
                phoneNum = self.val(); 
            } 
            
            $.ajax({//post방식으로 name_check.php에 입력한 값을 넘깁니다
                type: 'POST',
                url : "/drawingDay/phoneNum_check.php",
                data:{
                    phoneNum : phoneNum
                },
                success : function(result){ 
                    console.log(result);
                    console.log(result.length);

                    if(result=="\n\n\nno"){ //만약 data값이 전송되면
                        $("#phone_msg").html("이미 사용중인 연락처입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                        $('#phone_msg').css("color", "brown");
                        $("#aritst_regi_phone_btn").disabled = true;
                    }else if(result=="\n\n\nok"){
                        $("#phone_msg").html("사용 가능한 연락처입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                        $('#phone_msg').css("color", "#5280D4");
                        $("#aritst_regi_phone_btn").attr("disabled", false);

                        //여기서만 버튼 활성화
                        check_pn=100;

                    }
              
                }

            }); //end ajax
        }else if($('#aritst_regi_phone').val().length > 13){
            $("#phone_msg").html("올바른 핸드폰 번호를 입력해주세요");
            $('#phone_msg').css("color", "brown");
            $("#aritst_regi_phone_btn").attr("disabled", true);


        }
    }); //end keyup

});


//닉네임
//
//특수문자 제외, 20자 이하 

//중복확인 바로바로
//실시간 닉네임 중복체크
var check_nn=0;
var regExp_nick = /[\{\}\[\]\/?.,;:|\)*~`!^\-+<>@\#$%&\\\=\(\'\"]/gi;

$(document).ready(function(e) { 
    $("#aritst_regi_nick").on("keyup", function(){ //check라는 클래스에 입력을 감지

        if(regExp_nick.test($('#aritst_regi_nick').val())){
            $("#nick_msg").html("특수문자는 제외하고 입력해주세요.");
            $('#nick_msg').css("color", "brown");
            $('#aritst_regi_nick').empty();
        }else{
            if($('#aritst_regi_nick').val().length <1){
            
                $("#nick_msg").html("사용하실 닉네임을 입력해주세요.");
                $('#nick_msg').css("color", "brown");
    
            }else if($('#aritst_regi_nick').val().length >= 1 && $('#aritst_regi_nick').val().length <= 20 ){
                
                if(regExp_nick.test($('#aritst_regi_nick').val())){
                    $("#nick_msg").html("특수문자는 제외하고 입력해주세요.");
                    $('#nick_msg').css("color", "brown");
                    //$('#aritst_regi_nick').empty();
                
                }else{
                        //if($('#aritst_regi_nick').val())
                                    
                        var self = $(this); 
                        var usernick; 
    
                        if(self.attr("id") === "aritst_regi_nick"){ 
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
                                    $("#nick_msg").html("이미 사용중인 닉네임입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                                    $('#nick_msg').css("color", "brown");
                                }else if(result=="\n\n\nok"){
                                    $("#nick_msg").html("사용 가능한 닉네임입니다."); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                                    $('#nick_msg').css("color", "#5280D4");
                                    
                                    check_nn=100;
                                }
                        
                            }
    
                        }); //end ajax
                }
    
            }else if($('#aritst_regi_nick').val().length>21){
                $("#nick_msg").html("닉네임은 20자 이하로 입력해주세요.");
                $('#nick_msg').css("color", "brown");        
            }
        }

      
    }); //end keyup
});	//실시간 닉네임 중복체크 END



//파일저장 시 크기를 제한하여 초과파일은 업로드를 막는다(이미지:2MB, pdf:5MB)





$(document).ready(function (e){

    //$("input[type='file']").change(function(e){
    $("input[name='aritst_regi_profile']").change(function(e){

    //console.log("여기 들어와???");

    //div 내용 비워주기
    $('#preview').empty();

    var files = e.target.files;
    var arr =Array.prototype.slice.call(files);
    
    //업로드 가능 파일인지 체크
    for(var i=0;i<files.length;i++){
        if(!checkExtension(files[i].name,files[i].size)){
        return false;
        }
    }
    
    preview(arr);
    
    });//file change
    
    function checkExtension(fileName,fileSize){

    var regex = new RegExp("(.*?)\.(exe|sh|zip|alz)$");
    var maxSize = 2097152;  //2MB
    
    
    if(fileSize >= maxSize){
        alert('[업로드 오류] 파일 용량 초과');
        $("input[name='aritst_regi_profile']").val("");  //파일 초기화
        return false;
    }
    
    if(regex.test(fileName)){
        alert('[업로드 불가] 파일 형식 오류\n파일확장자를 확인해주세요.');
        $("input[name='aritst_regi_profile']").val("");  //파일 초기화
        return false;
    }
    return true;
    }

    function preview(arr){
    arr.forEach(function(f){
        
        //파일명이 길면 파일명...으로 처리
        var fileName = f.name;
        if(fileName.length > 10){
        fileName = fileName.substring(0,7)+"...";
        }
        
        //div에 이미지 추가
        //var str = '<div class="profile_box">';
        // str += '<span>'+fileName+'</span><br>';
        
        //이미지 파일 미리보기
        if(f.type.match('image.*')){
        var reader = new FileReader(); //파일을 읽기 위한 FileReader객체 생성
        reader.onload = function (e) { //파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러
            //str += '<button type="button" class="delBtn" value="'+f.name+'" style="background: red">x</button><br>';
            var str = '<img class="profile" src="'+e.target.result+'" title="'+f.name+'" width=150 height=150/>';
            //str += '</div>';
            $(str).appendTo('#preview');
        } 
        reader.readAsDataURL(f);
        }else{
            var str = '<img src="/resources/img/fileImg.png" title="'+f.name+'" width=150 height=150 />';
        $(str).appendTo('#preview');
        }
    });//arr.forEach

    }

});//프로필사진 END



//신분증 사진
$(document).ready(function (e){

//$("#aritst_regi_id").click(function(){
    //$("input[type='file']").change(function(e){
    $("input[name='aritst_regi_id']").change(function(e){

    //div 내용 비워주기
    $('#preview_identity').empty();

    var files = e.target.files;
    var arr =Array.prototype.slice.call(files);

    //console.log(files+"여기 들어와?2");
    
    //업로드 가능 파일인지 체크
    for(var i=0;i<files.length;i++){
        if(!checkExtension1(files[i].name,files[i].size)){
        return false;
        }
    }
    
    preview1(arr);
    
    
    });//file change

    function checkExtension1(fileName,fileSize){

    var regex = new RegExp("(.*?)\.(exe|sh|zip|alz)$");
    var maxSize = 2097152;  //2MB



    if(fileSize >= maxSize){
        alert('[업로드 오류] 파일 용량 초과');
        $("input[name='aritst_regi_id']").val("");  //파일 초기화
        return false;
    }
    
    if(regex.test(fileName)){
        alert('[업로드 불가] 파일 형식 오류\n파일확장자를 확인해주세요.');
        $("input[name='aritst_regi_id']").val("");  //파일 초기화
        return false;
    }
    return true;
    }
    
    function preview1(arr){
        arr.forEach(function(f){
        
        //파일명이 길면 파일명...으로 처리
        var fileName = f.name;
        if(fileName.length > 10){
        fileName = fileName.substring(0,7)+"...";
        }
        
        //div에 이미지 추가
        //var str = '<div class="profile_box">';
        // str += '<span>'+fileName+'</span><br>';
        
        //이미지 파일 미리보기
        if(f.type.match('image.*')){
        var reader = new FileReader(); //파일을 읽기 위한 FileReader객체 생성
        reader.onload = function (e) { //파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러
            //str += '<button type="button" class="delBtn" value="'+f.name+'" style="background: red">x</button><br>';
            var str = '<img src="'+e.target.result+'" title="'+f.name+'" width=300 height=200/>';
            //str += '</div>';
            $(str).appendTo('#preview_identity');
        } 
        
        reader.readAsDataURL(f);

        }else{
            var str = '<img src="/resources/img/file.png" title="'+f.name+'" width=300 height=200 />';
        $(str).appendTo('#preview_identity');
        }
    });//arr.forEach
    }

});//신분증 미리보기 END


//대학 증명서
$(document).ready(function (e){

    //$("#aritst_regi_id").click(function(){
        //$("input[type='file']").change(function(e){
        $("input[name='aritst_regi_univ_file']").change(function(e){
    
        //div 내용 비워주기
        $('#preview_univ').empty();
    
        var files = e.target.files;
        var arr =Array.prototype.slice.call(files);
    
        //console.log(files+"여기 들어와?2");
        
        //업로드 가능 파일인지 체크
        for(var i=0;i<files.length;i++){
            if(!checkExtension1(files[i].name,files[i].size)){
            return false;
            }
        }
        
        preview1(arr);
        
        
        });//file change
    
        function checkExtension1(fileName,fileSize){
    
        var regex = new RegExp("(.*?)\.(exe|sh|zip|alz)$");
        var maxSize = 2097152;  //2MB
        
        if(fileSize >= maxSize){
            alert('[업로드 오류] 파일 용량 초과');
            $("input[name='aritst_regi_univ_file']").val("");  //파일 초기화
            return false;
        }
        
        if(regex.test(fileName)){
            alert('[업로드 불가] 파일 형식 오류\n파일확장자를 확인해주세요.');
            $("input[name='aritst_regi_univ_file']").val("");  //파일 초기화
            return false;
        }
        return true;
        }
        
        function preview1(arr){
            arr.forEach(function(f){
            
            //파일명이 길면 파일명...으로 처리
            var fileName = f.name;
            if(fileName.length > 10){
            fileName = fileName.substring(0,7)+"...";
            }
            
            //div에 이미지 추가
            //var str = '<div class="profile_box">';
            // str += '<span>'+fileName+'</span><br>';
            
            //이미지 파일 미리보기
            if(f.type.match('image.*')){
            var reader = new FileReader(); //파일을 읽기 위한 FileReader객체 생성
            reader.onload = function (e) { //파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러
                //str += '<button type="button" class="delBtn" value="'+f.name+'" style="background: red">x</button><br>';
                var str = '<img src="'+e.target.result+'" title="'+f.name+'" width=200 height=300/>';
                //str += '</div>';
                $(str).appendTo('#preview_univ');
            } 
            
            reader.readAsDataURL(f);
    
            }else{
                var str = '<img src="/resources/img/file.png" title="'+f.name+'" width=200 height=300 />';
            $(str).appendTo('#preview_univ');
            }
        });//arr.forEach
        }
    
});//대학 증명서 END


//대학원 증명
$(document).ready(function (e){

        //$("#aritst_regi_id").click(function(){
            //$("input[type='file']").change(function(e){
            $("input[name='aritst_regi_gradu_file']").change(function(e){
        
            //div 내용 비워주기
            $('#preview_gradu').empty();
        
            var files = e.target.files;
            var arr =Array.prototype.slice.call(files);
        
            //console.log(files+"여기 들어와?2");
            
            //업로드 가능 파일인지 체크
            for(var i=0;i<files.length;i++){
                if(!checkExtension1(files[i].name,files[i].size)){
                return false;
                }
            }
            
            preview1(arr);
            
            
            });//file change
        
            function checkExtension1(fileName,fileSize){
        
            var regex = new RegExp("(.*?)\.(exe|sh|zip|alz)$");
            var maxSize = 2097152;  //2MB
            
            if(fileSize >= maxSize){
                alert('[업로드 오류] 파일 용량 초과');
                $("input[name='aritst_regi_gradu_file']").val("");  //파일 초기화
                return false;
            }
            
            if(regex.test(fileName)){
                alert('[업로드 불가] 파일 형식 오류\n파일확장자를 확인해주세요.');
                $("input[name='aritst_regi_gradu_file']").val("");  //파일 초기화
                return false;
            }
            return true;
            }
            
            function preview1(arr){
                arr.forEach(function(f){
                
                //파일명이 길면 파일명...으로 처리
                var fileName = f.name;
                if(fileName.length > 10){
                fileName = fileName.substring(0,7)+"...";
                }
                
                //div에 이미지 추가
                //var str = '<div class="profile_box">';
                // str += '<span>'+fileName+'</span><br>';
                
                //이미지 파일 미리보기
                if(f.type.match('image.*')){
                var reader = new FileReader(); //파일을 읽기 위한 FileReader객체 생성
                reader.onload = function (e) { //파일 읽어들이기를 성공했을때 호출되는 이벤트 핸들러
                    //str += '<button type="button" class="delBtn" value="'+f.name+'" style="background: red">x</button><br>';
                    var str = '<img src="'+e.target.result+'" title="'+f.name+'" width=200 height=300/>';
                    //str += '</div>';
                    $(str).appendTo('#preview_gradu');
                } 
                
                reader.readAsDataURL(f);
        
                }else{
                    var str = '<img src="/resources/img/file.png" title="'+f.name+'" width=200 height=300 />';
                $(str).appendTo('#preview_gradu');
                }
            });//arr.forEach
            }
        
});//대학원 증명 END 





//포트폴리오pdf 파일 업로드
/* when users selects a file */
document.querySelector("#pdf-file").addEventListener('change', function() {
    // user selected PDF
    var file = this.files[0];

    // allowed MIME types
    var mime_types = [ 'application/pdf' ];
    
    // validate whether PDF
    if(mime_types.indexOf(file.type) == -1) {
        //alert('Error : Incorrect file type');
        alert('[업로드 불가] 파일 형식 오류\nPDF파일만 업로드 가능합니다.');
        return;
    }

    // validate file size
    //5242880 = 5MB
    if(file.size > 5242880) {//5MB
        alert('[업로드 오류] 파일 용량 초과');
        //alert('Error : Exceeded size 10MB');
        return;
    }
// validation is successful

    // hide upload dialog
    document.querySelector("#upload-dialog").style.display = 'none';
    
    // show the PDF preview loader
    document.querySelector("#pdf-loader").style.display = 'inline-block';

    // object url of PDF 
    _OBJECT_URL = URL.createObjectURL(file)

    // send the object url of the pdf to the PDF preview function
    showPDF(_OBJECT_URL);
});



function checkSubmit(){//->alert로 알려줌
  
    // 빈칸체크
    //전화번호//전화번호 인증 버튼 누름 여부
     if(check_pn==0){
        alert('전화번호 인증을 해주세요');
        $("#aritst_regi_phone").focus();
        return false;
    }
    //닉네임
    if(check_nn==0){
        alert('닉네임을 확인해주세요');
        $("#aritst_regi_nick").focus();
        return false;
    }
    // //프로필사진
    // if($('#aritst_regi_profile').val().length<0){
    //     alert('프로필 사진 등록은 필수입력사항 입니다');
    //     $("#aritst_regi_profile").focus();
    //     return false;
    // }
    // //신분증사진
    // if($('#aritst_regi_id').val().length<0){
    //     alert('신분증사진 등록은 필수입력사항 입니다');
    //     $("#aritst_regi_id").focus();
    //     return false;
    // }

    // validation
    //닉네임- 특수문자 포함여부
    if(regExp_nick.test($('#aritst_regi_nick').val())){
        alert('닉네임에 특수문자가 포함되어있습니다.');
        $("#aritst_regi_nick").focus();
        return false;
    }else if($("#aritst_regi_nick").val().length<4 || ($("#aritst_regi_nick").val().length>20)){
        alert('닉네임의 길이를 확인해주세요.');
        $("#aritst_regi_nick").focus();
        return false;
    }


    
}