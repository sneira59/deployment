<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\templateController;

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
Route::resource('despliegues','App\Http\Controllers\DespliegueController');
Route::delete('/despliegues/{despliegue}/delete',[App\Http\Controllers\DespliegueController::class,'destroy'])->name('despliegues.delete');



//ambientes
Route::resource('ambientes','App\Http\Controllers\AmbienteController');
Route::delete('/ambientes/{ambiente}/delete',[App\Http\Controllers\AmbienteController::class,'destroy'])->name('ambientes.delete');

//desarrolladores
Route::resource('desarrolladores','App\Http\Controllers\DesarrolladorController');
Route::delete('/desarrolladores/{desarolladore}/delete',[App\Http\Controllers\DesarrolladorController::class,'destroy'])->name('desarrolladores.delete');

//devops
Route::resource('devops','App\Http\Controllers\DevopsController');
Route::delete('/devops/{devop}/delete',[App\Http\Controllers\DevopsController::class,'destroy'])->name('devops.delete');

//Proyecto
Route::resource('proyectos','App\Http\Controllers\ProyectoController');
Route::delete('/proyectos/{proyecto}/delete',[App\Http\Controllers\ProyectoController::class,'destroy'])->name('proyectos.delete');

//Rama
Route::resource('ramas','App\Http\Controllers\RamaController');
Route::delete('/ramas/{rama}/delete',[App\Http\Controllers\RamaController::class,'destroy'])->name('ramas.delete');

//servidor
Route::resource('servidores','App\Http\Controllers\ServidorController');
Route::delete('/servidores/{servidore}/delete',[App\Http\Controllers\ServidorController::class,'destroy'])->name('servidores.delete');




//index
Route::resource('home','App\Http\Controllers\HomeController');

//INFORME 
Route::resource('pdf', 'App\Http\Controllers\PDFController');
Route::get('apdf', 'App\Http\Controllers\PDFController@informe')->name('pdf.informe');


Route::get('excel', 'App\Http\Controllers\ExcelController@DespExport')->name('excel.informe');

