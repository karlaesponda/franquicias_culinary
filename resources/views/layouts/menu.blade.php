<!-- ***** Header Area Start ***** -->

<header class="header-area header-sticky fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav" id="navbarCollapse">
                    <!-- ***** Logo Start ***** -->
                    <a href="home.html" class="logo">
                    <img src="{{ asset('img/2.png') }}" alt="Mi Foto">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!--si el usuario no está autenticado-->
                    @guest
                    <ul class="nav">
                        <li class="me-2"><a href="{{route('home.index')}}" class="login">Inicio</a></li>
                        <br>
                        <li class="scroll-to-section"><a href= "{{ route('sobre_nosotros.index')}}" >Sobre nosotros</a></li>
                        <li class="scroll-to-section"><a href= "{{ route('franquicias.lista')}}">Franquicias</a></li>
                        <li class="me-2"><a href="{{route('login')}}" class="login">Acceder</a></li>
                        <br>
                        <li><a href="{{route('register')}}" class="create">Crear cuenta</a></li>
                    </ul>
                    @else
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href= "{{ route('home.index')}}" class="active">Inicio</a></li>
                        <li class="scroll-to-section"><a href= "{{ route('sobre_nosotros.index')}}" class="active">Sobre nosotros</a></li>
                        <li class="scroll-to-section"><a href= "{{ route('franquicias.lista')}}" class="active">Franquicias</a></li>
                        @if (\Auth::check() && !\Auth::user()->can('viewAll', \Auth::user()))
                        <li class="scroll-to-section"><a href= "{{ route('subs.payment')}}" class="active">Suscríbete</a></li>
                        @endif
                        @can('admin.index')
                        <li class="scroll-to-section"><a href= "{{ route('admin.index')}}" class="active">Ir al admin</a></li>
                        @endcan
                        <li>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                    
                            @csrf
                            </form> 
                            <a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault(); 
                                document.getElementById('logout-form').submit();">Salir</a>
                        </li>  

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
        @endguest
    </div>
</header>
<!-- ***** Header Area End ***** -->



<!--
<header class="header">
    <div class="menu">

        <div class="logo">
            
            <a href="#"><img src="" alt="Logo"></a>
        </div>

        // si el usuario no está autenticado
        @guest
        <ul class="d-flex">
            <li class="me-2"><a href="{{route('login')}}" class="login">Acceder</a></li>
            <br>
            <li><a href="{{route('register')}}" class="create">Crear cuenta</a></li>
        </ul>
        @else

        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" 
               data-bs-toggle="dropdown" aria-expanded="false">
          
                <span class="name-user">{{Auth::user()->name}}</span>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item"
                        href="#">Perfil</a></li>
                
                <li><a class="dropdown-item" href="#">Ir al admin</a></li>
                
                <li>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" 
                    style="display: none;">
                    
                    @csrf
                    </form>
                    <a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault(); 
                           document.getElementById('logout-form').submit();">Salir</a>
                </li>
            </ul>
        </div>
        @endguest
        </nav>
    </div>

</header>
-->