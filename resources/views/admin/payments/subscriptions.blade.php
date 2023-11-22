@extends('adminlte::page')

@section('title', 'Panel de administración')

@section('content_header')
<h1>Lista de suscripciones</h1>
@endsection

<style>
.text-left {
    text-align: left;
}

</style>

@section('content')

@if (session('success-delete'))
<div class="alert alert-info">
    {{ session('success-delete')}}
</div>    
@endif


<div class="card">

    <div class="card-body">
        @if(\Auth::user()->can('createSubs',\Auth::user()))
        <div class="card-header">
        <form action="/payment" method="POST">
            <button class="btn btn-primary btn-sm mb-2" type="submit" id="checkout-live-button">
                Adquirir suscripción
            </button>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        </div>
        
        
            
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Fecha de término</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($subs as $sub)
                    
                
                <tr>
                    <th>{{$sub->id}}</th>
                    <td>{{$sub->name}}</td>
                    <td>{{$sub->user->name}}</td>
                    <td>{{$sub->ends_at}}</td>


                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center mt-3">
            
        </div>

    </div>
</div>
@endsection
