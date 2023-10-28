<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DevFolio Bootstrap Portfolio Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/img/favicon.png" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Ranch Management</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="asset/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <div class="work-box">
                <div class="work-img" style="background-image: url(asset/img/work-1.jpeg); background-size: cover; background-position: center; background-repeat: no-repeat;">
                </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><a href="{{ route('production.index') }}">Gestion de la production</a></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-xs-12">
            <div class="work-box">
                <div class="work-img" style="background-image: url(asset/img/work-2.jpeg); background-size: cover; background-position: center; background-repeat: no-repeat;">
                </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><a href="{{ route('trading.index') }}">Gestion de la commercialisation</a></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-xs-12">
            <div class="work-box">
                <div class="work-img" style="background-image: url(asset/img/work-3.jpeg); background-size: cover; background-position: center; background-repeat: no-repeat;">
                </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><a href="{{ route('staff.index') }}">Gestion du personnel</a></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-xs-12">
            <div class="work-box">
                <div class="work-img" style="background-image: url(asset/img/work-4.jpeg); background-size: cover; background-position: center; background-repeat: no-repeat;">
                </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><a href="{{ route('accounting.index') }}">Gestion de la comptabilité</a></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="work-box">
                <div class="work-img" style="background-image: url(asset/img/work-5.jpeg); background-size: cover; background-position: center; background-repeat: no-repeat;">
                </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><a href="{{ route('configuration.index') }}">Parametres et Configuration</a></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="asset/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="asset/vendor/typed.js/typed.min.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>

</body>

</html>