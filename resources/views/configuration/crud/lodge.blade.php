@extends('layouts.configuration')
@section('styles')
@endsection
@section('content')
    <div class="row justify-content-between">
        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-primary text-white-all">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Menu
                            Principale</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('configuration.index') }}">Production</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="#"></i>Loges</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-auto">
            <nav aria-label="breadcrumb">
                <a class="btn btn-success btn-pilll " data-toggle="modal" data-target="#addproduct" href="">
                    Ajouter une loge
                </a>
            </nav>
        </div>
    </div>
    <div class="body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des loges</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Nombre maximal</th>
                                        <th>Descripton de la positon</th>
                                        <th>Nom du batiment</th>
                                        <th>Date de creation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lodges as $index => $value)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->maximal_number }}</td>
                                            <td>{{ $value->position_description }}</td>
                                            <td>
                                                @php
                                                    $building = App\Models\Building::where('id', $value->id_building)->first();
                                                    echo $building->name;
                                                @endphp
                                            </td>
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
                    <h5 class="modal-title" id="">Ajouter une loge</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('lodge.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" placeholder="Nom de la loge" name="name"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="number">Nombre maximum</label>
                            <input type="number" class="form-control" placeholder="Nombe maximal"
                                name="number" required>

                        <div class="form-group">
                            <label for="position_description">Description de la position</label>
                            <input type="text" class="form-control" placeholder="Description de la position" name="position_description">


                        </div>
                        <div class="form-group">
                            <label for="buildings">batiments</label>
                            <select name="buildings" class="form-control" required>
                                <option value="choisissez le batiment"></option>
                                @foreach ($buildings as $value )
                                    <option value="{{ $value->id }}"> {{ $value->name }} </option>
                                @endforeach
                            </select>
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
                    <h5 class="modal-title" id="">Editer une loge</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="form_update_product">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="Nom de la loge" name="name"
                                required id="name">
                        </div>
                        <div class="form-group">
                            <label for="maximal_number">Nombre maximal</label>
                            <input type="number" class="form-control" placeholder="Nombre maximal"
                                name="maximal_number" required id="maximal_number">
                        </div>
                        <div class="form-group">
                            <label for="position_description">Description de la position</label>
                            <input type="text" class="form-control" placeholder="Description de la position" name="position_description"
                                required id="position_description">

                        <div class="form-group">
                            <label for="buildings">batiments</label>
                            <select name="buildings" class="form-control" required>
                                <option value="choisissez le batiment"></option>
                                @foreach ($buildings as $value )
                                    <option value="{{ $value->id }}"> {{ $value->name }} </option>
                                @endforeach
                            </select>
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
        function edit_lodge(id) {
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

        function delete_lodge(id) {
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
