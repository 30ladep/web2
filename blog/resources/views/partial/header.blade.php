<!-- Navigation -->

<header class="nav-type-1">

  <div class="top-bar hidden-sm hidden-xs">
    <div class="container">
      <div class="top-bar-line">
        <div class="row">
          <div class="top-bar-links">
            <ul class="col-sm-6 top-bar-acc">
              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>

              @else

              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->username }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  @can('update', Model::class)
                  <a class="dropdown-item" href="{{ route('admins.index') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Admin') }}
                  </a>
                  @endcan
                
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>

              @endguest
            </ul>

            <ul class="col-sm-6 text-right top-bar-currency-language">
              <li>
                <div class="social-icons">
                <a href="{{route('admins.index')}}"> <i class="fas fa-user-astronaut  fa-2x"></i></a>
                <a href="{{url('/infouser')}}"><i class="far fa-user-circle  fa-2x"></i></a>
                </div>
              </li>
            </ul>

          </div>
        </div>
      </div>

    </div>
  </div> <!-- end top bar -->

  <nav class="navbar navbar-static-top">
    <div class="navigation" id="sticky-nav">
      <div class="container relative">

        <div class="row">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Mobile cart -->
            <div class="nav-cart mobile-cart hidden-lg hidden-md">
              <div class="nav-cart-outer">
                <div class="nav-cart-inner">
                  <a href="{{url('/cart')}}" class="nav-cart-icon"></a>
                </div>
              </div>
            </div>
          </div> <!-- end navbar-header -->

          <div class="header-wrap">
            <div class="header-wrap-holder">

              <!-- Search -->
              <div class="nav-search hidden-sm hidden-xs">
                <form method="get" action="{{url('search')}}">
                  {{-- @csrf --}}
                  <input type="search" class="form-control" name="timkiem" placeholder="Search">
                  <button type="submit" class="search-button">
                    <i class="icon icon_search"></i>
                  </button>
                </form>
              </div>

              <!-- Logo -->
              <div class="logo-container">
                <div class="logo-wrap text-center">
                  <a href="{{url('/')}}">
                    <img class="logo" src="{{url('/img/logo_dark.png')}}" alt="logo">
                  </a>
                </div>
              </div>

              <!-- Cart -->
              <div class="nav-cart-wrap hidden-sm hidden-xs">
                <div class="nav-cart right">
                  <div class="nav-cart-outer">
                    <div class="nav-cart-inner">
                      {{-- <a href="{{url('/cart')}}" class="nav-cart-icon">2</a> --}}
                      <a href="{{url('/cart')}}" class="nav-cart-icon"></a>
                    </div>
                  </div>
                </div>
                <div class="menu-cart-amount right">
                  <span>
                    Cart /
                    {{-- <a href="{{url('/cart')}}">{!!Cart::total() !!}</a> --}}
                    <a href="{{url('/cart')}}"></a>
                  </span>
                </div>
              </div> <!-- end cart -->

            </div>
          </div> <!-- end header wrap -->

          <div class="nav-wrap">
            <div class="collapse navbar-collapse" id="navbar-collapse">

              <ul class="nav navbar-nav">

                <li id="mobile-search" class="hidden-lg hidden-md">
                  <form method="get" class="mobile-search relative">
                    <input type="search" class="form-control" placeholder="Search...">
                    <button type="submit" class="search-button">
                      <i class="icon icon_search"></i>
                    </button>
                  </form>
                </li>

                <li class="dropdown">
                  <a href="{{url('/')}}">Home</a>
                </li>

                <li class="dropdown">
                  <a href="#">Shop</a>
                  <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/catalog')}}">Catalog</a></li>
                  </ul>
                </li>

                <li class="mobile-links">
                  <ul>
                    <li>
                      <a href="{{url('/login')}}">Login</a>
                    </li>

                    <a href="#">User Accout</a>

                </li>
              </ul>
              </li>

              </ul> <!-- end menu -->
            </div> <!-- end collapse -->
          </div> <!-- end col -->

        </div> <!-- end row -->
      </div> <!-- end container -->
    </div> <!-- end navigation -->
  </nav> <!-- end navbar -->
  <style>
    .product-img img {
      width: 200px;
      height: 260px;
      display: inline-block;
    }
    .pagination{
      margin: 0 auto;
      display: inline-block;
    }
  </style>
</header> <!-- end navigation -->