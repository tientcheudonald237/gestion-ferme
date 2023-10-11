@extends('layouts.production')
@section('styles')
@endsection
@section('content')
    <div class="row justify-content-between">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-primary text-white-all">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Menu
                            Principale</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('production.index') }}">Production</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="{{ route('production.stock.inventory') }}"></i>Inventaire</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-auto">
            <nav aria-label="breadcrumb">
                <a class="btn btn-success btn-pilll " data-toggle="modal" data-target="#movement_entry" href="">
                    Entree
                </a>
                <a class="btn btn-danger btn-pilll " data-toggle="modal" data-target="#movement_out" href="">
                    Sortie
                </a>
            </nav>
        </div>
    </div>
    <div class="body">
        <div class="row mt-2">
            @foreach ($products as $product)
                @php
                    $inventory = $product->all_inventory;
                    $n = 0;
                    foreach ($inventory as $movement) {
                        if ($movement->type == 'out') {
                            $n -= $movement->quantity;
                        } else {
                            $n += $movement->quantity;
                        }
                    }
                @endphp
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h4>{{ $product->code }}<br>{{ $product->designation }}</h4>
                            <h5 class="pl-5"><span class="badge badge-info"
                                    style="font-size: 2.5rem">{{ $n }}</span></h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Inventaires</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Designation</th>
                                        <th>Quantite</th>
                                        <th>Prix Acquisition</th>
                                        <th>Observation</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stock_movements as $index => $value)
                                        @php
                                            $product = App\Models\Product::find($value->id_product);
                                        @endphp
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $product->code }}</td>
                                            <td>{{ $product->designation }}</td>
                                            <td>{{ $value->quantity }}</td>
                                            <td>{{ $value->unit_acquisition_price }}</td>
                                            <td>{{ $value->observation }}</td>
                                            </td>
                                            <td
                                                class="badge @if ($value->type == 'out') badge-danger @else badge-success @endif">
                                                {{ date('d-m-y H:i A', strtotime($value->created_at)) }}</td>
                                            <td>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="movement_entry" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Entree</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('stock_movement.store') }}" method="post" id="form_update_product">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="id_product">ID du produit<span class="text-danger">*</span></label>
                            <select class="form-control" name="id_product" required id="id_product">
                                @foreach ($products as $value)
                                    <option value="{{ $value->id }}">{{ $value->code }} {{ $value->designation }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantité<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" placeholder="Quantité" name="quantity" required
                                id="quantity">
                        </div>
                        <div class="form-group">
                            <label for="unit_acquisition_price">Prix unitaire d'acquisition<span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" placeholder="Prix unitaire d'acquisition"
                                name="unit_acquisition_price" required id="unit_acquisition_price">
                        </div>
                        <div class="form-group">
                            <label for="observation">Observation</label>
                            <textarea class="form-control" placeholder="Observation" name="observation" id="observation"></textarea>
                        </div>
                        <input type="hidden" name="type" value="entry">
                        <button class="btn btn-success btn-block" type="submit">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('other-scripts')
@endpush
