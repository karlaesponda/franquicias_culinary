@extends('layouts.base')
<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>   
@section('styles')
    <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>   
    <script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>    
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="{{asset('css/login/css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/templatemo-klassy-cafe.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/flex-slider.css') }}">
    <link rel="stylesheet" href="{{asset('css/base/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/base/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base/css/slick-theme.css') }}">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('css/base/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/base/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/base/css/style_style.css') }}" rel="stylesheet">

@endsection

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Culinary Finder</h4>
                            <h6>Plataforma para vender o comprar Franquicias</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="{{ route('sobre_nosotros.index')}}">Conoce más</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                            <img src="{{ asset('img/slide-01.jpg') }}" alt="Mi Foto">
                            </div>
                          </div>
   
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Sobre nosotros</h6>
                            <h2>Empresa %100 yucateca</h2>
                        </div>
                        <p>Somos una empresa originaria de Mérida Yucatán que te brindará toda la información y los medios necesarios para contactar franquicias y llevar a cabo tu sueño de poner un negocio.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/imagen1.jpg') }}" alt="Mi Foto">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('img/imagen2.jpg') }}" alt="Mi Foto">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('img/imagen3.jpg') }}" alt="Mi Foto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="{{ asset('img/2.png') }}" alt="Mi Foto">
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    <br><br><br><br><br>
    <!-- Team Start -->

    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Franquicias</h6>
                        <br>
                        <br>
                    </div>
            </div> 
            <div class="row justify-content-center text-center">

                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Las más vendidas</h6>
                    <h1 class="mb-5">Franquicias disponibles</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/logo1.jpg" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Mítica</h5>
                                <p class="m-0">Hamburguesería fast-casual</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.miticaburgers.com/"><i class="fas fa-home nav-icon"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/miticagl/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/miticaburgers/?hl=es"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/logo2.png" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Eladio´s Bar</h5>
                                <p class="m-0">Restaurante familiar</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="http://www.eladios.com.mx/"><i class="fas fa-home nav-icon"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/RestEladiosBar/?locale=es_LA"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/logo3.png" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Las Adoraditas</h5>
                                <p class="m-0">Express Lunch</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://lasadoraditas.com/"><i class="fas fa-home nav-icon"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/lasadoraditas/?locale=es_LA"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/lasadoraditasmx/?hl=es"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/logo5.png" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">El Colon</h5>
                                <p class="m-0">Heladería</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://dulceriaysorbeteriacolon.wordpress.com/?fbclid=IwAR04y7Ng83_JrlkCxg7xyWC_6X3ettenhx_g9cJAHp3HN0XqwJJQZ7fwbFU"><i class="fas fa-home nav-icon"></i></a>
                                <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/SorbeteriaColon/?locale=es_LA"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Team End -->
    <!-- Pricing Start -->
    <div class="container-fluid bg-pricing" style="margin: 90px 0; background-image: url('img/slide-03-modi.png'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/pago.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 pt-5 pb-lg-5">
                    <div class="pricing-text bg-light p-4 p-lg-5 my-lg-5">
                        <div>
                            <div class="bg-white">
                                <div class="d-flex align-items-center justify-content-between border-bottom border-primary p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>199<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/MXN</small>
                                    </h1>
                                    <h5 class="text-uppercase m-0" style="color: #ff6557;"  style="color: #ff6557;">Suscripción mensual</h5>
                                </div>
                                <div class="p-4">
                                    <p><i class="fa fa-check text-success mr-2"></i>Publicar Franquicias</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Acceder a Información de contacto</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Administrar comentarios de franquicias publicadas</p>
                                    <p><i class="fa fa-check text-success mr-2"></i>Gestión de información sobre tus franquicias</p>
                                    <a href="{{route('register')}}" class="btn btn-primary my-2">Obtener suscripción</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->       
    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Experiencias</h6>
                        <h2>Opiniones sobre nuestros usuarios</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                            <img src="{{ asset('img/persona.jpg') }}" alt="Mi Foto">
                        </div>
                        <div class="down-content">
                            <h4>Karla Esponda</h4>
                            <span>"Gracias a esta plataforma abrí un local de mi restaurante favorito"</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                            <img src="{{ asset('img/persona1.jpg') }}" alt="Mi Foto">
                        </div>
                        <div class="down-content">
                            <h4>Mónica Méndez</h4>
                            <span>"Es la mejor plataforma para expandir tu negocio"</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            </ul>
                            <img src="{{ asset('img/chefs-03.jpg') }}" alt="Mi Foto">
                        </div>
                        <div class="down-content">
                            <h4>Peter Perkson</h4>
                            <span>"Gracias a los nuevos locales de franquicias logré conseguir trabajo"</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->
    
  </div>
</div>

@endsection
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>      

<script src="{{ asset('owlcarousel/owl.carousel.min.js')}}"></script>  
<script src="{{ asset('js/custom.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/owl-carousel.js')}}"></script>
<script src="{{ asset('js/accordions.js')}}"></script>
<script src="{{ asset('js/datepicker.js')}}"></script>
<script src="{{ asset('js/scrollreveal.min.js')}}"></script>
<script src="{{ asset('js/waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('js/imgfix.min.js')}}"></script> 
<script src="{{ asset('js/slick.js')}}"></script> 
<script src="{{ asset('js/lightbox.js')}}"></script> 
<script src="{{ asset('js/isotope.js')}}"></script> 

<!-- script franquicia -->
    
<script src="{{ asset('js/jquery.singlePageNav.min.js')}}"></script>  
<script src="{{ asset('js/parallax.min.js')}}"></script>    
<script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>     
<script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>          
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script> 
<script src="{{ asset('js/slick.min.js')}}"></script>             
<script src="{{ asset('js/templatemo-script.js')}}"></script>


<script src="{{ asset('js/app.js')}}"></script>  
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($franquicias as $franquicia)
                        {{$franquicia->title}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

-->