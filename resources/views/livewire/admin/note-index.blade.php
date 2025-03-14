<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered display nowrap" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">TITULO</th>
                                <th class="text-center">URL</th>
                                <th class="text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notes as $note)
                                <tr>
                                    <td class="text-center">{{ $note->id }}</td>
                                    <td class="text-center">{{ $note->title }}</td>
                                    <td class="text-center">{{ $note->url }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-success" href="{{ route('admin.notes.edit', $note) }}" title="Editar">
                                            <i class="fa fa-pen" aria-hidden="true">&nbsp;Editar</i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="{{ asset('js/datatable.js') }}"></script>
                </div>
            </div>
        </div>
    </div>
</div>
