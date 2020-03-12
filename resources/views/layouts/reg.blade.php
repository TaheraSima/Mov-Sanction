
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

<body class="hold-transition login-page"> 
    @yield('content')
    @include('../partials.scripts') 
</body>
</html> 