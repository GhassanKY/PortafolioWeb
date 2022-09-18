@extends('layout.plantilla')

@section('title', 'Agregar')

@section('CSS')
<link rel="stylesheet" href="{{ asset('css/add.css') }}">
@endsection


@section('content')


  {{--   <div class="row"> --}}

        <form class="d-flex m-5 justify-content-center" action="">

            

            <div class="p-5 bg-light w-50 d-flex flex-column align-items-center rounded shadow">

                <h2 class="fw-bold text-center pt-5 mb-5">Agrega un nuevo proyecto <i class="fa-solid fa-heart fa-beat" style="color: red"></i></h2>

                <div class="mb-4">
                    <label class="form-label"for="imagenes">Imagenes</label>
                    <input class="form-control" type="file">


                </div>
                <div class="mb-4 w-50">
                    <label class="form-label"for="titulo">Titulo</label>
                    <input class="form-control" type="text">

                </div>
                <div class="mb-4 w-50">
                    <label class="form-label" for="descripcion">Descripcion</label>
                    <input class="form-control" type="text">

                </div>
                <div class="mb-4 w-50">
                    <label class="form-label"for="github">Github</label>
                    <input class="form-control" type="text">

                </div>

                <div class="mb-4 w-50">
                    <label class="form-label"for="descargar">Link de Archivo</label>
                    <input class="form-control" type="text">

                </div>

                <div class="mb-4 btn-lg">
                    <button class="btn btn-danger">
                        Enviar
                    </button>
                </div>

            </div>

        </form>

    {{-- </div> --}}


@endsection
