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
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../public/css/magnific-popup.css" />
    <link rel="stylesheet" href="../public/css/font-icons.css" />
    <link rel="stylesheet" href="../public/css/sliders.css" />
    <link rel="stylesheet" href="../public/css/style.css" />
    <link rel="stylesheet" href="../public/css/animate.min.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="../public/img/favicon.ico">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="../public/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../public/img/apple-touch-icon-114x114.png">


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
  <script type="text/javascript" src="../public/js/jquery.min.js"></script>
  <script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../public/js/plugins.js"></script>
  <script type="text/javascript" src="../public/js/scripts.js"></script>
    
</body>
</html>