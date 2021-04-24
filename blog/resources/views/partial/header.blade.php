<!-- Navigation -->
<header class="nav-type-1">

<div class="top-bar hidden-sm hidden-xs">
  <div class="container">
    <div class="top-bar-line">
      <div class="row">
        <div class="top-bar-links">
          <ul class="col-sm-6 top-bar-acc">
            <li class="top-bar-link"><a href="#">My Account</a></li>
            <li class="top-bar-link"><a href="#">Login</a></li>
            <li class="top-bar-link"><a href="contact.html">Contact</a></li>
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
                <a href="#" class="nav-cart-icon">2</a>
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
                  <img class="logo" src="img/logo_dark.png" alt="logo">
                </a>
              </div>
            </div>

            <!-- Cart -->
            <div class="nav-cart-wrap hidden-sm hidden-xs">
              <div class="nav-cart right">
                <div class="nav-cart-outer">
                  <div class="nav-cart-inner">
                    <a href="#" class="nav-cart-icon">2</a>
                  </div>
                </div>
              </div>
              <div class="menu-cart-amount right">
                <span>
                  Cart /
                  <a href="#"> $1299.50</a>
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
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="faq.html">F.A.Q</a></li>
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
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Shoes</a></li>
                          </ul>
                        </div>

                        <div class="col-md-3 megamenu-item">
                          <h6>For Woman</h6>
                          <ul class="menu-list">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Coats</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sandals</a></li>
                          </ul>
                        </div>

                        <div class="col-md-3 megamenu-item">
                          <h6>Accessories</h6>
                          <ul class="menu-list">
                            <li><a href="#">Wallets</a></li>
                            <li><a href="#">Watches</a></li>
                            <li><a href="#">Belts</a></li>
                            <li><a href="#">Scarfs</a></li>
                          </ul>
                        </div>

                        <div class="col-md-3 megamenu-item">
                          <h6>Bags</h6>
                          <ul class="menu-list">
                            <li><a href="#">Leather</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Street Style</a></li>
                            <li><a href="#">Creative</a></li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </li>
                </ul>
              </li> <!-- end categories -->

              <li class="dropdown">
                <a href="#">Blog</a>
                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li><a href="blog-standard.html">Standard</a></li>
                  <li><a href="blog-single.html">Single Post</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#">Shop</a>
                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li><a href="shop-catalog.html">Catalog</a></li>
                  <li><a href="shop-collections.html">Collections</a></li>
                  <li><a href="shop-single-product.html">Single Product</a></li>
                  <li><a href="shop-cart.html">Cart</a></li>
                  <li><a href="shop-checkout.html">Checkout</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#">Elements</a>
                <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                <ul class="dropdown-menu">
                  <li><a href="shortcodes.html">Shortcodes</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
              </li>

              <li class="mobile-links">
                <ul>
                  <li>
                    <a href="#">Login</a>
                  </li>
                  <li>
                    <a href="#">My Account</a>
                  </li>
                  <li>
                    <a href="#">My Wishlist</a>
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