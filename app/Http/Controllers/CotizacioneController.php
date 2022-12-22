<?php

namespace App\Http\Controllers;

use App\Models\Cotizacione;
use App\Models\Proveedore;
use App\Models\Requisicione;
use App\Models\Partida;


use Illuminate\Http\Request;

/**
 * Class CotizacioneController
 * @package App\Http\Controllers
 */
class CotizacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizaciones = Cotizacione::paginate();
        $coti = new Cotizacione();
        $proveedor = Proveedore::pluck('proveedor','id');
        $requisicione = Requisicione::pluck('concepto','id');
        $partidas = Partida::pluck('producto','id');

        return view('cotizacione.index', compact('cotizaciones','cotizaciones','coti','requisicione','proveedor','partidas'))
            ->with('i', (request()->input('page', 1) - 1) * $cotizaciones->perPage());
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cotizaciones = new Cotizacione();
        $proveedo = Proveedore::pluck('proveedor','id');
        $requisicione = Requisicione::pluck('concepto','id');
        $partidas = Partida::pluck('producto','id');

        return view('cotizacione.create', compact('cotizaciones','requisicione','proveedo','partidas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cotizacione::$rules);
        $cotizacione = Cotizacione::create($request->all());
        return redirect()->route('cotizaciones.edit')
            ->with('success', 'Cotizacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cotizacione = Cotizacione::find($id);
        $proveedores = Proveedore::pluck('proveedor');

        return view('cotizacione.show', compact('cotizacione','proveedores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cotizacione = Cotizacione::find($id);

        return view('cotizacione.index', compact('cotizacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cotizacione $cotizacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotizacione $cotizacione)
    {
        request()->validate(Cotizacione::$rules);

        $cotizacione->update($request->all());

        return redirect()->route('cotizaciones.index')
            ->with('success', 'Cotizacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cotizacione = Cotizacione::find($id)->delete();

        return redirect()->route('cotizaciones.index')
            ->with('success', 'Cotizacione deleted successfully');
    }
}
