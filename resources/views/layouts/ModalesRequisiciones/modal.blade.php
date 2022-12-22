
<!-- MODAL DEL FORM DE REQUISICIONE -->

<div class="modal fade" id="modalCreateRequisiciones" tabindex="-1" aria-labelledby="modalCreateRequisiciones" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> CREATE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <div class="form-group">
                        <form method="POST" action="{{ route('requisiciones.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-3 ms-auto">
                                    {{ Form::label('Producto') }}
                                    {{ Form::select('partidas_id', $producto, $requi->partidas_id, ['class' => 'form-control' . ($errors->has('partidas_id') ? ' is-invalid' : ''), 'placeholder' => 'Partidas Id']) }}
                                    {!! $errors->first('partidas_id', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="col-md-3 ms-auto">
                                    {{ Form::label('users_id') }}
                                    {{ Form::select('users_id', $usuario, $requi->users_id,  ['class' => 'form-control' . ($errors->has('users_id') ? ' is-invalid' : ''), 'placeholder' => 'Users']) }}
                                    {!! $errors->first('users_id', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="col-md-3 ms-auto">
                                    {{ Form::label('concepto') }}
                                    {{ Form::text('concepto', $requi->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
                                    {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="col-md-3 ms-auto">
                                    {{ Form::label('urgencia') }}
                                    {{ Form::select('urgencia',array('Urgente' => array('Urgente' => 'Urgente'),'No Urgente' => array('No urgente' => 'No urgente'),),
                                    $requi->urgencia, ['class' => 'form-control' . ($errors->has('urgencia') ? ' is-invalid' : ''), 'placeholder' => 'Urgencia']) }}
                                    {!! $errors->first('urgencia', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                            </div>
                            <div class="row">
                            @can('aprobador')
                                <div class="col-md-3 ms-auto">
                                    {{ Form::label('status') }}
                                    {{ Form::select('status',array('Aprobada' => array('Aprobada' => 'Aprobada'),'Rechazada' => array('Rechazada' => 'Rechazada'),),
                                    $requi->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
                                    {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="col-md-3 ms-auto">
                                    {{ Form::label('Motivo Rechazo') }}
                                    {{ Form::text('motivoRechazo', $requi->motivoRechazo, ['class' => 'form-control' . ($errors->has('motivoRechazo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo del rechazo']) }}
                                    {!! $errors->first('motivoRechazo', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="col-md-3 ms-auto">
                                    {{ Form::label('fechaRechazo') }}
                                    {{ Form::date('fechaRechazo', $requi->fechaRechazo, ['class' => 'form-control' . ($errors->has('fechaRechazo') ? ' is-invalid' : ''), 'placeholder' => 'Fecharechazo']) }}
                                    {!! $errors->first('fechaRechazo', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                @endcan
                                <div class="col-md-3 ms-auto">
                                    {{ Form::label('comentarios') }}
                                    {{ Form::text('comentarios', $requi->comentarios, ['class' => 'form-control' . ($errors->has('comentarios') ? ' is-invalid' : ''), 'placeholder' => 'Comentarios']) }}
                                    {!! $errors->first('comentarios', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="col-md-3 ms-auto">
                                </div>
                                <div class="col-md-3 ms-auto">
                                </div>
                                <div class="col-md-3 ms-auto">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4 ms-auto">
                                    <label for="producto" >Descripción</label>
                                    <br>
                                    <input type="text" class="form-control" name="producto" placeholder="Producto..."  id="producto" required>
                                </div>
                                <div class="col-md-4 ms-auto">
                                    <label for="tipo">Tipo</label>
                                    <br>
                                    <select name="tipo" id="tipo" class="form-control" required>
                                        <option value="Pza">Pza</option>
                                        <option value="Caja">Caja</option>
                                        <option value="Paq">Paq</option>
                                        <option value="Kg">Kg</option>
                                        <option value="M">M</option>
                                        <option value="Litros">Litros</option>
                                        <option value="Ton">Ton</option>
                                    </select> 
                                </div>
                                <div class="col-md-4 ms-auto">
                                    <label for="cantidad">Cantidad</label>
                                    <br>
                                    <input type="text" class="form-control" name="cantidad" placeholder="Cantidad..."  id="cantidad" required>
                                </div>
                                    <br>
                            </div>
                                    <br>
                            <button id="adicionar" class="btn btn-success" type="button">Adicionar a la tabla</button>
                                    <br>
                            <p>Elementos en la Tabla:
                            <div id="adicionados"></div>
                            </p>
                                <table  id="mytable" class="table table-bordered table-hover ">
                                    <tr>
                                        <th>Descripción</th>
                                        <th>Tipo</th>
                                        <th>Cantidad</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </table>        
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
                
<!-- TERMINA MODAL DE REQUISICIONE -->


<!-- MODAL DEL FORM DE SHOW REQUISICIONE -->




<!-- TERMINA MODAL DE SHOW REQUISICIONE -->





