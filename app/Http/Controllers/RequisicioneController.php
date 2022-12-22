<?php

namespace App\Http\Controllers;

use App\Models\Requisicione;
use App\Models\Partida;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
//use PDF;
//use Barryvdh\DomPDF\Facade as PDF;
//use Barryvdh\DomPDF\PDF;
use \PDF;

use function GuzzleHttp\Promise\exception_for;

/**
 * Class RequisicioneController
 * @package App\Http\Controllers
 */
class RequisicioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioExc='Administrador';
        $usuarioRequi=auth()->user()->id;
        $requisiciones = Requisicione::where('users_id', '=', $usuarioRequi)->simplePaginate(10);
        
        $requi = new Requisicione();
        $producto= Partida::pluck('producto','id');
        $usuario= User::pluck('name','id');

        return view('requisicione.index', compact('requisiciones','requi','producto','usuario'))
            ->with('i', (request()->input('page', 1) - 1) * $requisiciones->perPage());
    }
    

    public function pdf($id)
    {
       //$requisiciones = Requisicione::paginate();

       $requisicione = Requisicione::find($id);

       $producto= Partida::pluck('producto','id');
       $usuario= User::pluck('name','id');

       $pdf = PDF::loadView('requisicione.pdf', compact('requisicione','requi','producto','usuario'));

       return $pdf->download('Prueba.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $requi = new Requisicione();
        $partida = new Partida();

        $producto= Partida::pluck('producto','id');
        $usuario= User::pluck('id','name');


        return view('requisicione.create', compact('requi','producto','usuario','requisici','partida'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          request()->validate(Requisicione::$rules);
          $usuario= auth()->user()->aprobador;
          //$usuario= User::find('email');
          Mail::to($usuario)->send(new MessageReceived);
          $requisicione = Requisicione::create($request->all());
          $partida = Partida::create($request->all());

          return redirect()->route('requisiciones.index')->with('success', 'Requisicione created successfully.');


        //  $requisicione = new Requisicione();
        //  $requisicione->partidas_id = $request->input('partidas_id');
        //  $requisicione->users_id = $request->input('users_id');
        //  $requisicione->concepto = $request->input('concepto');
        //  $requisicione->urgencia = $request->input('urgencia');
        //  $requisicione->fechaCreacion = $request->input('fechaCreacion');
        //  $requisicione->fechaRechazo = $request->input('fechaRechazo');
        //  $requisicione->motivoRechazo = $request->input('motivoRechazo');
        //  $requisicione->status = $request->input('status');
        //  $requisicione->comentarios = $request->input('comentarios');

        //  $requisicione->save();
        //  return redirect()->route('requisiciones.index')->with('success', 'Requisicione created successfully.');



    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requi = Requisicione::find($id);

        return view('requisicione.index', compact('requi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $requisicione = Requisicione::find($id);
        return view('requisicione.index', compact('requi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Requisicione $requisicione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requisicione $requisicione)
    {
        request()->validate(Requisicione::$rules);

        $requisicione->update($request->all());

        return redirect()->route('requisiciones.index')
            ->with('success', 'Requisicione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $requisicione = Requisicione::find($id)->delete();

        return redirect()->route('requisiciones.index')
            ->with('success', 'Requisicione deleted successfully');
    }
}
