<?php

namespace App\Http\Controllers;

use App\Mesa;
use Illuminate\Http\Request;

class MesasController extends Controller
{
    public function index()
    {
        $mesas = Mesa::all();
        return view('cxj.mesa.index', compact('mesas'));   
    }


    public function create()
    {
        return view('cxj.mesa.create');   
    }


    public function show(Mesa $mesa)
    {
        return view('cxj.mesa.show', compact('mesa'));   
    }


    public function store(Request $request)
    {
        $atributes = $request->validate([
            'nombre' => 'required',
            'mail' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'participantes' => 'required',
            'mujeres' => 'required',
            'hombres' => 'required',
                            'otrxs' => 'required',
                            'propuesta_ciudad'  => 'required',
                            'propuesta_titulo' => 'required',
                            'propuesta_problema' => 'required',
                            'propuesta_solucion' => 'required',
                            'compromiso_jovenes' => 'required',
                            'compromiso_nosotros' => 'required',
                            'compromiso_donde' => 'required',
                            'compromiso_fecha'  => 'required',
                            'reflexion' => 'required',
                            'foto_grupo' => 'required',
                            'foto_mapa' => 'required',
                            'foto_anexo' => 'required'
        ]);

        
        Mesa::create($atributes);

        return redirect('/cxj/gracias');
    }
}
