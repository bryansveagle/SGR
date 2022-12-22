@extends('layouts.app')

@section('template_title')
    {{ $requisicione->name ?? 'Show Requisicione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Requisicione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('requisiciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Partidas Id:</strong>
                            {{ $requisicione->partidas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $requisicione->users_id }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $requisicione->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Urgencia:</strong>
                            {{ $requisicione->urgencia }}
                        </div>
                        <div class="form-group">
                            <strong>Fechacreacion:</strong>
                            {{ $requisicione->fechaCreacion }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $requisicione->status }}
                        </div>
                        <div class="form-group">
                            <strong>Fecharechazo:</strong>
                            {{ $requisicione->fechaRechazo }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $requisicione->comentarios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
