@extends('layout.plantilla')

@section('title', 'HOME')

@section('navIMG', '../image/GhassanKY.png')


@section('CSS')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

    {{-- Caja principal de presentacion --}}

    <div class="cajaPrincipal">

        <div>
            <button class="botonWelcome">Welcome to my Portfolio</button>
            <p class="ParrafoPrincipal">Hi! I'm Ghassan a Full Stack <br> Developer</p>
            <p class="ParrafoSegundario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae totam explicabo
                corporis suscipit qui laborum aliquid consectetur quos! Dolorem optio illo eius reiciendis quidem, itaque
                impedit facilis debitis dolorum eligendi!</p>
        </div>

        <div class="boxRosa">
            <img class="imagenRosa" src="{{ URL::asset('image/rosa.svg') }}" alt="" srcset="">
        </div>

    </div>


    {{-- Titulo de la parte principal de la caja Proyectos --}}


    <div class="contenedorTituloProyectos">
        <h1 class="proyecto">Projects</h1>
        <p class="proyectoComentario">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quos sint ea ut
            reprehenderit nemo, dolore possimus fuga magni numquam provident dolor laborum, voluptatem, amet dignissimos
            illo non? Totam, id?</p>
    </div>


    {{-- Zona de los proyectos subidos --}}


    <div class="proyectoPOST">

        <div class="boxPOST">
            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
        </div>



        <div class="boxPOST">


            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
        </div>


        <div class="boxPOST">
            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
        </div>


        <div class="boxPOST">
            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
        </div>


        <div class="boxPOST">
            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
        </div>


        <div class="boxPOST">
            <img class="imagenPOST" src="{{ URL::asset('FondoWeb.svg') }}">
            <h1>Titulo</h1>
            <p class="textoPOST">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis, dolore magni
                molestias mollitia ea? Ipsum, aspernatur hic? Quod autem illum, repudiandae impedit quia culpa vel vero
                dolore quae dolor.</p>
        </div>

    </div>


    {{-- Zona de contacto --}}


    <div>

        <div class="contactoBOX">


            <form class="contacto" action=" {{route('store')}} " method="POST">

                @csrf

                <h1>Contact</h1>


                <input type="text" name="name" placeholder="Nombre Completo">

                @error('name')
                    <p><strong> {{$message}} </strong></p>
                @enderror

                <input type="email" name="email" placeholder="Email">

                @error('email')
                    <p><strong> {{$message}} </strong></p>
                @enderror

                <textarea name="texto" cols="30" rows="10" placeholder="Mensaje"></textarea>

                @error('texto')
                    <p><strong> {{$message}} </strong></p>
                @enderror

                <input type="submit" value="Enviar">


            </form>

        </div>

    </div>

    @if (session('info'))
    <script>
        alert(" {{session('info')}} ");
    </script>
    @endif


@endsection
