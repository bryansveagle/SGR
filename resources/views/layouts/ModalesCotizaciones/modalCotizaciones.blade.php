<!-- MODAL DEL FORM  COTIZACIONES -->
<div class="modal fade" id="modalCreateCotizaciones" tabindex="-1" aria-labelledby="modalCreateProveedores" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Añadir</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">

            <div class="container-fluid">
                
            <div class="box-body">
            <form method="POST" action="{{ route('cotizaciones.store') }}"  role="form" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
            {{ Form::label('Proveedores') }}
            {{ Form::select('proveedor', $proveedor, $coti->proveedor, ['class' => 'form-control' . ($errors->has('proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar']) }}
            {!! $errors->first('proveedores_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Concepto de cotizacion') }}
            {{ Form::select('requisiciones_id', $requisicione, $coti->requisiciones_id, ['class' => 'form-control' . ($errors->has('requisiciones_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar']) }}
            {!! $errors->first('requisiciones_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto') }}
            {{ Form::select('producto',$partidas, $coti->producto, ['class' => 'form-control' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('fechaCreacion') }}
            {{ Form::date('fechaCreacion', $coti->fechaCreacion, ['class' => 'form-control' . ($errors->has('fechaCreacion') ? ' is-invalid' : ''), 'placeholder' => 'Fechacreacion']) }}
            {!! $errors->first('fechaCreacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comentarios') }}
            {{ Form::text('comentarios', $coti->comentarios, ['class' => 'form-control' . ($errors->has('comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('cotizacion1') }}
            {{ Form::text('cotizacion1', $coti->cotizacion1, ['class' => 'form-control' . ($errors->has('cotizacion1') ? ' is-invalid' : ''), 'placeholder' => 'Cotizacion 1']) }}
            {!! $errors->first('cotizacion1', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
        
        <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
        <button type="input" class="btn btn-outline-success">Save changes</button>
        </form>
      </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
<!-- FIN MODAL DEL FORM COTIZACIONES -->



