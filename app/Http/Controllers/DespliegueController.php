<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Despliegue;
use App\Models\Ambiente;
use App\Models\Desarrollador;
use App\Models\Devops;
use App\Models\Layer;
use App\Models\Proyecto;
use App\Models\Rama;
use App\Models\Servidor;



use Illuminate\Support\Facades\DB;
use App\Http\Requests\DespStoreRequest;

class DespliegueController extends Controller
{
   public function index()
   {
       $Desa = Despliegue::all();

       $Desp = DB::table('Ambiente')
       ->join('Despliegue','Despliegue.FK_AMB','=','Ambiente.idAmbiente')
       ->select('Ambiente.nomb_amb','Despliegue.*')
       ->get();
       
       $Desa = DB::table('Desarollador')
       ->join('Despliegue','Despliegue.FK_AMB','=','Desarollador.idDesarollador')
       ->select('Desarollador.nomb_desa','Despliegue.*')
       ->get();

       $Devo = DB::table('Devops')
       ->join('Despliegue','Despliegue.FK_DEVO','=','Devops.idDevops')
       ->select('Devops.nomb_devo','Despliegue.*')
       ->get();

       $Lay = DB::table('Layer')
       ->join('Despliegue','Despliegue.FK_LAYE','=','Layer.idLayer')
       ->select('Layer.layer','Despliegue.*')
       ->get();

       $Pro = DB::table('Proyecto')
       ->join('Despliegue','Despliegue.FK_PRO','=','Proyecto.idProyecto')
       ->select('Proyecto.nomb_proy','Despliegue.*')
       ->get();

       $Rama = DB::table('Rama')
       ->join('Despliegue','Despliegue.FK_RAMA','=','Rama.idRama')
       ->select('Rama.nomb_rama','Despliegue.*')
       ->get();

       $Serv = DB::table('Servidor')
       ->join('Despliegue','Despliegue.FK_SERV','=','Servidor.idServidor')
       ->select('Servidor.numb_serv','Despliegue.*')
       ->get();







       return view("despliegue.despliegue")->with('Desp',$Desp)
       ->with('Desa',$Desa)
       ->with('Devo',$Devo)
       ->with('Lay',$Lay)
       ->with('Pro',$Pro)
       ->with('Rama',$Rama)
       ->with('Serv',$Serv);


   }

   public function create()
   {

    $Desp = DB::table('Ambiente')
       ->select('nomb_amb','idAmbiente')
       ->get();
       
       $Desa = DB::table('Desarollador')
       ->select('nomb_desa','idDesarollador')
       ->get();

       $Devo = DB::table('Devops')
       ->select('nomb_devo','idDevops')
       ->get();

       $Lay = DB::table('Layer')
       ->select('layer','idLayer')
       ->get();

       $Pro = DB::table('Proyecto')
       ->select('nomb_proy','idProyecto')
       ->get();

       $Rama = DB::table('Rama')
       ->select('nomb_rama','idRama')
       ->get();

       $Serv = DB::table('Servidor')
       ->select('numb_serv','idServidor')
       ->get();
       

        return view('despliegue.nuevoDespliegue')->with('Desp',$Desp)
        ->with('Desa',$Desa)
        ->with('Devo',$Devo)
        ->with('Lay',$Lay)
        ->with('Pro',$Pro)
        ->with('Rama',$Rama)
        ->with('Serv',$Serv);
   }

   public function store(DespStoreRequest $request){
       

    $maxId = Despliegue::all()->max('id');
    $maxId++;

    $d = new Despliegue();
    $d->FK_AMB = $request->input('a');
    $d->FK_DESA = $request->input('d');
    $d->FK_DEVO = $request->input('dv');
    $d->FK_LAYE = $request->input('l');
    $d->FK_PRO = $request->input('p');
    $d->FK_RAMA = $request->input('r');
    $d->FK_SERV = $request->input('s');
    $d->save();

    return redirect('despliegues')->with('message', 'Despliegue registrado');





   }


}
