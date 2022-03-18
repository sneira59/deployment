<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devops;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DevoStoreRequest;
use App\Http\Requests\DevoEditarRequest;



class DevopsController extends Controller
{
    public function index() {
        
        $devo = Devops::all();
        return view('devops.devops')->with('devo',$devo);

    }

    public function create(){
        return view('devops.nuevoDevops');
    }

    public function store(DevoStoreRequest $request){

        $devo = new Devops();
        $devo->nomb_devo = $request->input('dv'); 
        $devo->save();
        return redirect('devops')->with("mensaje","Devops registrado correctamente");

    }
    public function edit($id){
        $devo = Devops::find($id);
        return view ('devops.editarDevops')->with('devops',$devo);
    }
    public function update(DevoEditarRequest $request , $id){
        $devo = Devops::find($id);
        $devo->nomb_devo = $request->input('dv');
        $devo->save();
        return redirect('devops')->with("mensaje","Devops actualizado correctamente");

    }
    public function destroy($id){
        $devops = Devops::find($id);
        $devops->delete();
        return redirect('devops')->with('mensaje','Devops eliminado correctamente');
    }

}
