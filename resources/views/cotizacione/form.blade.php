<div class="box box-info padding-1">
    <div class="box-body">
        

        <div class="form-group">
            {{ Form::label('Proveedores') }}
            {{ Form::select('proveedores_id', $proveedores, $cotizacione->proveedores_id, ['class' => 'form-control' . ($errors->has('proveedores_id') ? ' is-invalid' : ''), 'placeholder' => 'Proveedores Id']) }}
            {!! $errors->first('proveedores_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Concepto de cotizacion') }}
            {{ Form::select('requisiciones_id', $requisicione, $cotizacione->requisiciones_id, ['class' => 'form-control' . ($errors->has('requisiciones_id') ? ' is-invalid' : ''), 'placeholder' => 'Requisiciones Id']) }}
            {!! $errors->first('requisiciones_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto') }}
            {{ Form::select('producto',$partidas, $cotizacione->producto, ['class' => 'form-control' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('fechaCreacion') }}
            {{ Form::date('fechaCreacion', $cotizacione->fechaCreacion, ['class' => 'form-control' . ($errors->has('fechaCreacion') ? ' is-invalid' : ''), 'placeholder' => 'Fechacreacion']) }}
            {!! $errors->first('fechaCreacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('comentarios') }}
            {{ Form::text('comentarios', $cotizacione->comentarios, ['class' => 'form-control' . ($errors->has('comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('cotizacion1') }}
            {{ Form::text('cotizacion1', $cotizacione->cotizacion1, ['class' => 'form-control' . ($errors->has('cotizacion1') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('cotizacion1', '<div class="invalid-feedback">:message</div>') !!}
        </div>        
       
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>