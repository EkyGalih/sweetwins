<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul2')</title>
    <link rel="shortcut icon" href="{{ asset('img/logo_swtw.jpg') }}">
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('plugins/user/css/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/user/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/user/css/custom.css') }}">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- START: header -->
  <header role="banner" class="probootstrap-header">
    <div class="container-fluid">
        <a href="{{ url('/') }}" class="probootstrap-logo">SweetWins<span>.</span></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
            <li class="{{ Request::is('all_produk') ? 'active' : '' }}"><a href="{{ url('all_produk') }}">Product</a></li>
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">About</a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Social</h5>
            <ul class="social-buttons">
              <li><a target="_blank" href="https://facebook.com/dwii.septiiyana"><i class="icon-facebook"></i></a></li>
              <li><a target="_blank" href="https://www.instagram.com/sweetwins__/"><i class="icon-instagram2"></i></a></li>
            </ul>
            <p><small>&copy; 2019 SweetWins. Olshop Muslimah.</small></p>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  
  <!-- START: section -->
  <section class="probootstrap-intro" style="background-image: url(img/hero_bg_2.jpg);" data-stellar-background-ratio="0.5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate">@yield('judul_header')</h1>
          <div class="probootstrap-subtitle probootstrap-animate">
            <h2>@yield('deskripsi_header')</a></h2>
          </div>
          <p class="watch-intro probootstrap-animate"><a href="https://vimeo.com/45830194" class="popup-vimeo">Watch the video <i class="icon-play2"></i></a></p>
        </div>
      </div>
    </div>
    <a class="probootstrap-scroll-down js-next" href="#next-section">Scroll down <i class="icon-chevron-down"></i></a>
  </section>
  <!-- END: section -->

  @yield('konten2')
  
  <!-- START: section -->
<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-8 col-md-offset-2 mb30 section-heading probootstrap-animate">
        <h2>Mari Berbelanja di SweetWins dan berikan komentar anda</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4 probootstrap-animate">
        <p class="text-center">
          <a data-toggle="modal" data-target="#ModalKomentar" class="btn btn-ghost btn-ghost-white btn-lg btn-block" role="button">Komentar</a>
        </p>
      </div>
    </div>
  </div>
</section>
<!-- END: section -->

<!-- MODAL KOMENTAR -->
<div class="modal fade" id="ModalKomentar" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="mediumModalLabel">FeedBack</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ url('komentar') }}" method="POST" enctype="multipart/form-data" class="probootstrap-form">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="nama" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" name="kontak" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="gambar">Poto Produk</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
              </div>
              <div class="form-group">
                <label for="komentar">Komentar</label>
                <textarea name="komentar" id="komentar" class="form-control"></textarea>
              </div>
              <input type="hidden" name="rating" value="4">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
            <button type="submit" class="btn btn-ghost btn-ghost-black">Kirim
          </div>
        </form>
        </div>
      </div>
    </div>
<!-- END MODAL -->

<!-- START: footer -->
<footer role="contentinfo" class="probootstrap-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="probootstrap-footer-widget">
          <h3>Tentang SweetWins</h3>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
        </div>
        <div class="probootstrap-footer-widget">
          <h3>Connect With Us</h3>
          <ul class="probootstrap-footer-social">
            <li><a target="_blank" href="https://facebook.com/dwii.septiiyana"><i class="icon-facebook"></i></a></li>
            <li><a target="_blank" href="https://www.instagram.com/sweetwins__/"><i class="icon-instagram2"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="probootstrap-footer-widget">
          <h3>Popular Products</h3>
          <ul class="probootstrap-product-list">
            <li class="mb20">
              <a href="#">
                <figure><img src="img/img_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="text">
                  <h4>River named Duden flows</h4>
                  <p>A small river named Duden flows by their place</p>
                  <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
                </div>
              </a>
            </li>
            <li class="mb20">
              <a href="#">
                <figure><img src="img/img_4.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="text">
                  <h4>River named Duden flows</h4>
                  <p>A small river named Duden flows by their place</p>
                  <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
                </div>
              </a>
            </li>
            <li class="mb20">
              <a href="#">
                <figure><img src="img/img_5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                <div class="text">
                  <h4>River named Duden flows</h4>
                  <p>A small river named Duden flows by their place</p>
                  <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row mt40">
      <div class="col-md-12 text-center">
        <p>
          <small>&copy; 2019 <a href="http://127.0.0.1:8000/" target="_blank">Sweetwins</a>. Olshop muslimah. <br> Designed &amp; Developed by <a href="http://127.0.0.1:8000/about" target="_blank">sweetwins.com</a></small><br>
          <a href="#" class="js-backtotop">Back to top</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- END: footer -->

  <script src="{{ asset('plugins/user/js/scripts.min.js') }}"></script>
  <script src="{{ asset('plugins/user/js/main.min.js') }}"></script>
  <script src="{{ asset('plugins/user/js/custom.js') }}"></script>

  </body>
</html>