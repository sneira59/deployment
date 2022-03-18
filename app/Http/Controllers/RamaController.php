<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rama;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RamaStoreRequest;
use App\Http\Requests\RamaEditarRequest;


class RamaController extends Controller
{
    public function index(){
        $rama = Rama::all();

   return view('rama.rama')->with('rama',$rama);
}

public function create(){

    return view('rama.nuevoRama');

}

public function store(RamaStoreRequest $request){

    $rama = new Rama();
    $rama->nomb_rama = $request->input('r');
    $rama->save();
    return redirect('ramas')->with('mensaje', 'Rama registrada correctamente');

}

public function edit($id){
    $rama = Rama::find($id);
    return view ('rama.editarRama')->with('rama', $rama);
}

public function update(RamaEditarRequest $request , $id){
    $rama = Rama::find($id);
    $rama->nomb_rama = $request->input('r');
    $rama->save();
    return redirect('ramas')->with("mensaje","Rama actualizada correctamente");

}
public function destroy($id){
    $rama = Rama::find($id);
    $rama->delete();
    return redirect('ramas')->with('mensaje','Rama eliminada correctamente');
}


}

