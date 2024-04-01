<h2>Lista de los clientes</h2>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Número de documento</th>
            <th>Tipo de documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Razon Social</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Telefono</th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $datos)
            <tr>
                <td>{{$datos->cod_cliente}}</td>
                <td>{{$datos->tipo_documento}}</td>
                <td>{{$datos->nombre_cliente}}</td>
                <td>{{$datos->apellido_cliente}}</td>
                <td>{{$datos->razonSocial_cliente}}</td>
                <td>{{$datos->correo_cliente}}</td>
                <td>{{$datos->direccion_cliente}}</td>
                <td>{{$datos->telefono_cliente}}</td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>