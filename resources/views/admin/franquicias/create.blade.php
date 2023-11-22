@extends('adminlte::page')
@section('title', 'Crear franquicia')
@section('content_header')
<h2>Crear Nueva Franquicia</h2>
@endsection



@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('franquicias.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Título</label>
                <input type="text" class="form-control" id="title" name='title'
                    placeholder="Ingrese el nombre de la franquicia" minlength="5"   maxlength="255"
                    value="{{old('title')}}">

                @error('title')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Nombre del Restaurante</label>
                <input type="text" class="form-control" id="nombre_restaurante" name='nombre_restaurante'
                    placeholder="Ingrese el nombre del restaurante" minlength="5"   
                    value="{{old('nombre_restaurante')}}">

 

            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="slug" name='slug' 
                    placeholder="Slug de la franquicia" readonly 
                    value="{{old('slug')}}">

                @error('slug')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Razón Social</label>
                <input type="text" class="form-control" id="razon_social" name='razon_social' 
                    placeholder="Ingrese la razón social" minlength="5" maxlength="255" 
                    value="{{old('razon_social')}}">

                @error('razon_social')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>RFC</label>
                <input type="text" class="form-control" id="rfc" name='rfc'
                    placeholder="Ingrese el RFC" minlength="5" maxlength="255"
                    value="{{old('rfc')}}">

                @error('rfc')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Años de Operación</label>
                <input type="text" class="form-control" id="anios_operacion" name='anios_operacion'
                    placeholder="Ingrese los años de operación" 
                    value="{{old('anios_operacion')}}">

                @error('anios_operacion')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Número de Sucursales</label>
                <input type="text" class="form-control" id="num_sucursales" name='num_sucursales'
                    placeholder="Ingrese el número de sucursales" 
                    value="{{old('num_sucursales')}}">

                @error('num_sucursales')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <!-- AQUÍ VA EL CHECKBOX DE MARCA_REGISTRADA-->
            <label for="">Marca Registrada</label>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="">Sí</label>
                    <input class="form-check-input ml-2" type="radio" name='marca_registrada' 
                    id="marca_registrada" value="1" checked>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label" for="">No</label>
                    <input class="form-check-input ml-2" type="radio" name='marca_registrada' 
                    id="marca_registrada" value="0">
                </div>

                @error('marca_registrada')
                <span class="text-danger">
                    <span>*{{$message}}</span>
                </span>                    
                @enderror
            
            </div>            
            

            <div class="form-group">
                <label>Costo de Marca</label>
                <input type="number" step="0.01" class="form-control" id="costo_marca" name='costo_marca'
                    placeholder="Ingrese el costo de su marca" 
                    value="{{old('costo_marca')}}">

                @error('costo_marca')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Subir logotipo</label>
                <input type="file" class="form-control-file" id="logotipo" name='logotipo' value="{{old('logotipo')}}">

                @error('logotipo')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Tipo de Restaurante</label>
                <input type="text" class="form-control" id="tipo_restaurante" name='tipo_restaurante'
                    placeholder="Ingrese el tipo de restaurante" minlength="5" maxlength="255"
                    value="{{old('tipo_restaurante')}}">

                @error('tipo_restaurante')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Número de contacto</label>
                <input type="text" class="form-control" id="numero_contacto_1" name='numero_contacto_1'
                    placeholder="Ingrese el número de contacto" 
                    value="{{old('numero_contacto_1')}}">

                @error('numero_contacto_1')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Número de contacto secundario</label>
                <input type="text" class="form-control" id="numero_contacto_2" name='numero_contacto_2'
                    placeholder="Ingrese el número de contacto secundario" 
                    value="{{old('numero_contacto_2')}}">

                @error('numero_contacto_2')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Correo electrónico de contacto</label>
                <input type="text" class="form-control" id="email_1" name='email_1'
                    placeholder="Ingrese el correo electrónico de contacto" minlength="5" maxlength="255"
                    value="{{old('email_1')}}">

                @error('email_1')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Correo electrónico de contacto secundario</label>
                <input type="text" class="form-control" id="email_2" name='email_2'
                    placeholder="Ingrese el correo electrónico de contacto secundario" minlength="5" maxlength="255"
                    value="{{old('email_2')}}">

                @error('email_2')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Sitio Web</label>
                <input type="text" class="form-control" id="website" name='website'
                    placeholder="Ingrese el URL de su Sitio Web" minlength="5" maxlength="255"
                    value="{{old('website')}}">

                @error('website')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Facebook</label>
                <input type="text" class="form-control" id="facebook" name='facebook'
                    placeholder="Ingrese el URL de su página de Facebook" minlength="5" maxlength="255"
                    value="{{old('facebook')}}">

                @error('facebook')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Instagram</label>
                <input type="text" class="form-control" id="instagram" name='instagram'
                    placeholder="Ingrese el URL de su página de Instagram" minlength="5" maxlength="255"
                    value="{{old('instagram')}}">

                @error('instagram')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>



            <div class="form-group">
                <label>Descripción</label>
                <input type="text" class="form-control" id="descripcion" name='descripcion'
                    placeholder="Ingrese la descripción de la franquicia" minlength="5" 
                    value="{{old('descripcion')}}">

                @error('descripcion')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Historia</label>
                <input type="text" class="form-control" id="historia" name='historia'
                    placeholder="Ingrese breve historia sobre la franquicia" minlength="5" 
                    value="{{old('historia')}}">

                @error('historia')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Misión</label>
                <input type="text" class="form-control" id="mision" name='mision'
                    placeholder="Ingrese la misión de su franquicia" minlength="5" 
                    value="{{old('mision')}}">

                @error('mision')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Visión</label>
                <input type="text" class="form-control" id="vision" name='vision'
                    placeholder="Ingrese la visión de su franquicia" minlength="5" 
                    value="{{old('vision')}}">

                @error('vision')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Estándares de Calidad</label>
                <input type="text" class="form-control" id="estandar_calidad" name='estandar_calidad'
                    placeholder="Ingrese una descripción sobre los estándares de calidad" minlength="5"  
                    value="{{old('estandar_calidad')}}">

                @error('estandar_calidad')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Mercado Meta</label>
                <input type="text" class="form-control" id="mercado_meta" name='mercado_meta'
                    placeholder="Describa cuál será su mercado meta" minlength="5"  
                    value="{{old('mercado_meta')}}">

                @error('mercado_meta')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Menú</label>
                <input type="file" class="form-control-file" id="menu" name='menu'>

                @error('menu')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label for="">Información Financiera</label>
                <input type="file" class="form-control-file" id="inf_financiera" name='inf_financiera'>

                @error('inf_financiera')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Soporte</label>
                <input type="text" class="form-control" id="soporte" name='soporte'
                    placeholder="Describa el soporte que ofrece al adquirir una de sus franquicias" minlength="5"  
                    value="{{old('soporte')}}">

                @error('soporte')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Asesoramiento en Ubicación</label>
                <input type="text" class="form-control" id="asesoramiento_ubi" name='asesoramiento_ubi'
                    placeholder="Describa lo que ofrece sobre asesoramiento en ubicación" minlength="5"  
                    value="{{old('asesoramiento_ubi')}}">

                @error('asesoramiento_ubi')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Diseño de Tienda y Construcción</label>
                <input type="text" class="form-control" id="diseno_tienda" name='diseno_tienda'
                    placeholder="Describa lo que ofrece sobre diseño en tienda y construcción" minlength="5"  
                    value="{{old('diseno_tienda')}}">
 
                @error('diseno_tienda')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Marketing y Publicidad</label>
                <input type="text" class="form-control" id="marketing" name='marketing'
                    placeholder="Describa lo que ofrece sobre marketing y publicidad" minlength="5"  
                    value="{{old('marketing')}}">

                @error('marketing')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Entrenamiento</label>
                <input type="text" class="form-control" id="entrenamiento" name='entrenamiento'
                    placeholder="Describa lo que ofrece sobre entrenamiento" minlength="5"  
                    value="{{old('entrenamiento')}}">

                @error('entrenamiento')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Preparación de Alimentos</label>
                <input type="text" class="form-control" id="preparacion" name='preparacion'
                    placeholder="Describa lo que ofrece sobre preparación de alimentos" minlength="5"  
                    value="{{old('preparacion')}}">

                @error('preparacion')
                <span class="atext-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Servicio al Cliente</label>
                <input type="text" class="form-control" id="servicio_cliente" name='servicio_cliente'
                    placeholder="Describa lo que ofrece sobre servicio al cliente" minlength="5"  
                    value="{{old('servicio_cliente')}}">

                @error('servicio_cliente')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>

            <div class="form-group">
                <label>Gestión de Negocios</label>
                <input type="text" class="form-control" id="gestion" name='gestion'
                    placeholder="Describa lo que ofrece sobre gestión de negocios" minlength="5"  
                    value="{{old('gestion')}}">

                @error('gestion')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>   
            
            <div class="form-group">
                <label>Tecnología y Sistemas</label>
                <input type="text" class="form-control" id="tecnologia" name='tecnologia'
                    placeholder="Describa lo que ofrece sobre tecnología y sistemas" minlength="5"  
                    value="{{old('tecnologia')}}">

                @error('tecnologia')
                <span class="text-danger">
                    <span>* {{$message}}</span>
                </span>
                @enderror

            </div>   

            <input type="submit" value="Agregar franquicia" class="btn btn-primary">
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