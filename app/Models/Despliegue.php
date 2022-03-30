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
    /**
     * Get the user that owns the Despliegue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
   
   
}
