@extends('layouts.app')

@section('template_title')
    {{ $cotizacione->name ?? 'Show Cotizacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cotizacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cotizaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Proveedores Id:</strong>
                            {{ $cotizacione->proveedores_id }}
                        </div>
                        <div class="form-group">
                            <strong>Requisiciones Id:</strong>
                            {{ $cotizacione->requisiciones_id }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $cotizacione->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Urgencia:</strong>
                            {{ $cotizacione->urgencia }}
                        </div>
                        <div class="form-group">
                            <strong>Fechacreacion:</strong>
                            {{ $cotizacione->fechaCreacion }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $cotizacione->status }}
                        </div>
                        <div class="form-group">
                            <strong>Fecharechazo:</strong>
                            {{ $cotizacione->fechaRechazo }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $cotizacione->comentarios }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
