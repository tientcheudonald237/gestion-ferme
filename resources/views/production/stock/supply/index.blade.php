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
                    <li class="breadcrumb-item "><a href="{{ route('production.stock.index') }}"></i>Stock</a></li>
                    <li class="breadcrumb-item active"><a
                            href="{{ route('production.stock.supply.index') }}"></i>Approvisionnement</a></li>
                </ol>
            </nav>
        </div>
        {{-- <div class="col-md-auto">
            <nav aria-label="breadcrumb">
                <a class="btn btn-success btn-pilll " data-toggle="modal" data-target="" href="">
                    commandes valider
                </a>
            </nav>
        </div> --}}
    </div>
    <div class="body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des Commande</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Designation</th>
                                        <th>Quantite Commander</th>
                                        <th>Date de creation de la Commande</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($valide as $index => $value)
                                        @php
                                            $product = \App\Models\Product::find($value->id_product);
                                        @endphp
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $product->code }}</td>
                                            <td>{{ $product->designation }}</td>
                                            <td>{{ $value->order_stock }}</td>
                                            <td>{{ date('d-m-y H:i A', strtotime($value->created_at)) }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1"
                                                    onclick="mouvement_entry({{ $value->id }});"
                                                    title="Approvisionner"><i class="fas fa-bus-alt"></i></a>
                                                <a class="btn btn-danger btn-action" title="Delete"
                                                    onclick="event.preventDefault();delete_order({{ $value->id }});"><i
                                                        class="fas fa-trash"></i></a>
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
                    <h5 class="modal-title" id="">Approvisionnement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('stock_movement.store') }}" method="post" id="form_movement_entry">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="quantity">Quantité<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" placeholder="Quantité" min="1" name="quantity"
                                required id="quantity">
                        </div>
                        <div class="form-group">
                            <label for="unit_acquisition_price">Prix unitaire d'acquisition<span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" min="0" placeholder="Prix unitaire d'acquisition"
                                name="unit_acquisition_price" required id="unit_acquisition_price">
                        </div>
                        <div class="form-group">
                            <label for="bill_number">Numero de la Facture <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Numero de facture" name="bill_number"
                                required id="bill_number">
                        </div>
                        <div class="form-group">
                            <label for="observation">Observation</label>
                            <textarea class="form-control" placeholder="Observation" name="observation" id="observation"></textarea>
                        </div>
                        <input type="hidden" name="id_product" id="id_product" value="" required>
                        <input type="hidden" name="id_order" id="id_order" value="" required>
                        <input type="hidden" name="type" value="entry">
                        <button class="btn btn-success btn-block" type="submit">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('other-scripts')
    <script>
        function delete_order(id) {
            swal({
                    title: 'Suppression',
                    text: 'Voulez-vous vraiment supprimer cette potentielle commande?',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var url = "/order/" + id;
                        var xhr = new XMLHttpRequest();
                        xhr.open('DELETE', url);
                        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                var response = xhr.response;
                                if (response === `"ok"`) {
                                    swal('Suppresion reussit avec success !!', {
                                        icon: 'success',
                                    });
                                    location.reload();
                                } else {
                                    swal('Une erreur est survenu  !!', {
                                        icon: 'error',
                                    });
                                }
                            } else {
                                swal('Une erreur est survenu  !!', {
                                    icon: 'error',
                                });
                            }
                        };
                        xhr.send();
                    }
                });
        }

        function mouvement_entry(id) {
            var urls = "/order/" + id;
            $.ajax({
                url: urls,
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    if (data === 'off') {


                    } else {
                        console.log(data.code);

                        $('#id_order').val(id);
                        $('#quantity').val(data.order_stock);
                        $('#id_product').val(data.id_product);
                    }
                }
            });
            $('#movement_entry').modal('show');
        }
    </script>
@endpush
