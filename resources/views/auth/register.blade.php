@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{asset('css/login/css/login.css')}}">
@endsection

@section('title', 'Crear cuenta')

@section('content')

<form method="POST" class="form" action="{{route('register')}}" novalidate>
    @csrf
    <br>
    <br>
    <h2>Crear cuenta</h2>
    <div class="content-login">
        <div class="input-content">
            <input type="text" name="name" placeholder="Nombre completo"
                value="{{old('name')}}" autofocus>

            @error('name')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span> 
            @enderror


        </div>

        <div class="input-content">
            <input type="text" name="username" placeholder="Usuario"
                value="{{old('username')}}" 
                autofocus>

            @error('username')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="text" name="direccion" placeholder="Dirección"
                value="{{old('direccion')}}" 
                autofocus>

            @error('direccion')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="text" name="cp" placeholder="CP"
                value="{{old('cp')}}" 
                autofocus>

            @error('cp')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="text" name="telefono" placeholder="Teléfono"
                value="{{old('telefono')}}" 
                autofocus>

            @error('telefono')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="text" name="email" placeholder="Correo eléctronico"
                value="{{old('email')}}" 
                autofocus>

            @error('email')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="password" name="password" placeholder="Contraseña">

            @error('password')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="password" name="password_confirmation" placeholder="Confirmar contraseña">
        </div>
    </div>

    <input type="submit" value="Registrarse" class="button">
    <p>¿Ya tienes una cuenta? <a href="{{route('login')}}" class="link">Iniciar sesión</a></p>
</form>
@endsection