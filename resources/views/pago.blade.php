@extends('layouts.base')

@section('styles')
<link rel="stylesheet" href="{{asset('css/login/css/login.css')}}">
@endsection

@section('title', 'CDatos tarjeta')

@section('content')

<form method="POST" class="form" action="#" novalidate>
    @csrf
    <br>
    <br>
    <h2>Procesamiento de pago</h2>
    <div class="content-login">
        <div class="input-content">
            <input type="text" name="#" placeholder="Número de tarjeta"
                value="{{old('#')}}" autofocus>

            @error('tarjeta')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span> 
            @enderror


        </div>

        <div class="input-content">
            <input type="text" name="#" placeholder="Fecha de vencimiento"
                value="{{old('#')}}" 
                autofocus>

            @error('fecha_vencimiento')
            <span class="alert-red">
                <span>*{{$message}}</span>
            </span>                
            @enderror

        </div>

        <div class="input-content">
            <input type="text" name="nip" placeholder="NIP (3 dígitos)"
                value="{{ old('nip') }}" autofocus pattern="[0-9]{3}" maxlength="3" required> 

            @error('nip')
            <span class="alert-red">
                <span>*{{ $message }}</span>
            </span>                
            @enderror
        </div>


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


    </div>

    <input type="submit" value="Efectuar pago" class="button">
    <p><a href="#" class="link">Iniciar sesión</a></p>
</form>
@endsection
