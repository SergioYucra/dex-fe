@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

@stop

@section('content')
    <div class="container-fluid"> <br>
        <h2 class="text-center font-weight-bold"></h2>
        <div class="row mb-4">
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="card h-100">
                    <img src="{{ asset('img/services/services1.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center font-weight-bold">Tutorias</h5>
                        <p class="card-text text-justify">
                            Obten tutorias personalizadas y aprende junto a profesionales.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="card h-100">
                    <img src="{{ asset('img/services/services2.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center font-weight-bold">Asesorías</h5>
                        <p class="card-text text-justify">Necesitas ayuda para aprender algún tema. Escríbenos </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="card h-100">
                    <img src="{{ asset('img/services/services3.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center font-weight-bold">Cursos Online</h5>
                        <p class="card-text text-justify">Encuentra los mejores cursos de Contabilidad, Medicina eh
                            Informatica en español. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                <div class="card h-100">
                    <img src="{{ asset('img/services/services4.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="text-center font-weight-bold">Blog</h5>
                        <p class="card-text text-justify">
                            Encuentra articulos informativos sobre los ultimos avances en distintas areas.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 mt-3">
                    <div class="card bg-dark mb-3 rounded h-100 ">
                        <div class="card-body text-center">
                            <h3 class="card-text font-weight-bold ">1000</h3>
                            <p class="card-text font-weight-bold ">Usuarios</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-3">
                    <div class="card bg-dark mb-3 rounded h-100 ">
                        <div class="card-body text-center">
                            <h3 class="card-text font-weight-bold ">500</h3>
                            <p class="card-text font-weight-bold ">Cursos</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-3">
                    <div class="card bg-dark mb-3 rounded h-100 ">
                        <div class="card-body text-center">
                            <h3 class="card-text font-weight-bold ">100</h3>
                            <p class="card-text font-weight-bold ">Artículos</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mt-3">
                    <div class="card bg-dark mb-3 rounded h-100 ">
                        <div class="card-body text-center">
                            <h3 class="card-text font-weight-bold ">5</h3>
                            <p class="card-text font-weight-bold ">Áreas de Estudio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div id="carouselExampleControls" class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 1</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 4</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 5</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 6</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 7</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 8</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 9</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div> --}}

    </div>
@stop

@section('css')
    <style>
        .carousel-inner {
            padding: 1em;
        }

        .card {
            margin: 0 0.5em;
            box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
            border: none;
        }

        .carousel-control-prev,
        .carousel-control-next {
            background-color: #e1e1e1;
            width: 6vh;
            height: 6vh;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }

        @media (min-width: 768px) {
            .carousel-item {
                margin-right: 0;
                flex: 0 0 33.333333%;
                display: block;
            }

            .carousel-inner {
                display: flex;
            }
        }

        .card .img-wrapper {
            max-width: 100%;
            height: 13em;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card img {
            max-height: 100%;
        }

        @media (max-width: 767px) {
            .card .img-wrapper {
                height: 17em;
            }
        }
    </style>

@stop

@section('js')
    <script>
        var multipleCardCarousel = document.querySelector(
            "#carouselExampleControls"
        );
        if (window.matchMedia("(min-width: 768px)").matches) {
            var carousel = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });
            var carouselWidth = $(".carousel-inner")[0].scrollWidth;
            var cardWidth = $(".carousel-item").width();
            var scrollPosition = 0;
            $("#carouselExampleControls .carousel-control-next").on("click", function() {
                if (scrollPosition < carouselWidth - cardWidth * 4) {
                    scrollPosition += cardWidth;
                    $("#carouselExampleControls .carousel-inner").animate({
                            scrollLeft: scrollPosition
                        },
                        600
                    );
                }
            });
            $("#carouselExampleControls .carousel-control-prev").on("click", function() {
                if (scrollPosition > 0) {
                    scrollPosition -= cardWidth;
                    $("#carouselExampleControls .carousel-inner").animate({
                            scrollLeft: scrollPosition
                        },
                        600
                    );
                }
            });
        } else {
            $(multipleCardCarousel).addClass("slide");
        }
    </script>
@stop
