<!-- MODAL DEL FORM FORM PROVEEDORE -->
<form method="POST" action="{{ route('proveedores.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
<div class="modal fade" id="modalCreateProveedores" tabindex="-1" aria-labelledby="modalCreateProveedores" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Añadir</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <div class="container-fluid">
            <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('proveedor') }}
            {{ Form::text('proveedor',  $proveedor->proveedor, ['class' => 'form-control' . ($errors->has('proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor']) }}
            {!! $errors->first('proveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('razonSocial') }}
            {{ Form::text('razonSocial',  $proveedor->razonSocial, ['class' => 'form-control' . ($errors->has('razonSocial') ? ' is-invalid' : ''), 'placeholder' => 'Razonsocial']) }}
            {!! $errors->first('razonSocial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('condicionesPago') }}
            {{ Form::text('condicionesPago', $proveedor->condicionesPago, ['class' => 'form-control' . ($errors->has('condicionesPago') ? ' is-invalid' : ''), 'placeholder' => 'Condicionespago']) }}
            {!! $errors->first('condicionesPago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('moneda') }}
            {{ Form::select('urgencia',array('Dolar' => array('Dolar' => 'Dolar'),'Euros' => array('Euros' => 'Euros'),'Pesos' => array('Pesos' => 'Pesos'),), $proveedor->moneda, ['class' => 'form-control' . ($errors->has('moneda') ? ' is-invalid' : ''), 'placeholder' => 'Moneda']) }}
            {!! $errors->first('moneda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!--<div class="form-group">
            {{ Form::label('fechaAlta') }}
            {{ Form::text('fechaAlta', $proveedor->fechaAlta, ['class' => 'form-control' . ($errors->has('fechaAlta') ? ' is-invalid' : ''), 'placeholder' => 'Fechaalta']) }}
            {!! $errors->first('fechaAlta', '<div class="invalid-feedback">:message</div>') !!}
        </div>-->
        <!--<div class="form-group">
            {{ Form::label('fechaBaja') }}
            {{ Form::text('fechaBaja', $proveedor->fechaBaja, ['class' => 'form-control' . ($errors->has('fechaBaja') ? ' is-invalid' : ''), 'placeholder' => 'Fechabaja']) }}
            {!! $errors->first('fechaBaja', '<div class="invalid-feedback">:message</div>') !!}
        </div>-->

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
<!-- FIN MODAL DEL FORM PROVEEDORE -->



