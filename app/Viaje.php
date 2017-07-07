<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    //
    protected $tables = 'viajes';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
    	'carga',
    	'cliente',
    	'pago',
    	'bruto',
    	'hora_llegada',
    ];

    public function gastos() {
    	return $this->belongsToMany('App\Gasto', 'gastos_viajes', 'id', 'id_viajes');
    }
}
