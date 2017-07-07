<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    //
    protected $table = 'camiones';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
    	'patente',
    	'anno',
    	'marca',
    ];

    public function gastos() {
    	return $this->belongsToMany('App\Gasto', 'camiones_gastos', 'id', 'id_camiones');
    }
}

