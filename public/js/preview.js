$(function(){
    $('#photo').on('change',function(e){
        var file=e.target.files[0];
        var reader=new FileReader();
        
        if(file.type.indexOf('image') < 0){
            $("#upload_text").text("画像が読み込めません。ファイル形式を確認して下さい。")
            return false;
        }
        
        reader.onload = function(e){
            $("#upload_text").replaceWith("<img>");
            $("img").attr({
                
                "src":e.target.result,
                "id":"preview",
                "style":"width:100%;"
                
            });
            $("#submit").html('<div style="text-align:center;"><h4 class="btn-brackets" style="text-decoration:none;"><input type="submit" value=UPLOAD THIS PICTURE></h4></div>')
            $("#up_comment").text('<<Preview>>');
        };
        
        reader.readAsDataURL(e.target.files[0]);
         
    });
});