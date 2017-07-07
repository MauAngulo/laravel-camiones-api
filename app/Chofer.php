<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chofer extends Model
{
    //
	protected $table = 'choferes';

	protected $primaryKey = 'id';

	public $timestamps = false;

    protected $fillable = [
    	'nom_comp',
    	'numero_tel',
    ];

    public function gastos() {
    	return $this->belongsToMany('App\Gasto', 'choferes_gastos', 'id', 'id_choferes');
    }
}
