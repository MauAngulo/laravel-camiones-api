<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeGasto extends Model
{
    //
	protected $table = 'tipos_de_gasto';

	protected $primaryKey = 'id';

	public $timestamp = false;

	protected $fillable = [
		'tipo_de_gasto',
	];

    public function gastos() {
    	return $this->hasMany('App\Gasto');
    }
}
