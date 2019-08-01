<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>JsStudy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/test.css">
        <link rel="stylesheet" href="css/list.css">
        <link rel="stylesheet" href="css/list02.css">
        <link rel="stylesheet" href="css/box.css">
        <link rel="stylesheet" href="css/upload.css">
        <link rel="stylesheet" href="css/img.css">
        <link rel="stylesheet" href="css/button.css">
        <link rel="stylesheet" href="css/omikuji.css">
        <link rel="stylesheet" href="css/result_box.css">
        <link rel="stylesheet" href="css/typing.css">
        <link rel="stylesheet" href="css/toppage.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/button.css">
        <link rel="stylesheet" href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css">
    </head>

    <body>
        <div style="margin:100px;">
            @include('commons.navbar')
        </div>
        
        <div class="box">
            @include('commons.error_messages')
            
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="js/preview.js"></script>
        <script src="js/lightgallery.min.js"></script>
        <script src="js/test.js"></script>
        <script src="js/omikuji.js"></script>
        <script src="js/typing.js"></script>
        <script src="js/nav.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/superbox.js"></script>
        <script src="js/superbox.min.js"></script>
        <script>
            $(function() {
                $('.superbox').SuperBox();
            });
        </script>
    </body>
</html>