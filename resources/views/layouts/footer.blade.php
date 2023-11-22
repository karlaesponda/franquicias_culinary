@section('styles')
<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@endsection
<style>
        /* Aplica estilos personalizados aquí */
        .icon-twitter {
            color: #1DA1F2; /* Cambia esto al color que desees */
        }
    </style>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div  class="right-text-content">
                    <p class="white-text">¡Contáctanos!</p>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Mérida, Yucatán, México</p>
                    <p><i class="fa fa-phone-alt "></i> + 52 9931175965</p>
                    <p><i class="fa fa-envelope mr-2"></i>culinaryfinder@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo">
                <img src="{{ asset('img/logo-CF-footer.png') }}" alt="Mi Foto">
                </div>
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                    <p>© Copyright Culinary Finder
                </div>
            </div>
        </div>
    </div>
</footer>


<!--
<footer class="footer margen-interno">
    <nav class="pie">
        <a href="#" target="_blank">Desarrollado por &copy; KARLA ESPONDA</a>
    </nav>
</footer>
-->