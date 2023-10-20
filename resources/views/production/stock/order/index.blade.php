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
                            href="{{ route('production.stock.order.index') }}"></i>Commande</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-auto">
            {{-- <nav aria-label="breadcrumb">
                <a class="btn btn-success btn-pilll " data-toggle="modal" data-target="" href="">
                    commandes valider
                </a>
            </nav> --}}
        </div>
    </div>
        <div class="body">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Table de <code>Commande</code></h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="potential-tab" data-toggle="tab" href="#potential"
                                        role="tab" aria-controls="potentielle" aria-selected="true">Potentielle</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="transmitted-tab" data-toggle="tab" href="#transmitted"
                                        role="tab" aria-controls="transmisse" aria-selected="false">Transmisse</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="in_progress-tab" data-toggle="tab" href="#in_progress"
                                        role="tab" aria-controls="encours" aria-selected="false">Encours</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="potential" role="tabpanel"
                                    aria-labelledby="potential-tab">
                                    <div class="row">
                                        @foreach ($potential as $value)
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div
                                                    class="alert alert-light d-flex justify-content-between align-items-center">
                                                    @php
                                                        $produit = \App\Models\Product::find($value->id_product);
                                                    @endphp
                                                    <span>
                                                        <span
                                                            class="badge badge-info font-weight-bolder">{{ $produit->code }}</span>
                                                        {{ $produit->designation }}
                                                        <span class="badge badge-danger">stock actuelle :
                                                            {{ $value->current_stock }}</span>
                                                    </span>
                                                    <div class="d-flex">
                                                        <button class="btn btn-danger btn-sm ml-2"
                                                            onclick="delete_order({{ $value->id }});"><span
                                                                class="fas fa-trash"></span></button>
                                                        <button class="btn btn-primary btn-sm ml-2"
                                                            onclick="next_step_order({{ $value->id }});"><span
                                                                class="fas fa-arrow-right"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="transmitted" role="tabpanel"
                                    aria-labelledby="transmitted-tab">
                                    <div class="row">
                                        @foreach ($transmited as $value)
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div
                                                    class="alert alert-light d-flex justify-content-between align-items-center">
                                                    @php
                                                        $produit = \App\Models\Product::find($value->id_product);
                                                    @endphp
                                                    <span>
                                                        <span
                                                            class="badge badge-info font-weight-bolder">{{ $produit->code }}</span>
                                                        {{ $produit->designation }}
                                                        @if (isset($value->order_stock))
                                                            <span class="badge badge-info">Quantite a commander :
                                                                {{ $value->order_stock }}</span>
                                                        @endif
                                                    </span>
                                                    <div class="d-flex">
                                                        <button class="btn btn-danger btn-sm ml-2"
                                                            onclick="delete_order({{ $value->id }});"><span
                                                                class="fas fa-trash"></span></button>
                                                        <button class="btn btn-success btn-sm ml-2"
                                                            onclick="add_order_stock({{ $value->id }});"><span
                                                                class="fas fa-pencil-alt"></span></button>
                                                        @if (isset($value->order_stock))
                                                            <button class="btn btn-primary btn-sm ml-2"
                                                                onclick="next_step_order({{ $value->id }});"><span
                                                                    class="fas fa-arrow-right"></span></button>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="in_progress" role="tabpanel"
                                    aria-labelledby="in_progress-tab">
                                    <div class="row">
                                        @foreach ($in_progress as $value)
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <div
                                                    class="alert alert-light d-flex justify-content-between align-items-center">
                                                    @php
                                                        $produit = \App\Models\Product::find($value->id_product);
                                                    @endphp
                                                    <span>
                                                        <span
                                                            class="badge badge-info font-weight-bolder">{{ $produit->code }}</span>
                                                        {{ $produit->designation }}
                                                        <span class="badge badge-info">Quantite a commander :
                                                            {{ $value->order_stock }}</span>
                                                    </span>
                                                    <div class="d-flex">
                                                        <button class="btn btn-danger btn-sm ml-2"
                                                            onclick="delete_order({{ $value->id }});"><span
                                                                class="fas fa-trash"></span></button>
                                                        <button class="btn btn-primary btn-sm ml-2"
                                                            onclick="next_step_order({{ $value->id }});"><span
                                                                class="fas fa-arrow-right"></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="add_order_stock" tabindex="-1" role="dialog" aria-labelledby=""
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Quantite a commander</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" id="form_update_order">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="order_stock">Code</label>
                                <input type="number" min="1" class="form-control" id="order_stock"
                                    placeholder="Quantite a comander" name="order_stock" required>
                            </div>
                            <button class="btn btn-success btn-block" type="submit">valider</button>
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

            function next_step_order(id) {
                swal({
                        title: 'Mise a Jour',
                        text: 'Mettre a jour cette commande ??',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            var url = "/next_step_order/" + id;
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', url);
                            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                            xhr.onload = function() {
                                if (xhr.status === 200) {
                                    var response = xhr.responseText.trim();
                                    if (response == `"ok"`) {
                                        swal('Commande mise a jour', {
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

            function add_order_stock(id) {
                var de = document.getElementById('form_update_order')
                de.setAttribute('action', '/order/' + id);
                var urls = "/order/" + id;
                $.ajax({
                    url: urls,
                    type: 'GET',
                    success: function(data) {
                        console.log(data);
                        if (data === 'off') {


                        } else {
                            console.log(data.code);

                            $('#order_stock').val(data.order_stock);
                        }
                    }
                });
                $('#add_order_stock').modal('show');
            }
        </script>
    @endpush
