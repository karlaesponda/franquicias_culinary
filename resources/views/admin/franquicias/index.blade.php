@extends('adminlte::page')
@section('title', 'Panel de administración')

@section('content_header')
<h2>Administra tus franquicias</h2>
@endsection

@section('content')

@if (session('success-create'))
<div class="alert alert-info">
    {{session('success-create')}}
</div>
@elseif (session('success-update'))
<div class="alert alert-info">
    {{session('success-update')}}
</div>
@elseif (session('success-delete'))
<div class="alert alert-info">
    {{session('success-delete')}}
</div>
@endif

<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('franquicias.create')}}">Crear franquicia</a>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($franquicias as $franquicia )
                    
                
                <tr>
                    <td>{{Str::limit($franquicia->title, 25, '...')}}</td>


                    <td width="2px"><a href="{{route('franquicias.show', $franquicia->id)}}"
                            class="btn btn-primary btn-sm mb-2">Mostrar</a></td>

                    <td width="5px"><a href="{{route('franquicias.edit', $franquicia->slug)}}"
                            class="btn btn-primary btn-sm mb-2">Editar</a></td>

                    <td width="5px">
                        <form action="{{route('franquicias.destroy', $franquicia->slug)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center mt-3">
            {{$franquicias->links()}}
        </div>
    </div>
</div>
@endsection