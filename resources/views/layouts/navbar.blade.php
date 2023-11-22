<div class="category-container">
    <ul>
        <li class="nav-item {{request()->routeIs('home.index') ? 'active' : ''}}">
            <a href="{{route('home.index')}}">Todo</a></li>         
        
            
        <li class="nav-item ">
            <a href="#top" class="active">Inicio</a>
        </li>

        <li class="nav-item ">
            <a href="#">Sobre nosotros</a>
        </li>

        <li class="nav-item ">
            <a href="#">Franquicias</a>
        </li>

        <li class="nav-item ">
            <a href="#chefs">Reseñas</a>
        </li>

    </ul>
</div>