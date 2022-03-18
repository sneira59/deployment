<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;


class DespExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('Despliegue')
        ->select(
           'Ambiente.nomb_amb',
           'Desarollador.nomb_desa',
           'Devops.nomb_devo',
           'Layer.layer',
           'Proyecto.nomb_proy',
           'Rama.nomb_rama',
           'Servidor.numb_serv',
           'Despliegue.fecha',
           'Despliegue.IdDesp'
        )
        ->join('Ambiente','Despliegue.FK_AMB','=','Ambiente.idAmbiente')
        ->join('Desarollador','Despliegue.FK_DESA','=','Desarollador.idDesarollador')
        ->join('Devops','Despliegue.FK_DEVO','=','Devops.idDevops')
        ->join('Layer','Despliegue.FK_LAYE','=','Layer.idLayer')
        ->join('Proyecto','Despliegue.FK_PRO','=','Proyecto.idProyecto')
        ->join('Rama','Despliegue.FK_RAMA','=','Rama.idRama')
        ->join('Servidor','Despliegue.FK_SERV','=','Servidor.idServidor')
        ->distinct()
        ->get();
 
    }
    public function headings(): array
    {
        return[

            'Ambiente',
            'Desarollador',
            'Devops',
            'Capa',
            'Proyecto',
            'Rama',
            'Servidor',
            'Fecha',
            'Id_Despliegue',

        ];

    }
}
