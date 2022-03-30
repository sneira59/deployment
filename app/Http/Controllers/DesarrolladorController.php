<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desarrollador;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DesaStoreRequest;
use App\Http\Requests\DesaEditarRequest;





class DesarrolladorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('example');

    }
    public function index(){
        $desa = Desarrollador::all();
        return view('desarrollador.desarrollador')->with('desa',$desa);
    }
    public function create(){
        return view("desarrollador.nuevoDesarrollador");
    }
    public function store(DesaStoreRequest $request){
         $desa = new Desarrollador();
         $desa->nomb_desa = $request->input('nd');
         $desa->save();
         return redirect('desarrolladores')->with('mensaje','Desarrollador registrado correctamente!');

    }
    public function edit($id){
        $desa = Desarrollador::find($id);
        return view('desarrollador.editarDesarrollador')->with('desarrollador', $desa);
    }
    public function update(DesaEditarRequest $request, $id){
        $desa = Desarrollador::find($id);
        $desa->nomb_desa = $request->input('nd');
        $desa->save();
        return redirect('desarrolladores')->with("mensaje", "Información modificada correctamente");

    }

    public function destroy($id){

        $desarrollador = Desarrollador::find($id);
        $desarrollador->delete();
        return redirect('desarrolladores')->with('mensaje','Desarrollador eliminado correctamente');
    }
    
}
