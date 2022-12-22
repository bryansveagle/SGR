<!-- MODAL VER PROVEEDORE -->

<div class="modal fade" id="a{{ $proveedore->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                            <strong>Partidas Id:</strong>
                            {{ $proveedore->id }}
                        </div>

                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $proveedore->proveedor }}
                        </div>
                        <div class="form-group">
                            <strong>Razon social:</strong>
                            {{ $proveedore->razonSocial }}
                        </div>
                        <div class="form-group">
                            <strong>Condiciones de pago:</strong>
                            {{ $proveedore->condicionesPago }}
                        </div>
                        <div class="form-group">
                            <strong>Moneda:</strong>
                            {{ $proveedore->moneda }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de alta:</strong>
                            {{ $proveedore->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de baja:</strong>
                            {{ $proveedore->fechaBaja }}
                        </div>
                        <div class="form-group">
                            <strong>Se actualizo:</strong>
                            {{ $proveedore->updated_at }}
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- modal edit -->

<div class="modal fade" id="modalPorveedoresEdit{{ $proveedore->id }}" tabindex="-1" aria-labelledby="modalShowRequisiciones" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <div class="container-fluid">
                      <div class="form-group">
                      <div class="card-body">
                      <form method="POST" action="{{ route('proveedores.update', $proveedore->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
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
            {{ Form::select('moneda',array('Dolar' => array('Dolar' => 'Dolar'),'Euros' => array('Euros' => 'Euros'),'Pesos' => array('Pesos' => 'Pesos'),),
                 $proveedore->moneda, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'moneda']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- <div class="form-group">
            {{ Form::label('fechaAlta') }}
            {{ Form::text('fechaAlta', $proveedore->created_at, ['class' => 'form-control' . ($errors->has('fechaAlta') ? ' is-invalid' : ''), 'placeholder' => 'Fechaalta']) }}
            {!! $errors->first('fechaAlta', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <div class="form-group">
            {{ Form::label('fechaBaja') }}
            {{ Form::date('fechaBaja', $proveedore->fechaBaja, ['class' => 'form-control' . ($errors->has('fechaBaja') ? ' is-invalid' : ''), 'placeholder' => 'Fechabaja']) }}
            {!! $errors->first('fechaBaja', '<div class="invalid-feedback">:message</div>') !!}
        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDIT FIN -->