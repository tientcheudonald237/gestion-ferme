@extends('layouts.production')
@section('styles')
@endsection
@section('content')
    <div class="row justify-content-between">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-primary text-white-all">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Menu Principale</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('production.index') }}">Production</a></li>
                    <li class="breadcrumb-item"><a href="#">Suivi</a></li>
                    <li class="breadcrumb-item active"><a href="#"></i>Acquerir</a>
                    </li>
                </ol>
            </nav>
        </div>
        {{-- <div class="col-md-auto">
            <nav aria-label="breadcrumb">
                <a class="btn btn-success btn-pilll " data-toggle="modal" data-target="#new_follow" href="">
                    Nouveau suivie
                </a>
            </nav>
        </div> --}}
    </div>

    <div class="body">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Suivre un animal</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('follow.store') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="id_product">Produit</label>
                            <select name="id_product" id="id_product" class="form-control select2"
                                placeholder="Selectionner le produit">
                                @foreach ($products as $value)
                                    <option value="{{ $value->id }}">{{ $value->code }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" placeholder="Designation" name="designation" required
                                id="designation">
                        </div>
                        <div class="form-group">
                            <label for="weight">Poids(kg)</label>
                            <input type="number" class="form-control" placeholder="Weight" name="weight" required
                                id="weight">
                        </div>
                        <div class="form-group">
                            <label for="sex">Sexe</label>
                            <select name="sex" class="form-control" required id="sex">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="buying_price">Prix d'achat</label>
                            <input type="number" class="form-control" placeholder="Prix d'achat" name="buying_price"
                                required id="buying_price">
                        </div>
                        <div class="form-group">
                            <label for="id_lodge">Loge</label>
                            <select class="form-control select2 " placeholder="Selectionner la loge" name="id_lodge"
                                required id="id_lodge">
                                @foreach ($lodges as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="is_to_buy" value="1">
                        <button type="submit" class="btn btn-success btn-block">valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('other-scripts')
@endpush
