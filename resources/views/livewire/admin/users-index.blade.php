<div>
    <div class="card">

        <div class="card-header">
            <input  wire:model.live="search" class="form-control" type="" placeholder="Ingrese el nombre o correo de un usuario">
        </div>

        @if($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td width="10px ">
                            @can('admin.add.role.user')
                                <a class="btn btn-primary" href="{{ route('admin.assignments.edit',$user) }}">Editar</a>
                            @endcan                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>
        @else

        <div class="card-body">
            <strong>No hay registros</strong>
        </div>

        @endif
    </div>
</div>