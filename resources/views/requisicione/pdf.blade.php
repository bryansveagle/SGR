<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    Cotización
    <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Folio</th>
										<th>Producto</th>
										<th>Status</th>
										<th>Fecharechazo</th>
                                        <th>Motivo del rechazo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($requisiciones as $requisicione)
                                        <tr>
                                            <td>{{ $requisicione->id }}</td> 
											<td>{{ $requisicione->partida->producto }}</td>
											<td>{{ $requisicione->status }}</td>
											<td>{{ $requisicione->fechaRechazo }}</td>
                                            <td>{{ $requisicione->motivoRechazo }}</td>

                                            
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
    </body>
</html>