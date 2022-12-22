<div class="modal fade" id="#modalEditRequisiciones{{ $requisicione->id }}" tabindex="-1" aria-labelledby="#modalEditRequisiciones" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"> Show</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
                      <div class="container-fluid">
                      <div class="form-group">
                      <div class="card-body">
                        <div class="form-group">
                    <form method="POST" action="{{ route('requisiciones.update', $requisicione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @csrf
                  <div class="box box-info padding-1">
                      <div class="box-body">
                            <div class="form-group">
                                {{ Form::label('Producto') }}
                                {{ Form::select('partidas_id', $producto, $requi->partidas_id, ['class' => 'form-control' . ($errors->has('partidas_id') ? ' is-invalid' : ''), 'placeholder' => 'Partidas Id']) }}
                                {!! $errors->first('partidas_id', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('users_id') }}
                                {{ Form::select('users_id', $usuario, $requi->users_id, ['class' => 'form-control' . ($errors->has('users_id') ? ' is-invalid' : ''), 'placeholder' => 'Users Id']) }}
                                {!! $errors->first('users_id', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('concepto') }}
                                {{ Form::text('concepto', $requi->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
                                {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('urgencia') }}
                                {{ Form::select('urgencia',array('Urgente' => array('Urgente' => 'Urgente'),'No Urgente' => array('No urgente' => 'No urgente'),),
                                    $requi->urgencia, ['class' => 'form-control' . ($errors->has('urgencia') ? ' is-invalid' : ''), 'placeholder' => 'Urgencia']) }}
                                {!! $errors->first('urgencia', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('fechaCreacion') }}
                                {{ Form::date('fechaCreacion', $requi->fechaCreacion, ['class' => 'form-control' . ($errors->has('fechaCreacion') ? ' is-invalid' : ''), 'placeholder' => 'Fechacreacion']) }}
                                {!! $errors->first('fechaCreacion', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            @can('aprobador')
                            <div class="form-group">
                                {{ Form::label('status') }}
                                {{ Form::select('status',array('Aprobada' => array('Aprobada' => 'Aprobada'),'Rechazada' => array('Rechazada' => 'Rechazada'),),
                                    $requi->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
                                {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
                            </div>      
                            <div class="form-group">
                                {{ Form::label('fechaRechazo') }}
                                {{ Form::date('fechaRechazo', $requi->fechaRechazo, ['class' => 'form-control' . ($errors->has('fechaRechazo') ? ' is-invalid' : ''), 'placeholder' => 'Fecharechazo']) }}
                                {!! $errors->first('fechaRechazo', '<div class="invalid-feedback">:message</div>') !!}
                            </div>
                            @endcan
                        <div class="form-group">
                            {{ Form::label('comentarios') }}
                            {{ Form::text('comentarios', $requi->comentarios, ['class' => 'form-control' . ($errors->has('comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
                            {!! $errors->first('comentarios', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
                      </div>
                    <div class="box-footer mt20">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>