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
            <li class="breadcrumb-item active"><a href="{{ route('production.stock.index') }}"></i>Stock</a></li>
        </ol>
    </nav>
    <div class="body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon l-bg-purple">
                        <i class="fas fa-cookie-bite"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="padding-20">
                            <div class="text-right">
                                <h3 class="font-light mb-0">
                                    <i class="ti-arrow-up text-success"></i> {{ $products }}
                                </h3>
                                <a href="{{ route('product.index') }}" class="text-muted font-weight-bold font-25">Produits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon l-bg-green">
                        <i class="fas fa-square-full"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="padding-20">
                            <div class="text-right">
                                <h3 class="font-light mb-0">
                                    <i class="ti-arrow-up text-success"></i> {{ $categories }}
                                </h3>
                                <a href="{{ route('category.index') }}" class="text-muted font-weight-bold font-25">Categories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('other-scripts')
@endpush
