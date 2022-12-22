<div class="modal fade" id="modalShowRequisiciones{{ $requisicione->id }}" tabindex="-1" aria-labelledby="modalShowRequisiciones" aria-hidden="true">
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
                            <strong>Partidas Id:</strong>
                            {{ $requisicione->partidas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $requisicione->user->name }}
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
                            {{ $requisicione->created_at }}
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
                            <strong>Motivo del rechazo:</strong>
                            {{ $requisicione->motivoRechazo }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $requisicione->comentarios }}
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



<!-- modal edit -->

<div class="modal fade" id="a{{ $requisicione->id }}" tabindex="-1" aria-labelledby="modalShowRequisiciones" aria-hidden="true">
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
                      <form method="POST" action="{{ route('requisiciones.update', $requisicione->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
        <div class="form-group">
            {{ Form::label('Producto') }}
            {{ Form::select('partidas_id', $producto, $requisicione->partidas_id, ['class' => 'form-control' . ($errors->has('partidas_id') ? ' is-invalid' : ''), 'placeholder' => 'Partidas Id']) }}
            {!! $errors->first('partidas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('users_id') }}
            {{ Form::select('users_id', $usuario, $requisicione->users_id, ['class' => 'form-control' . ($errors->has('users_id') ? ' is-invalid' : ''), 'placeholder' => 'Users Id']) }}
            {!! $errors->first('users_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concepto', $requisicione->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('urgencia') }}
            {{ Form::select('urgencia',array('Urgente' => array('Urgente' => 'Urgente'),'No Urgente' => array('No urgente' => 'No urgente'),),
                 $requisicione->urgencia, ['class' => 'form-control' . ($errors->has('urgencia') ? ' is-invalid' : ''), 'placeholder' => 'Urgencia']) }}
            {!! $errors->first('urgencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @can('aprobador')
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::select('status',array('Aprobada' => array('Aprobada' => 'Aprobada'),'Rechazada' => array('Rechazada' => 'Rechazada'),),
                 $requisicione->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>      
        <div class="form-group">
            {{ Form::label('fechaRechazo') }}
            {{ Form::date('fechaRechazo', $requi->fechaRechazo, ['class' => 'form-control' . ($errors->has('fechaRechazo') ? ' is-invalid' : ''), 'placeholder' => 'Fecharechazo']) }}
            {!! $errors->first('fechaRechazo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Motivo Rechazo') }}
            {{ Form::text('motivoRechazo', $requi->motivoRechazo, ['class' => 'form-control' . ($errors->has('motivoRechazo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo del rechazo']) }}
            {!! $errors->first('motivoRechazo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endcan

        <div class="form-group">
            {{ Form::label('comentarios') }}
            {{ Form::text('comentarios', $requisicione->comentarios, ['class' => 'form-control' . ($errors->has('comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
            {!! $errors->first('comentarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-success">Submit</button>

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










