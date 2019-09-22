<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" sizes="76x76" href="now_ui/img/apple-icon.png">
        <link rel="icon" type="image/png" href="now_ui/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>JsStudy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/test.css">
        <link rel="stylesheet" href="css/list.css">
        <link rel="stylesheet" href="css/list02.css">
        <link rel="stylesheet" href="css/box.css">
        <link rel="stylesheet" href="css/upload.css">
        <link rel="stylesheet" href="css/img.css">
        <link rel="stylesheet" href="css/button.css">
        @if(request()->path() == 'omikuji')
          <link rel="stylesheet" href="css/omikuji.css">
          <link rel="stylesheet" href="css/result_box.css">
        @endif
        @if(request()->path() == 'typing')
          <link rel="stylesheet" href="css/typing.css">
        @endif
        <link rel="stylesheet" href="css/toppage.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/button.css">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/btn-brackets.css">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- CSS Files -->
        <link href="now_ui/css/bootstrap.min.css" rel="stylesheet">
        <link href="now_ui/css/now-ui-kit.css?v=1.3.0" rel="stylesheet">"
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="now_ui/demo/demo.css" rel=stylesheet>
        <link rel="stylesheet" href="https://cdn.rawgit.com/balzss/luxbar/ae5835e2/build/luxbar.min.css">
        <link href="css/tweet_form.css" rel=stylesheet>
        <link rel="stylesheet" href="css/topimg.css">
        {{-- flash_message --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
        {{-- Super box --}}
    </head>

    <body>
        <div style="margin:100px;">
            @include('commons.navbar')
        </div>
        
        
        <div class="box">
            @include('commons.error_messages')
            @if (session('flash_messages'))
              <div class="flash_message bg-success text-center py-3 my-0">
                  {{ session('flash_messages') }}
              </div>
            @endif
            
            @yield('content')
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="js/preview.js"></script>
        <script src="js/lightgallery.min.js"></script>
        <script src="js/test.js"></script>
        @if(request()->path() == 'omikuji')
          <script src="js/omikuji.js"></script>
        @endif
        @if(request()->path() == 'typing')
          <script src="js/typing.js"></script>
        @endif
        <script src="js/nav.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/superbox.min.js"></script>
        <!--   Core JS Files   -->
          <script src="now_ui/js/core/jquery.min.js" type="text/javascript"></script>
          <script src="now_ui/js/core/popper.min.js" type="text/javascript"></script>
          <script src="now_ui/js/core/bootstrap.min.js" type="text/javascript"></script>
          <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
          <script src="now_ui/js/plugins/bootstrap-switch.js"></script>
          <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
          <script src="now_ui/js/plugins/nouislider.min.js" type="text/javascript"></script>
          <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
          <script src="now_ui/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
          <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
          <script src="now_ui/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
          {{-- Super Box --}}
          <script src="js/superbox.js"></script>
          {{-- flash_message --}}
          <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </body>
</html>