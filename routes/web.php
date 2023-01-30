<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [App\Http\Controllers\ClienteController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/Interes', [App\Http\Controllers\InteresController::class, 'index'])->middleware(['auth', 'verified'])->name('interes');
Route::get('/Capital', [App\Http\Controllers\CapitalController::class, 'index'])->middleware(['auth', 'verified'])->name('capital');
Route::get('/Historial', [App\Http\Controllers\HistorialController::class, 'index'])->middleware(['auth', 'verified'])->name('historial');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(array('prefix' => 'user'), function () {

    Route::get('configuracion', array(
        'uses' => 'App\Http\Controllers\UsuarioController@config',
        'as' => 'user.config'
    ));
});

Route::group(array('prefix' => 'cliente'), function () {

    Route::get('add', array(
        'uses' => 'App\Http\Controllers\ClienteController@add',
        'as' => 'cliente.add'
    ));

    Route::post('save', array(
        'uses' => 'App\Http\Controllers\ClienteController@save',
        'as' => 'cliente.save'
    ));

    Route::get('delete/{id}', array(
        'uses' => 'App\Http\Controllers\ClienteController@delete',
        'as' => 'cliente.delete'
    ));

    Route::get('editar/{id}', array(
        'uses' => 'App\Http\Controllers\ClienteController@edit',
        'as' => 'cliente.edit'
    ));

    Route::post('update', array(
        'uses' => 'App\Http\Controllers\ClienteController@update',
        'as' => 'cliente.update'
    ));

    Route::get('puntual', array(
        'uses' => 'App\Http\Controllers\ClienteController@puntual',
        'as' => 'cliente.puntual'
    ));

    Route::get('multired', array(
        'uses' => 'App\Http\Controllers\ClienteController@multired',
        'as' => 'cliente.multired'
    ));
    Route::get('deuda_alta', array(
        'uses' => 'App\Http\Controllers\ClienteController@deuda_alta',
        'as' => 'cliente.deuda_alta'
    ));
    Route::get('moroso', array(
        'uses' => 'App\Http\Controllers\ClienteController@moroso',
        'as' => 'cliente.moroso'
    ));

    Route::get('vista_pdf/{id}', array(
        'uses' => 'App\Http\Controllers\ClienteController@vista_pdf',
        'as' => 'cliente.vista_pdf'
    ));

    Route::get('download_pdf/{id}', array(
        'uses' => 'App\Http\Controllers\ClienteController@download_pdf',
        'as' => 'cliente.download_pdf'
    ));
});

Route::group(array('prefix' => 'interes'), function () {

    Route::get('add/{id}', array(
        'uses' => 'App\Http\Controllers\InteresController@add',
        'as' => 'interes.add'
    ));

    Route::post('save', array(
        'uses' => 'App\Http\Controllers\InteresController@save',
        'as' => 'interes.save'
    ));

    Route::get('delete/{id}', array(
        'uses' => 'App\Http\Controllers\InteresController@delete',
        'as' => 'interes.delete'
    ));
});

Route::group(array('prefix' => 'capital'), function () {

    Route::get('add/{id}', array(
        'uses' => 'App\Http\Controllers\CapitalController@add',
        'as' => 'capital.add'
    ));

    Route::post('save', array(
        'uses' => 'App\Http\Controllers\CapitalController@save',
        'as' => 'capital.save'
    ));

    Route::get('delete/{id}', array(
        'uses' => 'App\Http\Controllers\CapitalController@delete',
        'as' => 'capital.delete'
    ));
});

Route::group(array('prefix' => 'historial'), function () {

    Route::get('delete/{id}', array(
        'uses' => 'App\Http\Controllers\HistorialController@delete',
        'as' => 'historial.delete'
    ));
});

require __DIR__ . '/auth.php';
