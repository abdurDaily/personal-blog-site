<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Abdur Daily</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Kerge - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="{{ asset('assets/images/images/abdurdailyLogo.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/preview/lmpixels-demo-panel.css') }}" type="text/css">

    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
  </head>

  <body>
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
        <!-- Header -->
        <header id="site_header" class="header mobile-menu-hide container">
          <div class="header-content clearfix">
            <div class="my-photo">
              <img src="{{ asset('assets/images/images/abdurdailyLogo.png') }}" alt="image">
            </div>

            <div class="site-title-block">
              <div class="site-title">Abdur Daily</div>
            </div>

            <!-- Navigation -->
            <div class="site-nav">
              <!-- Main menu -->
              <ul id="nav" class="site-main-menu">
                <li>
                  <a class="pt-trigger" href="#about-me">About Me</a><!-- href value = data-id without # of .pt-page. -->
                </li>
                <li>
                  <a class="pt-trigger" href="#resume">Resume</a>
                </li>
                <li>
                  <a class="pt-trigger" href="#portfolio">Portfolio</a>
                </li>
                <li>
                  <a class="pt-trigger" href="#blog">Blog</a>
                </li>
                <li>
                  <a class="pt-trigger" href="#contact">Contact</a>
                </li>
              </ul>
              <!-- /Main menu -->
            </div>
            <!-- Navigation -->

            <!-- Social Links -->
            <div class="social-links">
              <a href="https://www.facebook.com/abdurDaily" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.linkedin.com/in/abdurdaily/" target="_blank"><i class="fab fa-linkedin"></i></a>
              <a href="https://github.com/abdurDaily" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
            <!-- / Social Links -->

            <!-- Copyrights -->
            <div class="copyrights">
              <a href="{{ route('login') }}">Dashboard</a>
            </div>
            <!-- / Copyrights -->
          </div>
        </header>
        <!-- /Header -->

        <!-- Mobile Header -->
        <div class="mobile-header mobile-visible">
          <div class="mobile-logo-container">
            <div class="mobile-header-image">
              <a href="#">
                  <img src="{{ asset('assets/images/images/abdurdailyLogo.png') }}" alt="image">
              </a>
            </div>
            <div class="mobile-site-title"><a href="#">Abdur Daily</a></div>
          </div>

          <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
          </a>
        </div>
        <!-- /Mobile Header -->

        <!-- Arrows Nav -->
        <div class="lmpixels-arrows-nav">
          <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
        </div>
        <!-- /Arrows Nav -->

        <!-- Main Content -->
        <div id="main" class="site-main" >
          <!-- Page changer wrapper -->
          <div class="pt-wrapper ">
            <!-- Subpages -->
            <div class="subpages ">
              
                @yield('frontend_contains')
              
            </div>
          </div>
          <!-- /Page changer wrapper -->
        </div>
        <!-- /Main Content -->
    </div>

    <a id="lm_demo_panel_switcher" class="lm-demo-panel-switcher right">
      <i class="fas fa-cogs"></i>
    </a>
    <div id="lm_demo_panel" class="lm-demo-panel right panel-color-red active">
      <div class="demo-panel-title">Main Color</div>
      <div id="main_color" class="demo-panel-options">
        <a data-id="blue" class="current-main-color">
          <div class="preview color-1">&nbsp;</div>
        </a>
        <a data-id="red">
          <div class="preview color-2">&nbsp;</div>
        </a>
        <a data-id="orange">
          <div class="preview color-3">&nbsp;</div>
        </a>
        <a data-id="green">
          <div class="preview color-4">&nbsp;</div>
        </a>
        <a data-id="purple">
          <div class="preview color-5">&nbsp;</div>
        </a>
        <a data-id="yellow">
          <div class="preview color-6">&nbsp;</div>
        </a>
      </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script> --}}
    <script src="{{ asset('assets/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages-switcher.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/validator.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="{{ asset('assets/js/jquery.googlemap.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/preview/lmpixels-demo-panel.js') }}"></script>

    @stack('frontend_js')
  </body>
</html>
