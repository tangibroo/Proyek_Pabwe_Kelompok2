<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>MONJA @yield('title')</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/images/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/images/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/images/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/images/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/images/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/images/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/images/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="asset/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    -->

    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate.css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/et-line-font/et-line-font.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/flexslider/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/magnific-popup/dist/magnific-popup.css') }}"rel="stylesheet">
    <link href="{{ asset('assets/lib/simple-text-rotator/simpletextrotator.css') }}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>

  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">MONJA</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="navbar">
                  <a href="{{ route('dashboard') }}" >Home</a>
              </li>
              <li class="navbar">
                  <a href="{{ route('user_product') }}">Product</a>
              </li>
              <li class="navbar">
                  <a href="#" >Contact</a>
              </li>
              <li class="navbar">
                  <a href="#" >Payment Info</a>
              </li>
              @if(Session::get('roles') == 'admin')
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Master Menu</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ route('master_user') }}"><i class="fa fa-bolt"></i> Master User</a></li>
                  <li><a href="{{ route('master_product') }}"><i class="fa fa-link fa-sm"></i> Master Product</a></li>
                  <li><a href="{{ route('transaction_user') }}"><i class="fa fa-link fa-sm"></i> Transaction</a></li>
                </ul>
              </li>
              @endif

              @auth
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Logout</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ route('logout') }}"><i class="fa fa-bolt"></i> logout</a></li>
                </ul>
              </li>
              @endauth
              @guest
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Login/Register</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ route('login') }}"><i class="fa fa-bolt"></i> Login</a></li>
                  <li><a href="{{ route('register') }}"><i class="fa fa-link fa-sm"></i> Register</a></li>
                </ul>
              </li>
              @endguest
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="main">
        <!-- JUMBOTRON -->
        <section class="module bg-dark-30" data-background="assets/images/section-4.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">@yield('jumbotron')</h1>
              </div>
            </div>
          </div>
        </section>
        <!-- ENDJUMBOTRON -->
        
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-md-2 sidebar">
                <!-- SIDEBAR -->
                <div class="widget">
                  <h5 class="widget-title font-alt">Products Categories</h5>
                  <ul class="icon-list">
                    <li><a href="">Jaket</a></li>
                    <li><a href="#">Celana</a></li>
                    <li><a href="#">Baju</a></li>
                  </ul>
                </div>
                <!-- SIDEBAR -->
              </div>
                
                
              <div class="col-sm-8 col-sm-offset-1">
                <!-- CONTEN -->
                @yield('content')
                <!-- ENDCONTEN -->
              </div>
              
                
            </div>
          </div>
        </section>
        
        <hr class="divider-d">

        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2021&nbsp;<a href="#">Monja</a>, Proyek Pabwe Kelompok 2</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>