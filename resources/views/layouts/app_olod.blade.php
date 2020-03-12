<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MODTE</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        @include('../partials.styles')
        <script src="{{asset('public/js/jquery.js')}}" type="text/javascript"></script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
  
        <div class="wrapper" style="background-color: #ffff !important;">
          @yield('content')
        </div>       
       @include('../partials.scripts')  
    </body>
</html> 