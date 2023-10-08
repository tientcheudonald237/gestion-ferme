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
                    <li class="breadcrumb-item active"><a href="#"></i>Categories</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-auto">
            <nav aria-label="breadcrumb">
                <a class="btn btn-success btn-pilll " data-toggle="modal" data-target="#addCategory" href="">
                    Ajouter une categorie
                </a>
            </nav>
        </div>
    </div>
    <div class="body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des Categories</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Designation</th>
                                        <th>Date Creation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $index => $value)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $value->code }}</td>
                                            <td>{{ $value->designation }}</td>
                                            </td>
                                            <td>{{ date('d-m-y H:i A', strtotime($value->created_at)) }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" onclick="edit_category({{ $value->id }});" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action" title="Delete" onclick="event.preventDefault();delete_category({{ $value->id }});"><i class="fas fa-trash"></i></a>
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
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Ajouter une categorie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" placeholder="Code de la categorie" name="code"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" placeholder="Designatoin de la categorie"
                                name="designation" required>
                        </div>
                        <button class="btn btn-success btn-block" type="submit">valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="EditCategory" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Editer une categorie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="form_update_category">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" placeholder="Code de la categorie" name="code"
                                required id="code">
                        </div>
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" placeholder="Designatoin de la categorie"
                                name="designation" required id="designation">
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
        function edit_category(id) {
            var de = document.getElementById('form_update_category')
            de.setAttribute('action', '/category/' + id);
            var urls = "/category/" + id;
            $.ajax({
                url: urls,
                type: 'GET',
                success: function(data) {
                    console.log(data);
                    if (data === 'off') {


                    } else {
                        console.log(data.code);

                        $('#code').val(data.code);
                        $('#designation').val(data.designation);
                    }
                }
            });
            $('#EditCategory').modal('show');
        }

        function delete_category(id) {
            swal({
                    title: 'Suppression',
                    text: 'Voulez vous vraiment supprimer ??',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var url = "/category/" + id;
                        var xhr = new XMLHttpRequest();
                        xhr.open('DELETE', url);
                        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                var response = JSON.parse(xhr.responseText);
                                console.log(response);
                                if (response === 'ok') {
                                    location.reload();
                                } else {
                                    location.reload();
                                }
                            }
                        };
                        xhr.send();
                    } else {}
                });
        }
    </script>
@endpush
