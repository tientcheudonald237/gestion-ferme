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
                    <li class="breadcrumb-item"><a href="{{ route('production.stock.index') }}">Production</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="#"></i>Produits</a></li>
                </ol>
            </nav> 
        </div>
        <div class="col-md-auto">
            <nav aria-label="breadcrumb">
                <a class="btn btn-success btn-pilll " data-toggle="modal" data-target="#addproduct" href="">
                    Ajouter un Prodiut
                </a>
            </nav>
        </div>
    </div>
    <div class="body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des Produits</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Designation</th>
                                        <th>Categorie</th>
                                        <th>Unite</th>
                                        <th>Date Creation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $index => $value)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $value->code }}</td>
                                            <td>{{ $value->designation }}</td>
                                            <td>
                                                @php
                                                    $category = App\Models\Category::where('id', $value->id_category)->first();
                                                    echo $category->code;
                                                @endphp
                                            </td>
                                            <td>{{ $value->unit }}</td>
                                            <td>{{ date('d-m-y H:i A', strtotime($value->created_at)) }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" onclick="edit_product({{ $value->id }});" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action" title="Delete" onclick="event.preventDefault();delete_product({{ $value->id }});"><i class="fas fa-trash"></i></a>
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
    <div class="modal fade" id="addproduct" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Ajouter un produit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('product.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" placeholder="Code du produit" name="code"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" placeholder="Designatoin du produit"
                                name="designation" required>
                        </div>
                        <div class="form-group">
                            <label for="id_category">Categorie</label>
                            <select name="id_category" class="form-control" required>
                                <option value="choisissez la ategory"></option>
                                @foreach ($categories as $value )
                                    <option value="{{ $value->id }}"> {{ $value->code }} {{ $value->designation }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="unit">Unite</label>
                            <input type="text" class="form-control" placeholder="Unite du produit"
                                name="unit" required >
                        </div>
                        <div class="form-group">
                            <label for="alert_stock">Stock d'Alert minimum</label>
                            <input type="number" class="form-control" min="1" placeholder="Stock d'Alert minimum"
                                name="alert_stock" required>
                        </div>
                        <button class="btn btn-success btn-block" type="submit">valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editproduct" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Editer un Produit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="form_update_product">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" placeholder="Code du produit" name="code"
                                required id="code">
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" placeholder="Designatoin du produit"
                                name="designation" required id="designation">
                        </div>
                        <div class="form-group">
                            <label for="id_category">Categorie</label>
                            <select name="id_category" class="form-control" required id="id_category" required>
                                <option value="choisissez la ategory"></option>
                                @foreach ($categories as $value )
                                    <option value="{{ $value->id }}"> {{ $value->code }} {{ $value->designation }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="unit">Unite</label>
                            <input type="text" class="form-control" placeholder="Unite du produit"
                                name="unit" required id="unit">
                        </div>
                        <div class="form-group">
                            <label for="alert_stock">Stock d'Alert minimum</label>
                            <input type="number" class="form-control" placeholder="Stock d'Alert minimum"
                                name="alert_stock" min="1" required id="alert_stock">
                        </div>
                        <button class="btn btn-success btn-block" type="submit">valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('other-scripts')
    <script type="text/javascript">
        function edit_product(id) {
            var de = document.getElementById('form_update_product')
            de.setAttribute('action', '/product/' + id);
            var urls = "/product/" + id;
            $.ajax({
                url: urls,
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    if (data === 'off') {


                    } else {
                        // console.log(data.code);

                        $('#code').val(data.code);
                        $('#designation').val(data.designation);
                        $('#id_category').val(data.id_category);
                        $('#unit').val(data.unit);
                        $('#alert_stock').val(data.alert_stock);
                    }
                }
            });
            $('#editproduct').modal('show');
        }

        function delete_product(id) {
            swal({
                    title: 'Suppression',
                    text: 'Voulez vous vraiment supprimer ??',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var url = "/product/" + id;
                        var xhr = new XMLHttpRequest();
                        xhr.open('DELETE', url);
                        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                var response = JSON.parse(xhr.responseText);
                                console.log(response);
                                if (response === 'ok') {
                                    swal('Suppresion reussit avec success !!', {
                                        icon: 'success',
                                    });
                                    location.reload();
                                } else {
                                    swal('Une erreur est survenu  !!', {
                                        icon: 'error',
                                    });
                                    // location.reload();
                                }
                            }else{
                                swal('Une erreur est survenu  !!', {
                                        icon: 'error',
                                    });
                            }
                        };
                        xhr.send();
                    } else {}
                });
        }
    </script>
@endpush
