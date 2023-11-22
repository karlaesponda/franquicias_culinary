@extends('layouts.base')
@extends('layouts.menu')
@section('styles')
    <link href="{{ asset('css/base/css/style_style.css') }}" rel="stylesheet">
@endsection
@section('content')
<style>
    .texto-fb5849 {
    color: #fff;
}
.border-fb5849 {
    border-left: 2px solid #fb5849; /* Ajusta el grosor y el color del borde según tus preferencias */
    
}
.div-con-color {
    background-color: #ff6557;
    color: #fff!important;
    padding: 20px; /* Ajusta el relleno según sea necesario */
    border-radius: 10px; /* Añade esquinas redondeadas si deseas */
    
}


</style>

<div class="container-fluid py-5">
<br><br>
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <br>
                    <img class="img-fluid w-100" src="{{ asset('img/culinary_finder.png') }}" alt="">
                </div>
                <div class="col-lg-6">
                <h6 class="d-inline-block text-uppercase bg-light py-1 px-2 texto-fb5849">Sobre Nosotros</h6>
                    
                    <h1 class="mb-4">Culinary Finder</h1>
                    <p class="pl-4  border-fb5849">En Culinary Finder, nuestro propósito es unir a las comunidades 
                        a través de la comida y brindar oportunidades de negocio que celebren la autenticidad y la diversidad. 
                        Estamos aquí para servir a emprendedores, amantes de la comida y comunidades hambrientas de nuevas experiencias 
                        culinarias.</p>
                </div>
            </div>
        </div>

        <div class="div-con-color">
            <h1 class="div-con-color"> ¿Cómo funciona Culinary Finder?</h1>
            <p class="div-con-color">Es sencillo. Para adquirir una franquicia, todo lo que necesitas hacer es ponerte en contacto 
            directamente con el franquiciador. Sin embargo, para acceder a la información de contacto de las 
            franquicias, es necesario adquirir una suscripción a Culinary Finder. La información de 
            contacto es proporcionada por nosotros en cada perfil de franquicia una vez que te hayas convertido 
            en suscriptor. Cada franquicia tiene su propia historia, su propio sabor único y su propio camino 
            hacia el éxito. Puedes encontrar todos los detalles de contacto que necesitas en la página de cada 
            franquicia.</p>
        </div>
    <br><br><br><br>
    <!-- Open Hours Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/exito.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-uppercase bg-light py-1 px-2 texto-fb5849">¡Empieza ya!</h6>
                        <h1 class="mb-4" style="color: white;">Tu Éxito Comienza Aquí</h1>
                        <p style="color: white;">Estamos aquí para ayudarte a dar el salto hacia el negocio que siempre has soñado.
                        Así que adelante, explora nuestras emocionantes franquicias, conviértete en suscriptor y 
                        obtén acceso a la información de contacto de las franquicias para iniciar tu emocionante 
                            viaje en el mundo de la franquicia.
                        </p>
                        <a href="{{route('register')}}" class="btn btn-primary mt-2">¡Suscríbete!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->
</div>

@endsection