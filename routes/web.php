<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FranquiciaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//Principal
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/all',[HomeController::class, 'all'])->name('home.all');
Route::get('sobre_nosotros', [HomeController::class, 'sobre_nosotros'])->name('sobre_nosotros.index');


//Admin
Route::get('/admin', [AdminController::class,'index'])
                    ->middleware('can:admin.index')
                    ->name('admin.index');

//Rutas del admin
Route::namespace('App\Http\Controllers')->prefix('admin')->group(function () {
    //Franquicias
    Route::resource('franquicias', 'FranquiciaController')
                ->except('show')
                ->names('franquicias');
    //Comentarios
    Route::resource('comments', 'CommentController')
                ->only('index', 'destroy')
                ->names('comments');

    //Usuarios
    Route::resource('users', 'UserController')
                    ->except('create', 'store', 'show')
                    ->names('users');

    //Roles
    Route::resource('roles', 'RoleController')
                    ->except('show')
                    ->names('roles');

    Route::resource('subscriptions', 'PaymentController')
                    ->names('payments');


});

Route::get('subs', [PaymentController::class, 'checkout'])->name('subs.payment');
Route::get('success', [PaymentController::class, 'success'])->name('success');
Route::post('payment', [PaymentController::class, 'payment']);

//Ver franquicias
Route::get('franquicia/{id}', [FranquiciaController::class, 'show'])->name('franquicias.show');
Route::get('franquicias', [FranquiciaController::class, 'lista'])->name('franquicias.lista');

//Guardar comentarios
Route::post('/comment', [CommentController::class, 'store']) ->name('comments.store');
Auth::routes();


//Route::get('/franquicias', [FranquiciaController::class, 'index'])->name('franquicias.index');
//Route::get('/franquicias/create', [FranquiciaController::class, 'create'])->name('franquicias.create');
//Route::post('/franquicias', [FranquiciaController::class, 'store'])->name('franquicias.store');
//Route::get('/franquicias/{franquicia}/edit', [FranquiciaController::class, 'edit'])->name('franquicias.edit');
//Route::put('/franquicias/{franquicia}', [FranquiciaController::class, 'update'])->name('franquicias.update');
//Route::delete('/franquicias/{franquicia}', [FranquiciaController::class, 'destroy'])->name('franquicias.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
