@extends('layouts.home')
@section('styles')
@endsection
@section('content')
  <div class="body">
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
                <h2><a href="{{ route('production.index') }}">Gestion de la production</a></h2>
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
                <h2><a href="{{ route('commercialisation.index') }}">Gestion de la commercialisation</a></h2>
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
                <h2><a href="{{ route('personnel.index') }}">Gestion du personnel</a></h2>
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
                <h2><a href="{{ route('comptabilite.index') }}">Gestion de la comptabilité</a></h2>
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
@endsection
@push('other-scripts')
@endpush
