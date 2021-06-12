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

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

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