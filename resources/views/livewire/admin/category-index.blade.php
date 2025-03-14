<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered display nowrap" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">CATEGORIA</th>
                                <th class="text-center">FECHA</th>
                                <th class="text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="text-center">{{ $category->id }}</td>
                                    <td class="text-center">{{ $category->name }}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::createFromFormat('Y-m-d', ($category->updated_at->toDateString()))->format('d-m-Y') }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-success" href="{{ route('admin.categories.edit', $category) }}"
                                            title="Editar">
                                            <i class="fa fa-pen" aria-hidden="true"></i>&nbsp;Editar
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
