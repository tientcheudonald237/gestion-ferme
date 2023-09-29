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
        <li class="breadcrumb-item "><a href="{{ route('production.stock.index') }}"></i>Stock</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('production.stock.supply.index') }}"></i>Approvisionnement</a></li>
    </ol>
</nav>
    <div class="body">

    </div>
@endsection
@push('other-scripts')

@endpush