@extends('layouts.app')

@section('template_title')
    {{ $proveedore->name ?? 'Show Proveedore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Proveedore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $proveedore->proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Razonsocial:</strong>
                            {{ $proveedore->razonSocial }}
                        </div>
                        <div class="form-group">
                            <strong>Condicionespago:</strong>
                            {{ $proveedore->condicionesPago }}
                        </div>
                        <div class="form-group">
                            <strong>Moneda:</strong>
                            {{ $proveedore->moneda }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaalta:</strong>
                            {{ $proveedore->fechaAlta }}
                        </div>
                        <div class="form-group">
                            <strong>Fechabaja:</strong>
                            {{ $proveedore->fechaBaja }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
