<div class="container-fluid">
    {{-- <div class="card-header text-success text-center">
        <h3 class="font-weight-bold font-extra-bold display-5">ARTICULOS INFORMATIVOS</h3>
    </div> --}}
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
    <div class="">
        @if ($articles->count())
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="card mb-3 w-100">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ $article->image }}" class="card-img-top h-100" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body h-100">
                                            <h5 class="card-title font-weight-bold mb-2">{{ $article->title }}</h5>
                                            <p class="card-text text-justify">
                                                {{ $article->description }}
                                            </p>
                                            <p class="card-text">
                                                <span class="badge" style="background-color: {{ $article->category->color }}; color: #fff;">
                                                    {{ $article->category->name }}
                                                </span>
                                            </p>
                                            <p class="card-text">
                                                <small class="text-muted">
                                                    Autor: {{ $article->user->name }}
                                                </small>
                                            </p>
                                            <a href="{{ $article->article_url }}" class="btn btn-success" target="_blank">Ver
                                                articulo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>
