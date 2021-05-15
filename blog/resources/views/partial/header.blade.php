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
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
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
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-vimeo"></i></a>
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
                  <a href="{{url('/shop-cart')}}" class="nav-cart-icon">2</a>
                </div>
              </div>
            </div>
          </div> <!-- end navbar-header -->
  
          <div class="header-wrap">
            <div class="header-wrap-holder">
  
              <!-- Search -->
              <div class="nav-search hidden-sm hidden-xs">
                <form method="get">
                  <input type="search" class="form-control" placeholder="Search">
                  <button type="submit" class="search-button">
                    <i class="icon icon_search"></i>
                  </button>
                </form>
              </div>
  
              <!-- Logo -->
              <div class="logo-container">
                <div class="logo-wrap text-center">
                  <a href="index.html">
                    <img class="logo" src="{{url('/img/logo_dark.png')}}" alt="logo">
                  </a>
                </div>
              </div>
  
              <!-- Cart -->
              <div class="nav-cart-wrap hidden-sm hidden-xs">
                <div class="nav-cart right">
                  <div class="nav-cart-outer">
                    <div class="nav-cart-inner">
                      <a href="{{url('/shop-cart')}}" class="nav-cart-icon">2</a>
                    </div>
                  </div>
                </div>
                <div class="menu-cart-amount right">
                  <span>
                    Cart /
                    <a href="{{url('/shop-cart')}}"> $1299.50</a>
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
                  <a href="#">Pages</a>
                  <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/about-us')}}">About Us</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                    <li><a href="{{url('/login')}}">Login</a></li>
                    <li><a href="{{url('/faq')}}">F.A.Q</a></li>
                  </ul>
                </li>
  
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="megamenu-wrap">
                        <div class="row">
  
                          <div class="col-md-3 megamenu-item">
                            <h6>For Man</h6>
                            <ul class="menu-list">
                              <li><a href="{{url('/shop-catalog')}}">Shirts</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Jeans</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Accessories</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Shoes</a></li>
                            </ul>
                          </div>
  
                          <div class="col-md-3 megamenu-item">
                            <h6>For Woman</h6>
                            <ul class="menu-list">
                              <li><a href="{{url('/shop-catalog')}}">Dresses</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Coats</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Accessories</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Sandals</a></li>
                            </ul>
                          </div>
  
                          <div class="col-md-3 megamenu-item">
                            <h6>Accessories</h6>
                            <ul class="menu-list">
                              <li><a href="{{url('/shop-catalog')}}">Wallets</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Watches</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Belts</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Scarfs</a></li>
                            </ul>
                          </div>
  
                          <div class="col-md-3 megamenu-item">
                            <h6>Bags</h6>
                            <ul class="menu-list">
                              <li><a href="{{url('/shop-catalog')}}">Leather</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Sports</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Street Style</a></li>
                              <li><a href="{{url('/shop-catalog')}}">Creative</a></li>
                            </ul>
                          </div>
  
                        </div>
                      </div>
                    </li>
                  </ul>
                </li> <!-- end categories -->
  
                <li class="dropdown">
                  <a href="#">Shop</a>
                  <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li><a href="{{url('/shop-catalog')}}">Catalog</a></li>
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
  </header> <!-- end navigation -->