<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Laravel | Главная</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ asset('/assets/user/css/aside.css') }}">

  </head>
  <body>
    
    <aside class="probootstrap-aside js-probootstrap-aside">
      <a href="#" class="probootstrap-close-menu js-probootstrap-close-menu d-md-none"><span class="oi oi-arrow-left"></span> Close</a>
      <div class="probootstrap-site-logo probootstrap-animate" data-animate-effect="fadeInLeft">
        
        <a href="index.html" class="mb-2 d-block probootstrap-logo">Aside</a>
        <p class="mb-0">Another free html5 bootstrap 4 template by <a href="https://uicookies.com/" target="_blank">uiCookies</a></p>
      </div>
      <div class="probootstrap-overflow">
        <nav class="probootstrap-nav">
          <ul>
            <li class="probootstrap-animate active" data-animate-effect="fadeInLeft"><a href="index.html">Главная</a></li>
            <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="services.html">Студия</a></li>
            <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="portfolio.html">Аккаунт</a></li>
            <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="contact.html">Профиль</a></li>
          </ul>
        </nav>
        <footer class="probootstrap-aside-footer probootstrap-animate" data-animate-effect="fadeInLeft">
          <ul class="list-unstyled d-flex probootstrap-aside-social">
            <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
            <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
            <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
          </ul>
          <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved.</p>
        </footer>
      </div>
    </aside>


    <main role="main" class="probootstrap-main js-probootstrap-main">
      <div class="probootstrap-bar">
        <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a>
        <div class="probootstrap-main-site-logo"><a href="index.html">Aside</a></a></div>
      </div>
      
      @yield('content')

      <div class="container-fluid d-md-none">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-unstyled d-flex probootstrap-aside-social">
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
            </ul>
            <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved. Designed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a></p>
          </div>
        </div>
      </div>

    </main>

    

    <!-- <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script> -->

    <script src="{{ asset('assets/user/js/main.js') }}"></script>
    
  </body>
</html>