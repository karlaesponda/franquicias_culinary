<?php

namespace App\Http\Controllers;

use App\Models\Franquicia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        #Obtener las franquicias publicos
        $franquicias = Franquicia::where('marca_registrada', '1')
                        ->orderBy('id', 'desc')
                        ->simplePaginate(10);
                        
        return view('home', compact('franquicias'));
    }

    //Todas las franquicias
    public function all(){
        $franquicias = Franquicia::where('marca_registrada', '1')
            ->simplePaginate(20);

        return view('home', compact('franquicias'));
    }

    public function sobre_nosotros(){
        return view('sobre_nosotros');
    }
}
