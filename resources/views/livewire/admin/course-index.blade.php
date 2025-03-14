<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table id="datatable" class="table table-bordered display nowrap" width="100%">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">CURSO</th>
                                <th class="text-center">IMAGEN</th>
                                {{--
                                <th class="text-center">DESCRIPCION</th>
                                <th class="text-center">REQUERIMIENTO</th>
                                <th class="text-center">OBJETIVO</th> --}}
                                <th class="text-center">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td class="text-center">{{ $course->id }}</td>
                                    <td class="text-center">{{ $course->title }}</td>
                                    <td class="text-center">
                                        <img src="{{$course->image}}" width="70px" alt="Imagen del course">
                                    </td>
                                    {{--
                                    <td class="text-center">{{ $course->descripcion }}</td>
                                    <td class="text-center">{{ $course->requerimiento }}</td>
                                    <td class="text-center">{{ $course->objetivo }}</td> --}}
                                    <td class="text-center">
                                        <a class="btn btn-success" href="{{ route('admin.courses.edit', $course) }}" title="Editar">
                                            <i class="fa fa-pen" aria-hidden="true">&nbsp;Editar</i>
                                        </a>   
                                        <a class="btn btn-primary" href="{{ route('admin.topics.index', $course) }}" title="Asignar Tema">
                                            <i class="fas fa-sign-in-alt" aria-hidden="true">&nbsp;Temas</i>
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
