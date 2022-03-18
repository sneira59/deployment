<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Despliegue extends Model
{
    protected $table = "Despliegue";
    protected $primaryKey = "IdDesp";
    public $timestamps = false;
    
    protected $guarded = [];

    public function ambiente(){
        return $this->belongsTo('App\Models\Ambiente' , 'idAmbiente','id');

    }
   
}
