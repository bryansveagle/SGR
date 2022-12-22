@extends('layouts.app')

@section('template_title')
    {{ $partida->name ?? 'Show Partida' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Partida</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('partidas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $partida->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $partida->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $partida->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Cotizacion1:</strong>
                            {{ $partida->cotizacion1 }}
                        </div>
                        <div class="form-group">
                            <strong>Cotizacion2:</strong>
                            {{ $partida->cotizacion2 }}
                        </div>
                        <div class="form-group">
                            <strong>Cotizacion3:</strong>
                            {{ $partida->cotizacion3 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
