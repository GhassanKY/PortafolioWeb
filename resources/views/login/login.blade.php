@extends('layout.plantilla')

@section('title', 'Login')

@section('CSS')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')

    <div class="container w-75 bg-light mt-5 rounded shadow">

        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white p-2 rounded">

                <h2 class="fw-bold text-center pt-5 mb-5">Bienvenido</h2>

                {{-- Login --}}

                <form action="">
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    {{-- Botones redes sociales --}}

                    <div class="container w-100 my-5">
                        <div class="row text-center">
                            <div class="col-12">
                                Iniciar Sesión
                            </div>
                        </div>
                    </div>
                    {{-- Configuracion Botones Redes Sociales --}}
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="{{ URL::asset('image/facebook.png') }}" width="32" alt="Facebook">
                                    </div>
                                    <div class="col-12 col-md-10 text-center">
                                        Facebook
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1">
                                <div class="row align-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="{{ URL::asset('image/google.png') }}" width="32" alt="Google">
                                    </div>
                                    <div class="col-12 col-md-10 text-center">
                                        Google
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>


@endsection
