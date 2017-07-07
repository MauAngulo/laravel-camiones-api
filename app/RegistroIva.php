<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroIva extends Model
{
    //
	protected $table = 'registros_iva';

	protected $primaryKey = "id";

	public $timestamps = false;

	protected $fillable = [
		'fecha_registro',
	];

    public function gastos() {
    	return $this->hasMany('App\Gasto');
    }
}
