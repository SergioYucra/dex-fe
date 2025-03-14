<div class="container-fluid">
    <div class="card-body rounded">
        <div class="mb-3 row">
            <div class="col-sm-6">
                <label for="titleSearch" class="form-label text-success">Título del hilo</label>
                <input type="text" id="titleSearch" wire:model.live="titleSearch" placeholder="Buscar por título"
                    class="form-control mb-1">
            </div>
            <div class="col-sm-6">
                <label for="categorySearch" class="form-label text-success">Buscar por categoría</label>
                <select id="categorySearch" wire:model.live="categorySearch" class="form-control mb-1">
                    <option value="">Seleccionar categoría</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <div class="col-sm-4">
                <label for="userSearch" class="form-label text-success">Filtrado</label>
                <select id="userSearch" wire:model.live="userSearch" class="form-control mb-1">
                    <option value="">Todos</option>
                    <option value="{{ $id }}">Propio</option>
                </select>
            </div> --}}
        </div>
    </div>
    <a href="#" class="ml-4 btn btn-success" data-toggle="modal" data-target="#createThreadModal">
        {{ __('+ Agregar Hilo') }}
    </a>
    @if ($threads->count())
        <div class="card-body">
            <div class="row">
                @foreach ($threads as $thread)
                    <div class="col-sm-6 col-md-6 col-lg-6 text-justify d-flex"> <!-- Flexbox aplicado a la columna -->
                        <div class="card w-100">
                            <div class="card-body">
                                <p class="card-text font-weight-bold">{{ $thread->title }}</p>
                                <p class="card-text">
                                    <span class="badge" style="background-color: {{ $thread->category->color }}; color: #fff;">
                                        {{ $thread->category->name }}
                                    </span>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        Autor: {{ $thread->user->name }}
                                    </small>
                                </p>
                                <p class="class-text">{{ $thread->body }}</p>
                                <p><b>Fecha: </b>{{\Carbon\Carbon::createFromFormat('Y-m-d', ($thread->updated_at->toDateString()))->format('d-m-Y')}}</p>
                                <a href="{{route('user.threads.show',$thread->id)}}" class="btn btn-dark">
                                    {{ __('+ Respuestas') }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="card-body">
            <strong>No hay registros</strong>
        </div>
    @endif


    {{ $threads->links() }}
</div>
