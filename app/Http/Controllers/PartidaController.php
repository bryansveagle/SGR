<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use App\Models\Requisicione;
use Illuminate\Http\Request;

/**
 * Class PartidaController
 * @package App\Http\Controllers
 */
class PartidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidas = Partida::paginate();

        return view('partida.index', compact('partidas'))
            ->with('i', (request()->input('page', 1) - 1) * $partidas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partida = new Partida();
        return view('partida.create', compact('partida'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Partida::$rules);

        $partida = Partida::create($request->all());

        return redirect()->route('partidas.index')
            ->with('success', 'Partida created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partida = Partida::find($id);

        return view('partida.show', compact('partida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partida = Partida::find($id);

        return view('partida.edit', compact('partida'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Partida $partida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partida $partida)
    {
        request()->validate(Partida::$rules);

        $partida->update($request->all());

        return redirect()->route('partidas.index')
            ->with('success', 'Partida updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $partida = Partida::find($id)->delete();

        return redirect()->route('partidas.index')
            ->with('success', 'Partida deleted successfully');
    }
}
