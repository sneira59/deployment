<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servidor;
use App\Http\Requests\ServidorStoreRequest;
use App\Http\Requests\ServidorEditarRequest;



class ServidorController extends Controller
{
    public function index(){
        $serv = Servidor::all();

   return view('servidor.servidor')->with('serv',$serv);
}
public function create(){

    return view('servidor.nuevoServidor');

}
public function store(ServidorStoreRequest $request){

    $serv = new Servidor();
    $serv->numb_serv = $request->input('s');
    $serv->save();
    return redirect('servidores')->with('mensaje', 'Servidor registrado correctamente');

}

public function edit($id){
    $serv = Servidor::find($id);
    return view ('servidor.editarServidor')->with('servidor', $serv);
}
public function update(ServidorEditarRequest $request , $id){
    $serv = Servidor::find($id);
    $serv->numb_serv = $request->input('s');
    $serv->save();
    return redirect('servidores')->with("mensaje","Servidor actualizado correctamente");

}
public function destroy($id){
    $serv = Servidor::find($id);
    $serv->delete();
    return redirect('servidores')->with('mensaje','Servidor eliminado correctamente');
}
}
