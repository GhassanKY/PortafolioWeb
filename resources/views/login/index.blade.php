@extends('layout.plantilla')
@section('title', 'Inicio')

@section('CSS')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@section('content')

    <div class="d-flex justify-content-center color">
        <button class="btn btn-outline-danger btn-lg btn-block m-5">
            Agregar Nuevo Proyecto
        </button>
    </div>


    <div class="proyectoPOST">

        <div class="boxPOST">
            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
            <div class="row">

                <div class="col-1">
                    <button class="btn btn-warning m-5 text-center">
                        Editar
                    </button>
                </div>

            </div>
        </div>



        <div class="boxPOST">


            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
            {{-- Botones de editar publicacion --}}
            <div class="row">

                <div class="col-1">
                    <button class="btn btn-warning m-5 text-center">
                        Editar
                    </button>
                </div>

            </div>


        </div>



        <div class="boxPOST">
            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
            {{-- Botones de editar publicacion --}}
            <div class="row">

                <div class="col-1">
                    <button class="btn btn-warning m-5 text-center">
                        Editar
                    </button>
                </div>

            </div>


        </div>



        <div class="boxPOST">
            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
            {{-- Botones de editar publicacion --}}
            <div class="row">

                <div class="col-1">
                    <button class="btn btn-warning m-5 text-center">
                        Editar
                    </button>
                </div>

            </div>


        </div>



        <div class="boxPOST">
            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
            {{-- Botones de editar publicacion --}}
            <div class="row">

                <div class="col-1">
                    <button class="btn btn-warning m-5 text-center">
                        Editar
                    </button>
                </div>

            </div>


        </div>



        <div class="boxPOST">
            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
            {{-- Botones de editar publicacion --}}
            <div class="row">

                <div class="col-1">
                    <button class="btn btn-warning m-5 text-center">
                        Editar
                    </button>
                </div>

            </div>


        </div>


    </div>


@endsection
