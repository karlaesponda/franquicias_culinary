<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Franquicia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    //proteger rutas
    public function __construct()
    {
        $this->middleware('can:comments.index')->only('index');
        $this->middleware('can:comments.destroy')->only('destroy');
    }

    public function index()
    {
        // Utiliza el método authorize para verificar el permiso
        $this->authorize('viewAllComments', Auth::user());
    
        // Si llegamos aquí, el usuario tiene el permiso necesario
        $comments = DB::table('comments')
                    ->join('franquicias', 'comments.franquicia_id', '=', 'franquicias.id')
                    ->join('users', 'comments.user_id', '=', 'users.id')
                    ->select('comments.id', 'comments.value', 'comments.descripcion', 'franquicias.title', 'users.name')
                    ->where('franquicias.user_id', '=', Auth::user()->id)
                    ->orderBy('franquicias.id', 'desc')
                    ->get();
    
        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        $this->authorize('create', Comment::class);
        //Verificar si en la franquicia ya existe un comentario del usuario
        $result = Comment::where('user_id', Auth::user()->id)
                            ->where('franquicia_id', $request->franquicia_id)->exists();
        //Consulta para obtener el slug y estado de la franquicia comentada
        $franquicia = Franquicia::select('slug')->find($request->franquicia_id);

        if(!$result){
            Comment::create([
                'value' => $request->value,
                'descripcion' => $request->descripcion,
                'user_id' => Auth::user()->id,
                'franquicia_id' => $request->franquicia_id,
            ]);
            return redirect()->action([FranquiciaController::class, 'show'], [$franquicia->slug]);
        }else{
            return redirect()->action([FranquiciaController::class, 'show'], [$franquicia->slug])
                             ->with('success-error', 'Solo puedes comentar una vez');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->action([FranquiciaController::class, 'index'], compact('comment'))
                ->with('success-delete', 'Comentario eliminado con éxito');
    }
}
