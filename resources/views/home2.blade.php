<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{  asset('assets/css/app.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-social/bootstrap-social.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/img/favicon.ico') }}" />
</head>

<body>
<div class="body">
    <nav class="navbar  main-navbar sticky ">
        <div class="form-inline">
            <ul class="navbar-nav ">
                
                <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                        <i data-feather="maximize"></i>
                    </a></li>
                <li>
                    <form class="form-inline mr-auto">
                        <div class="search-element">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                data-width="200">
                            <button class="btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        {{-- <div class="form-group">
            <div class="select-container">
                <select class="select-container-select changeLang">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>
                        <span class="flag-icon flag-icon-us"></span> English
                    </option>
                    <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>
                        <span class="flag-icon flag-icon-fr"></span> Français
                    </option>
                </select>
            </div>
        </div> --}}
            </nav>
    <section class="section">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <article class="article article-style-b">
            <div class="article-header">
              <div class="article-image" data-background="assets/img/blog/img10.png">
              </div>
              <div class="article-badge">
                <div class="article-badge-item bg-danger"><i class="fas fa-fire"></i> Production</div>
              </div>
            </div>
            <div class="article-details">
              <div class="article-title">
                <h2><a href="#">Gestion de la production</a></h2>
              </div>
              <p>Gérez toutes les activités de production dans votre ferme, des soins et de l'alimentation des animaux jusqu'à la collecte et la transformation des produits.</p>
              <div class="article-cta">
                <a href="{{ route('production.index') }}">En savoir plus <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <article class="article article-style-b">
            <div class="article-header">
              <div class="article-image" data-background="assets/img/blog/img15.png">
              </div>
              <div class="article-badge">
                <div class="article-badge-item bg-success"><i class="fas fa-fire"></i> Commercialisation</div>
              </div>
            </div>
            <div class="article-details">
              <div class="article-title">
                <h2><a href="#">Gestion de la commercialisation</a></h2>
              </div>
              <p>Organisez la vente et la commercialisation de vos produits de ferme, en utilisant des stratégies efficaces pour atteindre vos clients.</p>
              <div class="article-cta">
                <a href="{{ route('commercialisation.index') }}">En savoir plus <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <article class="article article-style-b">
            <div class="article-header">
              <div class="article-image" data-background="assets/img/blog/img07.png">
              </div>
              <div class="article-badge">
                <div class="article-badge-item bg-warning"><i class="fas fa-fire"></i> Personnel</div>
              </div>
            </div>
            <div class="article-details">
              <div class="article-title">
                <h2><a href="#">Gestion du personnel</a></h2>
              </div>
              <p>Effectuez le suivi des activités des employés et de leur participation aux tâches quotidiennes de la ferme.</p>
              <div class="article-cta">
                <a href="{{ route('personnel.index') }}">En savoir plus <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <article class="article article-style-b">
            <div class="article-header">
              <div class="article-image" data-background="assets/img/blog/img02.png">
              </div>
              <div class="article-badge">
                <div class="article-badge-item bg-primary"><i class="fas fa-fire"></i> Comptabilité</div>
              </div>
            </div>
            <div class="article-details">
              <div class="article-title">
                <h2><a href="#">Gestion de la comptabilité</a></h2>
              </div>
              <p>Suivez les dépenses, les revenus et les transactions financières de votre ferme pour une meilleure gestion financière.</p>
              <div class="article-cta">
                <a href="{{ route('comptabilite.index') }}">En savoir plus <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('assets/js/app.min.js') }}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>