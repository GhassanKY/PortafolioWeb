@extends('layout.plantilla')

@section('title', 'Proyecto')

@section('CSS')
    <link rel="stylesheet" href="{{ asset('css/info.css') }}">
@endsection

@section('content')
    <script src="https://kit.fontawesome.com/ba10ce0731.js" crossorigin="anonymous"></script>
    {{-- Caja descripcion del proyecto --}}

    <div class="fatherPOST">

        <div class="boxPOST">



            {{-- Carrusel de imagenes --}}
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ URL::asset('FondoWeb.svg') }}" class="d-block imagenPOST" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('FondoWeb.svg') }}" class="d-block imagenPOST" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('FondoWeb.svg') }}" class="d-block imagenPOST" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            {{-- Se muestra la descripcion del proyecto --}}
            <div class="textoPOST">
                <h1>Titulo Proyecto</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis saepe, sint pariatur laborum
                    laboriosam minima? Dignissimos sit facere ipsam dicta aliquid accusamus, maxime corrupti nihil, laborum
                    dolorum pariatur cupiditate ad?</p>

                <div class="iconosBOX">
                    <i class="fa-brands fa-github fa-2x iconoSelect"></i>
                    <i class="fa-solid fa-download fa-2x iconoSelect"></i>
                </div>

            </div>

        </div>

    </div>





@endsection
