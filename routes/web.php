<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\templateController;
use Auth\VerificationController;
use Illuminate\Support\Facades\Auth;

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

//despliegues
Route::resource('despliegues','App\Http\Controllers\DespliegueController')->middleware('auth','example');
Route::delete('/despliegues/{despliegue}/delete',[App\Http\Controllers\DespliegueController::class,'destroy'])->name('despliegues.delete')->middleware('auth','example');



//ambientes
Route::resource('ambientes','App\Http\Controllers\AmbienteController')->middleware('auth')->middleware('auth','example');
Route::delete('/ambientes/{ambiente}/delete',[App\Http\Controllers\AmbienteController::class,'destroy'])->name('ambientes.delete')->middleware('auth')->middleware('auth','example');

//desarrolladores
Route::resource('desarrolladores','App\Http\Controllers\DesarrolladorController')->middleware('auth','example');
Route::delete('/desarrolladores/{desarolladore}/delete',[App\Http\Controllers\DesarrolladorController::class,'destroy'])->name('desarrolladores.delete')->middleware('auth','example');

//devops
Route::resource('devops','App\Http\Controllers\DevopsController')->middleware('auth','example');
Route::delete('/devops/{devop}/delete',[App\Http\Controllers\DevopsController::class,'destroy'])->name('devops.delete')->middleware('auth','example');

//Proyecto
Route::resource('proyectos','App\Http\Controllers\ProyectoController')->middleware('auth','example');
Route::delete('/proyectos/{proyecto}/delete',[App\Http\Controllers\ProyectoController::class,'destroy'])->name('proyectos.delete')->middleware('auth','example');

//Rama
Route::resource('ramas','App\Http\Controllers\RamaController')->middleware('auth','example');
Route::delete('/ramas/{rama}/delete',[App\Http\Controllers\RamaController::class,'destroy'])->name('ramas.delete')->middleware('auth','example');

//servidor
Route::resource('servidores','App\Http\Controllers\ServidorController')->middleware('auth','example');
Route::delete('/servidores/{servidore}/delete',[App\Http\Controllers\ServidorController::class,'destroy'])->name('servidores.delete')->middleware('auth','example');




//index
Route::resource('home','App\Http\Controllers\HomeController')->middleware('auth','example')->middleware('auth', 'is_verify_email');
//INFORME 
Route::resource('pdf', 'App\Http\Controllers\PDFController')->middleware('auth','example');
Route::POST('rango', 'App\Http\Controllers\PDFController@rango')->name('pdf.rango')->middleware('auth','example');
Route::get('apdf', 'App\Http\Controllers\PDFController@informe')->name('pdf.informe')->middleware('auth','example');


Route::get('excel', 'App\Http\Controllers\ExcelController@DespExport')->name('excel.informe')->middleware('auth','example');


//LOGIN
Route::get('login', 'App\Http\Controllers\Auth\LoginController@mostrarLogin')->name('login.index');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout.login');

//Profile
Route::get('perfil', 'App\Http\Controllers\ProfileController@mostrarperfil')->name('profile.index')->middleware('auth','example');

//REGISTRO DE USUARIOS
Route::get('register', 'App\Http\Controllers\RegistroController@create')->name('register.index');
Route::post('register', 'App\Http\Controllers\RegistroController@store')->name('register.store');
Route::get('/validate-email','App\Http\Controllers\RegistroController@validateuseremail');

//Verificación de email
Route::get('account/verify/{token}',[App\Http\Controllers\RegistroController::class, 'verifyAccount'])->name('user.verify'); 





