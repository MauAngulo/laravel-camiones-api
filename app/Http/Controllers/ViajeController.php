<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//uso de modelos
use App\Viaje;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        // Retorna la lista de viajes
        return Viaje::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // El formulario no requiere de datos externos a la tabla
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Crea un viaje
        $viaje = Viaje::create($request->all());
        if (!isset($viaje)) {
            # code...
            $error = [
                'errors' => true,
                'msg' => 'Error al registrar el viaje.',
            ];
            $viaje = \Response::json($error, 404);
        }
        return $viaje;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
        return Viaje::where('bruto', '=', $id);
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
        return Viaje::find($id);
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
        $viaje = Viaje::find($id);
        $viaje->fill($request->all());
        $viajeReturn = $viaje->save();
        if (isset($viaje)) {
            # code...
            $viaje = \Response::json($viajeReturn, 200);
        } else {
            $viaje = \Response::json(['error' => 'No se pudo actualizar los datos del viaje.'], 404);
        }
        return $viaje;

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
        $viaje = Viaje::find($id);

        if ($viaje = delete()) {
            # code...
            $viaje = \Response::json(['delete' => true, 'id' => $id], 200);
        } else {
            $viaje = \Response::json(['error' => 'No se pudo eliminar el viaje'], 403);
        }
        return $viaje;
    }
}
