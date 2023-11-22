@extends('adminlte::page')

@section('title', 'Modificar artículo')

@section('content_header')
<h2>Modificar artículo</h2>
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{route('franquicias.update', $franquicia) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
            <input type="hidden" name="id" value="{{$franquicia->id}}">
            </div>

            <div class="form-group">
                <label>Título</label>
                <input type="text" class="form-control" id="title" name='title' minlength="5" 
                maxlength="255" value="{{$franquicia->title}}">

                @error('title')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Nombre del restaurante</label>
                <input type="text" class="form-control" id="nombre_restaurante" name='nombre_restaurante' 
                minlength="5" maxlength="255" value="{{$franquicia->nombre_restaurante}}">
       
                @error('nombre_restaurante')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="slug" name='slug' 
                placeholder="Slug de la franquicia" readonly value="{{$franquicia->slug}}">
 
                @error('slug')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
                
            </div>

            <div class="form-group">
                <label>Razón Social</label>
                <input type="text" class="form-control" id="razon_social" name='razon_social' 
                minlength="5" maxlength="255" value="{{$franquicia->razon_social}}">
       
                @error('nombre_restaurante')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>RFC</label>
                <input type="text" class="form-control" id="rfc" name='rfc' 
                minlength="5" maxlength="255" value="{{$franquicia->rfc}}">
       
                @error('rfc')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>anios_operacion</label>
                <input type="text" class="form-control" id="anios_operacion" name='anios_operacion' 
                value="{{$franquicia->anios_operacion}}">
       
                @error('anios_operacion')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Número de Sucursales</label>
                <input type="text" class="form-control" id="num_sucursales" name='num_sucursales' 
                value="{{$franquicia->num_sucursales}}">
       
                @error('num_sucursales')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>


            <!-- //VA MARCA REGISTRADA -->
            <label>Marca Registrada</label>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">Sí</label>
                    <input class="form-check-input ml-2" type="radio" name='marca_registrada' id="marca_registrada" value="1">
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label">No</label>
                    <input class="form-check-input ml-2" type="radio" name='marca_registrada' id="marca_registrada" value="0">
                </div>
 
                @error('marca_registrada')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
            </div>
            <!-- //VA COSTO MARCA -->

            <div class="form-group">
                <label>Costo de la Marca</label>
                <input type="number" step="0.01" class="form-control" id="costo_marca" name='costo_marca' 
                value="{{$franquicia->costo_marca}}">
       
                @error('costo_marca')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Cambiar Logotipo</label>
                <input type="file" class="form-control-file mb-2" id="logotipo" name='logotipo'>

                <div class="rounded mx-auto d-block">
                    <img src="{{asset('storage/'. $franquicia->logotipo)}}" style="width: 250px">
                </div>

                @error('logotipo')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
             
            </div>

            <div class="form-group">
                <label>Tipo de Restaurante</label>
                <input type="text" class="form-control" id="tipo_restaurante" name='tipo_restaurante' 
                minlength="5" maxlength="255" value="{{$franquicia->tipo_restaurante}}">
       
                @error('tipo_restaurante')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Número de contacto</label>
                <input type="text" class="form-control" id="numero_contacto_1" name='numero_contacto_1' 
                value="{{$franquicia->numero_contacto_1}}">
       
                @error('numero_contacto_1')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Número de contacto secundario</label>
                <input type="text" class="form-control" id="numero_contacto_2" name='numero_contacto_2' 
                value="{{$franquicia->numero_contacto_2}}">
       
                @error('numero_contacto_2')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Correo electrónico</label>
                <input type="text" class="form-control" id="email_1" name='email_1' 
                value="{{$franquicia->email_1}}">
       
                @error('email_1')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Correo electrónico secundario</label>
                <input type="text" class="form-control" id="email_2" name='email_2' 
                value="{{$franquicia->email_2}}">
       
                @error('email_2')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Sitio Web</label>
                <input type="text" class="form-control" id="website" name='website' 
                minlength="5" maxlength="255" value="{{$franquicia->website}}">
       
                @error('website')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Página de Facebook</label>
                <input type="text" class="form-control" id="facebook" name='facebook' 
                minlength="5" maxlength="255" value="{{$franquicia->facebook}}">
       
                @error('facebook')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Página de Instagram</label>
                <input type="text" class="form-control" id="instagram" name='instagram' 
                minlength="5" maxlength="255" value="{{$franquicia->instagram}}">
       
                @error('instagram')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Descripción</label>
                <input type="text" class="form-control" id="descripcion" name='descripcion' 
                minlength="5" maxlength="255" value="{{$franquicia->descripcion}}">
       
                @error('descripcion')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Historia</label>
                <input type="text" class="form-control" id="historia" name='historia' 
                minlength="5" maxlength="255" value="{{$franquicia->historia}}">
       
                @error('historia')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>


            <div class="form-group">
                <label>Misión</label>
                <input type="text" class="form-control" id="mision" name='mision' 
                minlength="5" maxlength="255" value="{{$franquicia->mision}}">
       
                @error('mision')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Visión</label>
                <input type="text" class="form-control" id="vision" name='vision' 
                minlength="5" maxlength="255" value="{{$franquicia->vision}}">
       
                @error('vision')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Estándares de Calidad</label>
                <input type="text" class="form-control" id="estandar_calidad" name='estandar_calidad' 
                minlength="5" maxlength="255" value="{{$franquicia->estandar_calidad}}">
       
                @error('estandar_calidad')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Mercado Meta</label>
                <input type="text" class="form-control" id="mercado_meta" name='mercado_meta' 
                minlength="5" maxlength="255" value="{{$franquicia->mercado_meta}}">
       
                @error('mercado_meta')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <!-- //VA MENU -->
            <div class="form-group">
                <label>Cambiar Menú</label>
                <input type="file" class="form-control-file mb-2" id="menu" name='menu'>

                <div class="rounded mx-auto d-block">
                    <img src="{{asset('storage/'. $franquicia->menu)}}" style="width: 250px">
                </div>

                @error('menu')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
             
            </div>

            <!-- //VA INF FINANCIERA -->
            <div class="form-group">
                <label>Cambiar Información Financiera</label>
                <input type="file" class="form-control-file mb-2" id="inf_financiera" name='inf_financiera'>

                <div class="rounded mx-auto d-block">
                    <img src="{{asset('storage/'. $franquicia->inf_financiera)}}" style="width: 250px">
                </div>

                @error('inf_financiera')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
             
            </div>

            <div class="form-group">
                <label>Soporte</label>
                <input type="text" class="form-control" id="soporte" name='soporte' 
                minlength="5" maxlength="255" value="{{$franquicia->soporte}}">
       
                @error('soporte')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Asesoramiento en Ubicación</label>
                <input type="text" class="form-control" id="asesoramiento_ubi" name='asesoramiento_ubi' 
                minlength="5" maxlength="255" value="{{$franquicia->asesoramiento_ubi}}">
       
                @error('asesoramiento_ubi')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Asesoramiento en Ubicación</label>
                <input type="text" class="form-control" id="asesoramiento_ubi" name='asesoramiento_ubi' 
                minlength="5" maxlength="255" value="{{$franquicia->asesoramiento_ubi}}">
       
                @error('asesoramiento_ubi')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Diseño de Tienda y Construcción</label>
                <input type="text" class="form-control" id="asesoramiento_ubi" name='asesoramiento_ubi' 
                minlength="5" maxlength="255" value="{{$franquicia->asesoramiento_ubi}}">
       
                @error('asesoramiento_ubi')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Marketing y Publicidad</label>
                <input type="text" class="form-control" id="marketing" name='marketing' 
                minlength="5" maxlength="255" value="{{$franquicia->marketing}}">
       
                @error('marketing')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Entrenamiento</label>
                <input type="text" class="form-control" id="entrenamiento" name='entrenamiento' 
                minlength="5" maxlength="255" value="{{$franquicia->entrenamiento}}">
       
                @error('entrenamiento')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Preparación de Alimentos</label>
                <input type="text" class="form-control" id="preparacion" name='preparacion' 
                minlength="5" maxlength="255" value="{{$franquicia->preparacion}}">
       
                @error('preparacion')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Servicio al Cliente</label>
                <input type="text" class="form-control" id="servicio_cliente" name='servicio_cliente' 
                minlength="5" maxlength="255" value="{{$franquicia->servicio_cliente}}">
       
                @error('servicio_cliente')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Gestión de Negocios</label>
                <input type="text" class="form-control" id="gestion" name='gestion' 
                minlength="5" maxlength="255" value="{{$franquicia->gestion}}">
       
                @error('gestion')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>

            <div class="form-group">
                <label>Tecnología y Sistemas</label>
                <input type="text" class="form-control" id="tecnologia" name='tecnologia' 
                minlength="5" maxlength="255" value="{{$franquicia->tecnologia}}">
       
                @error('tecnologia')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>
                @enderror
               
            </div>


            <input type="submit" value="Modificar franquicia" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>



<script>
    $(document).ready( function() {
  $("#title").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
</script>
@endsection