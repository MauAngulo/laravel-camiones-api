<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//uso de modelos
use App\Gasto;   
use App\TipoDeGasto;

use App\Viaje;

//uso de componentes
use Redirect; // redireccionamiento a otra ruta
use Session;    // comunicador de mensajes hacia el cliente

class GastoController extends Controller
{ 
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $gastos = Gasto::all();
        $viajes = Viaje::all();
        $data = array();
        $index = 0;
        foreach ($gastos as $gasto) {
            # code...
            $tipo_de_gasto = TipoDeGasto::find($gasto->id_tipo_de_gasto);


            $data[$index]["id"] = $gasto->id;
            $data[$index]["monto"] = $gasto->monto_gastos;
            $data[$index]["desc"] = $gasto->desc_gastos;
            $data[$index]["fecha"] = $gasto->fecha_gastos;
            $data[$index]["tipo"] = $tipo_de_gasto->tipo_de_gasto;
            $index++;
        }
        $iva_en_contra = 0;

        foreach ($viajes as $viaje) {
            # code...
            $iva_en_contra+= $viaje->pago;
            
        }
        /**tiene una fila extra con el id = 0, fuera del alcanze de la base de datos con el iva en contra de todos los viajes
        */
        $data[$index]["id"] = 0;
        $data[$index]["monto"] = $iva_en_contra;
        $data[$index]["desc"] = "Iva en contra";
        $data[$index]["fecha"] = null;
        $data[$index]["tipo"] = null;
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //entrega los tipos de gasto para crear el formulario
        return TipoDeGasto::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $gasto = Gasto::create($request->all());
        if (!isset($gasto)) {
            # code...
            $error = [
                'errors' => true,
                'msg' => 'Error al registrar el gasto.',
            ];
            $gasto = \Response::json($error, 404);
        }
        return $gasto;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // busca por descripcion de gasto o por tipo de gasto
        //revisa si busca una palabra o un número
        if (is_nan($id)) {
            $search = $id;
            $gasto = Gasto::where('desc_gastos', 'LIKE', "%{$search}%")->get();
            if (!isset($gasto)) {
                # code...
                $error = [
                    'errors' => true,
                    'msg' => 'Error al registrar el gasto.',
                ];
                $gasto = \Response::json($error, 404);
            }
        } else {
            # code...
            //$id es del tipo de gasto
            $gasto = Gasto::where('id_tipo_de_gasto', '=', $id);
            if (!isset($gasto)) {
                $error = [
                    'errors' => true,
                    'msg' => 'Error al registrar el gasto.',
                ];
                $gasto = \Response::json($error, 404);
            } 
        }
        return $gasto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        return TipoDeGasto::all();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $gasto = Gasto::find($id);
        $gasto->fill($request->all());
        $gastoReturn = $gasto->save();
        if (isset($gasto)) {
            # code...
            $gasto = \Response::json($gastoReturn, 200);
        } else {
            $gasto = \Response::json(['error' => 'No se pudo actualizar los datos del gasto.'], 404);
        }
        return $gasto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gasto = Gasto::find($id);

        if ($gasto = delete()) {
            # code...
            $gasto = \Response::json(['delete' => true, 'id' => $id], 200);
        } else {
            $gasto = \Response::json(['error' => 'No se pudo eliminar el gasto'], 403);
        }
        return $gasto;
    }
}
