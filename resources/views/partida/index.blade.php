@extends('layouts.app')

@section('template_title')
    Partida
@endsection

@section('content')
@include('layouts.header')
<div class="cuadrado">
          <center><h1>SGC - Partidas</h1></center>
        </div>
        <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Partida') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('partidas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Producto</th>
										<th>Tipo</th>
										<th>Cantidad</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($partidas as $partida)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $partida->producto }}</td>
											<td>{{ $partida->tipo }}</td>
											<td>{{ $partida->cantidad }}</td>


                                            <td>

                                                    <a class="btn btn-sm btn-primary " href="{{ route('partidas.show',$partida->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('partidas.edit',$partida->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $partidas->links() !!}
            </div>
        </div>
    </div>
@endsection
