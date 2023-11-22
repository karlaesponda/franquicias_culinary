<?php

namespace App\Http\Controllers;

use App\Models\Franquicia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\FranquiciaRequest;

class FranquiciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:franquicias.index')->only('index');
        $this->middleware('can:franquicias.create')->only('create', 'store');
        $this->middleware('can:franquicias.edit')->only('edit', 'update');
        $this->middleware('can:franquicias.destroy')->only('destroy');
       
    }   

    public function index()
    {
        // Utiliza el método authorize para verificar el permiso
        $this->authorize('viewAll', Auth::user());
    
        // Si llegamos aquí, el usuario tiene el permiso necesario
        $user = Auth::user();
        $franquicias = Franquicia::where('user_id', $user->id)
                        ->orderBy('id', 'desc')
                        ->simplePaginate(10);
    
        return view('admin.franquicias.index', compact('franquicias'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.franquicias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FranquiciaRequest $request)
    {
        //
        $request->merge([
            'user_id'=> Auth::user()->id,
        ]);
        //Guardo la solicitud en una variables
        $franquicia = $request->all();
        //Validar si hay un archivo en el request
        if($request->hasFile('logotipo')){
            $franquicia['logotipo'] = $request->file('logotipo')->store('franquicias');
        }

        // Validar si hay un archivo de menú en el request
        if ($request->hasFile('menu')) {
            $franquicia['menu'] = $request->file('menu')->store('franquicias');
        }

        // Validar si hay un archivo de información financiera en el request
        if ($request->hasFile('inf_financiera')) {
            $franquicia['inf_financiera'] = $request->file('inf_financiera')->store('franquicias');
        }


        Franquicia::create($franquicia);

        return redirect()->action([FranquiciaController::class, 'index'])
                                ->with('success-create', 'Franquicia creada con éxito');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Busca la franquicia por su ID
        $franquicia = Franquicia::findOrFail($id);
    
        // Ahora tienes la franquicia cargada y puedes acceder a sus propiedades
        $comments = $franquicia->comments()->simplePaginate(5);
    
        // Devuelve la vista con los datos de la franquicia
        return view('subscriber.franquicias.show', compact('franquicia', 'comments'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Franquicia $franquicia)
    {
        $this->authorize('view', $franquicia);
        //
        return view('admin.franquicias.edit', compact('franquicia'));
   

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FranquiciaRequest $request, Franquicia $franquicia)
    {

        $this->authorize('update', $franquicia);
        
        //Sie l usuario sube una nueva imagen
        if($request->hasFile('logotipo')){
            //Eliminar logotipo anterior
            File::delete(public_path('storage/' . $franquicia->logotipo));
            //Asigna el nuevo logotipo
            $franquicia['logotipo'] = $request->file('logotipo')->store('franquicias');
        }

        //Sie l usuario sube una nuevo meno
        if($request->hasFile('menu')){
            //Eliminar menu anterior
            File::delete(public_path('storage/' . $franquicia->menu));
            //Asigna el nuevo menu
            $franquicia['menu'] = $request->file('menu')->store('franquicias');
        }

        //Sie l usuario sube un nuevo archivo de inf_financiera
        if($request->hasFile('inf_financiera')){
            //Eliminar inf_financiera anterior
            File::delete(public_path('storage/' . $franquicia->inf_financiera));
            //Asigna el nuevo inf_financiera
            $franquicia['inf_financiera'] = $request->file('inf_financiera')->store('franquicias');
        }

        //Actualiza los daots
        $franquicia->update([
            'title' => $request->title,
            'nombre_restaurante' => $request-> nombre_restaurante,
            'slug' => $request-> slug,
            'razon_social' => $request-> razon_social,
            'rfc' => $request-> rfc,
            'anios_operacion' => $request-> anios_operacion,
            'num_sucursales' => $request-> num_sucursales,
            'marca_registrada' => $request-> marca_registrada,
            'costo_marca' => $request-> costo_marca,
            'tipo_restaurante' => $request-> tipo_restaurante,
            'website' => $request-> website,
            'facebook' => $request-> facebook,
            'instagram' => $request-> instagram,
            'descripcion' => $request-> descripcion,
            'historia' => $request-> historia,
            'mision' => $request-> mision,
            'vision' => $request-> vision,
            'estandar_calidad' => $request-> estandar_calidad,
            'mercado_meta' => $request-> mercado_meta,
            'soporte' => $request-> soporte,
            'asesoramiento_ubi' => $request-> asesoramiento_ubi,
            'diseno_tienda' => $request-> diseno_tienda,
            'marketing' => $request-> marketing,
            'entrenamiento' => $request->entrenamiento,
            'preparacion' => $request-> preparacion,
            'servicio_cliente' => $request-> servicio_cliente,
            'gestion' => $request-> gestion,
            'tecnologia' => $request-> tecnologia,
            'numero_contacto_1' => $request->numero_contacto_1,
            'numero_contacto_2' => $request->numero_contacto_2,
            'email_1' => $request->email_1,
            'email_2' => $request->email_2,

            'user_id' => Auth::user()->id,
        ]);

        return redirect()->action([FranquiciaController::class, 'index'])
                            ->with('success-update', 'Franquicia modificada con éxito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Franquicia $franquicia)
    {
        $this->authorize('delete', $franquicia);
        //Eliminar el logotipo de la carpeta
        if($franquicia->logotipo){
            File::delete(public_path('storage/' . $franquicia->logotipo));
        }
        //Eliminar el menu de la carpeta
        if($franquicia->menu){
            File::delete(public_path('storage/' . $franquicia->menu));
        }
        //Eliminar inf_financiera de la carpeta
        if($franquicia->inf_financiera){
            File::delete(public_path('storage/' . $franquicia->inf_financiera));
        }
        

        //Eliminar franquicia
        $franquicia->delete();

        return redirect()->action([FranquiciaController::class, 'index'], compact('franquicia'))
        ->with('success-delete', 'Franquicia eliminada con éxito');

    }

    public function lista()
    {
        $franquicias = Franquicia::all(); // Obtén todas las franquicias
    
        return view('subscriber.franquicias.lista', compact('franquicias'));
    }
    
    
}
