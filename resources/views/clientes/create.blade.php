<h2>HOLA TONOTONOS</h2>
<h2>Aqui va titulo de crear o actualizar Clientes</h2>
<br>
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    
    <input type="number" 
    {{-- value="{{isset($cliente->cod_cliente)?$cliente->cod_cliente:old('cod_cliente')}}"  --}}
    name="cod_cliente" id="cod_cliente" placeholder="Ingrese numero de documento"><br><br>

    <select name="tipo_documento" id="tipo_documento">
        <option value="-1" selected="selected">Seleccione tipo de documento</option>
        {{-- {{isset($cliente->tipo_documento)?$tipo_documento->tipo_documento:old('tipo_documento')}} --}}
        <option value="cc"> Cédula de Ciudadanía </option>
        <option value="ti"> Tarjeta de Identidad </option>
        <option value="ce"> Cédula de Extranjeria </option>
    </select><br><br>

    <input type="text" 
    {{-- value="{{isset($cliente->nombre_cliente)?$nombre_cliente->nombre_cliente:old('nombre_cliente')}}"  --}}
    name="nombre_cliente" id="nombre_cliente" placeholder="Ingrese Nombre Completo"><br><br>

    <input type="text" 
    {{-- value="{{isset($cliente->apellido_cliente)?$apellido_cliente->apellido_cliente:old('apellido_cliente')}}"  --}}
    name="apellido_cliente" id="apellido_cliente" placeholder="Ingrese Apellidos"><br><br>

    <select name="razonSocial_cliente" id="razonSocial_cliente">
        {{-- {{isset($cliente->razonSocial_cliente)?$razonSocial_cliente->razonSocial_cliente:old('razonSocial_cliente')}} --}}
        <option value="-1" selected="selected">Seleccione razon social</option>
        <option value="pn"> Persona Natural </option>
        <option value="e"> Empresa </option>
    </select><br><br>

    <input type="text" 
    {{-- value="{{isset($cliente->correo_cliente)?$correo_cliente->correo_cliente:old('correo_cliente')}}"  --}}
    name="correo_cliente" id="correo_cliente" placeholder="Ingrese Correo Electronico"><br><br>

    <input type="text" 
    {{-- value="{{isset($cliente->direccion_cliente)?$direccion_cliente->direccion_cliente:old('direccion_cliente')}}"  --}}
    name="direccion_cliente" id="direccion_cliente" placeholder="Ingrese Dirección"><br><br>

    <input type="number" 
    {{-- value="{{isset($cliente->telefono_cliente)?$cliente->telefono_cliente:old('telefono_cliente')}}"  --}}
    name="telefono_cliente" id="telefono_cliente" placeholder="Ingrese Numero Telefonico"><br><br>

    <input type="submit" value="Guardar">
</form>