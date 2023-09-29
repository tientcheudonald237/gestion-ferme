@php
    $activeDropdown = 'index';
    $activeLink = '';
@endphp
@extends('layouts.production')
@section('styles')

@endsection
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-primary text-white-all">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Menu
                Principale</a></li>
        <li class="breadcrumb-item"><a href="{{ route('production.index') }}">Production</a>
        </li>
    </ol>
</nav>
    <div class="body">
<<<<<<< Updated upstream
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon l-bg-purple">
                  <i class="fas fa-paw"></i>
                </div>
                <div class="card-wrap">
                  <div class="padding-20">
                    <div class="text-right">
                      <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> 1000
                      </h3>
                      <span class="font-weight-bold text-success font-20">Poules</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon l-bg-green">
                  <i class="fas fa-paw"></i>
                </div>
                <div class="card-wrap">
                  <div class="padding-20">
                    <div class="text-right">
                      <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> 158
                      </h3>
                      <span class="font-weight-bold text-black font-20">Boeufs</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon l-bg-cyan">
                  <i class="fas fa-paw"></i>
                </div>
                <div class="card-wrap">
                  <div class="padding-20">
                    <div class="text-right">
                      <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> 200
                      </h3>
                      <span class="font-weight-bold text-warning font-20">Porcs</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon l-bg-orange">
                  <i class="fas fa-egg"></i>
                </div>
                <div class="card-wrap">
                  <div class="padding-20">
                    <div class="text-right">
                      <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> 5,263
                      </h3>
                      <span class="font-weight-bold text-success font-20">Oeufs</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon l-bg-orange">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="padding-20">
                    <div class="text-right">
                      <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> 40
                      </h3>
                      <span class="font-weight-bold text-danger font-20">Visiteurs</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon l-bg-orange">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="padding-20">
                    <div class="text-right">
                      <h3 class="font-light mb-0">
                        <i class="ti-arrow-up text-success"></i> 60
                      </h3>
                      <span class="font-weight-bold text-success font-20">Clients</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
=======

>>>>>>> Stashed changes
    </div>
@endsection
@push('other-scripts')

@endpush
