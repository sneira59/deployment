<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ambiente;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AmbStoreRequest;
use App\Http\Requests\AmbEditarRequest;



class AmbienteController extends Controller
{
    public function index(){

        $amb = Ambiente::all();

        return view("ambiente.ambiente")->with('amb', $amb);
    }

    public function create(){

        return view("ambiente.nuevoAmbiente");
    }
    public function store(AmbStoreRequest $request){


        $a = new Ambiente();
        $a->nomb_amb = $request->input('ambiente');
        $a->save();

        return redirect('ambientes')->with("mensaje","Ambiente registrado correctamente");
    }

    public function edit($id){

        $amb = Ambiente::find($id);

        return view('ambiente.editarAmbiente')->with('ambiente',$amb);
    }

        public function update(AmbEditarRequest $request, $id){

        $amb = Ambiente::find($id);

        $amb->nomb_amb = $request->input('ambiente');

        $amb->save();

        return redirect('ambientes')->with("mensaje", "Información modificada correctamente");



        }

        public function destroy(Ambiente $ambiente){

            $ambiente->delete();
            return redirect('ambientes')->with('mensaje','Ambiente eliminado correctamente');
        }


}


    

