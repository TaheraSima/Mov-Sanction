
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>MOTD</title>

  @include('../partials.styles')
  <script src="{{asset('public/js/jquery.js')}}" type="text/javascript"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">         
    @include('../partials.nav')
    @include('../partials.sidebar')  
    @yield('content')
    @include('../partials.footer')
  </div>       
    @include('../partials.scripts') 
</body>
</html> 
