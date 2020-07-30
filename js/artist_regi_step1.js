//프로필사진
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

