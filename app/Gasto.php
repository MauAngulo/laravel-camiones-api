<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    //
    protected $table = 'gastos';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
    	'monto_gastos',
    	'desc_gastos',
    	'fecha_gastos',
    	'id_tipo_gasto',
    	'id_registros_iva',
    ];

    public function tiposDeGasto() {
    	return $this->belongsTo('App\TipoDeGasto', 'id_tipo_de_gastos');
    }

    public function registrosIva() {
    	return $this->belongsTo('App\RegistroIva', 'id_registros_iva');
    }

    public function camiones() {
    	return $this->belongsToMany('App\Camion', 'camiones_gastos', 'id', 'id_gastos');
    }

    public function choferes() {
    	return $this->belongsToMany('App\Chofer', 'choferes_gastos', 'id', 'id_gastos');
    }

    public function viajes() {
    	return $this->belongsToMany('App\Viaje', 'gastos_viajes', 'id', 'id_gastos');
    }
}
