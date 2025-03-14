<div>
    <br>
    <div class="card">

        <div class="card-header">
            <input  wire:model.live="search" class="form-control" type="" placeholder="Ingrese el titulo">
        </div>

        @if($courses->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Imagen</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->title }}</td>
                        <td><img src="{{ Storage::url($course->image) }}" alt="Imagen del courses" width="100"></td>
                        <td width="10px ">
                    
                                <a class="btn btn-primary" href="{{ route('courses.edit',$course) }}">Editar</a>
                                
                                <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                                           
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $courses->links() }}
        </div>
        @else

        <div class="card-body">
            <strong>No hay registros</strong>
        </div>

        @endif
    </div>
</div>
