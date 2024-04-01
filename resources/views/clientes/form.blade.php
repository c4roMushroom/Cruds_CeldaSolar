<h2>Aqui va titulo de crear o actualizar Clientes</h2>
<br>
<input type="number" value="{{isset($cliente->cod_cliente)?$cliente->cod_cliente:old('cod_cliente')}}" name="cod_cliente" id="cod_cliente" placeholder="Ingrese numero de documento"><br>
<input type="text"
