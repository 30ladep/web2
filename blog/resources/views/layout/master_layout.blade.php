<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=UTF-8>

    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700%7CRaleway:300,400,700%7CPlayfair+Display:700' rel='stylesheet'>

    <!-- Css -->
    <!-- <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}" /> -->
    <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{url('/css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{url('/css/sliders.css')}}" />
    <link rel="stylesheet" href="{{url('/css/style.css')}}" />
    <link rel="stylesheet" href="{{url('/css/animate.min.css')}}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{url('/img/favicon.ico')}}" />
    <link rel="shortcut icon" href="{{url('/img/apple-touch-icon.html')}}" />
    <link rel="shortcut icon" href="{{url('/img/apple-touch-icon-72x72.png')}}" />
    <link rel="shortcut icon" href="{{url('/img/apple-touch-icon-114x114.png')}}" />


	<title>@yield('title')</title>
</head>
<body class="relative">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>

  <main class="content-wrapper oh">

    @include('partial.header')

    @yield('content')      

    <!-- Footer Type-1 -->
    @include('partial.footer')
    <!-- end footer -->

  </main> <!-- end main container -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{url('/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{url('/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{url('/js/plugins.js')}}"></script>
  <script type="text/javascript" src="{{url('/js/scripts.js')}}"></script>
    
</body>
</html>