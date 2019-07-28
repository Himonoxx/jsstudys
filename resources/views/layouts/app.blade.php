<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>JsStudy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/test.css">
        <link rel="stylesheet" href="css/list.css">
        <link rel="stylesheet" href="css/list02.css">
        <link rel="stylesheet" href="css/box.css">
        <link rel="stylesheet" href="css/upload.css">
        <link rel="stylesheet" href="css/img.css">
        <link rel="stylesheet" href="css/button.css">
    </head>

    <body>

        @include('commons.navbar')
        
        <div class="box">
            @include('commons.error_messages')
            
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="js/preview.js"></script>
    </body>
</html>