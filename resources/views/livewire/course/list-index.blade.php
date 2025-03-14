<div class="container-fluid">
    {{-- <div class="card-header text-success text-center">
        <h3 class="display-5 font-weight-bold">CURSOS DISPONIBLES</h3>
    </div>     --}}
    {{-- <div class="card mb-4 rounded"> --}}
        <div class="card-body rounded">
            <div class="mb-3 row">
                <div class="col-sm-4">
                    <label for="titleSearch" class="form-label text-success">Buscar por título</label>
                    <input type="text" id="titleSearch" wire:model.live="titleSearch" placeholder="Buscar por título"
                        class="form-control mb-1">
                </div>
                <div class="col-sm-4">
                    <label for="categorySearch" class="form-label text-success">Buscar por categoría</label>
                    <select id="categorySearch" wire:model.live="categorySearch" class="form-control mb-1">
                        <option value="">Seleccionar categoría</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="userSearch" class="form-label text-success">Buscar Tutor</label>
                    <input type="text" id="userSearch" wire:model.live="userSearch" placeholder="Buscar por usuario"
                        class="form-control mb-1">
                </div>
            </div>
        </div>
    {{-- </div> --}}
    {{-- <div class="card mb-4"> --}}
        @if ($courses->count())
            <div class="card-body">
                <div class="row">
                    @foreach ($courses as $course)
                        <div class="col-sm-3 mt-3">
                            <div class="card h-100">
                                <img src="{{ $course->image }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    {{-- <p class="card-text text-center font-weight-bold">{{ $course->title }}</p> --}}
                                    <p class="card-text">
                                        <span class="badge" style="background-color: {{ $course->category->color }}; color: #fff;">
                                            {{ $course->category->name }}
                                        </span>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            Autor: {{ $course->user->name }}
                                        </small>
                                    </p>
                                    <a class="btn btn-success w-100" href="{{ route('course.lists.course', $course) }}"
                                        title="Ver">
                                        Ver Curso</i>
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

        {{ $courses->links() }}
    {{-- </div> --}}
</div>
