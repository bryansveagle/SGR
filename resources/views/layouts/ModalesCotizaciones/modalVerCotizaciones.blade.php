<!-- MODAL VER COTIZACIONES -->

<div class="modal fade" id="modalCotizacionesShow{{ $cotizacione->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                            <strong>Partidas Id:</strong>
                            {{ $cotizacione->id }}
                        </div>

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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- modal edit -->

<div class="modal fade" id="edit{{ $cotizacione->id }}" tabindex="-1" aria-labelledby="modalShowCotizaciones" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="edit{{ $cotizacione->id }}"> Edit</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <div class="container-fluid">
                      <div class="form-group">
                      <div class="card-body">
                      <form method="POST" action="{{ route('cotizaciones.update', $cotizacione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            <div class="form-group">
            {{ Form::label('Proveedores') }}
            {{ Form::select('proveedores_id', $proveedor, $cotizacione->proveedores_id, ['class' => 'form-control' . ($errors->has('proveedores_id') ? ' is-invalid' : ''), 'placeholder' => 'Proveedores Id']) }}
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