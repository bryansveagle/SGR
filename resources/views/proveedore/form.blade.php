<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('proveedor') }}
            {{ Form::text('proveedor', $proveedore->proveedor, ['class' => 'form-control' . ($errors->has('proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor']) }}
            {!! $errors->first('proveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('razonSocial') }}
            {{ Form::text('razonSocial', $proveedore->razonSocial, ['class' => 'form-control' . ($errors->has('razonSocial') ? ' is-invalid' : ''), 'placeholder' => 'Razonsocial']) }}
            {!! $errors->first('razonSocial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('condicionesPago') }}
            {{ Form::text('condicionesPago', $proveedore->condicionesPago, ['class' => 'form-control' . ($errors->has('condicionesPago') ? ' is-invalid' : ''), 'placeholder' => 'Condicionespago']) }}
            {!! $errors->first('condicionesPago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('moneda') }}
            {{ Form::text('moneda', $proveedore->moneda, ['class' => 'form-control' . ($errors->has('moneda') ? ' is-invalid' : ''), 'placeholder' => 'Moneda']) }}
            {!! $errors->first('moneda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaAlta') }}
            {{ Form::text('fechaAlta', $proveedore->fechaAlta, ['class' => 'form-control' . ($errors->has('fechaAlta') ? ' is-invalid' : ''), 'placeholder' => 'Fechaalta']) }}
            {!! $errors->first('fechaAlta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaBaja') }}
            {{ Form::text('fechaBaja', $proveedore->fechaBaja, ['class' => 'form-control' . ($errors->has('fechaBaja') ? ' is-invalid' : ''), 'placeholder' => 'Fechabaja']) }}
            {!! $errors->first('fechaBaja', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>