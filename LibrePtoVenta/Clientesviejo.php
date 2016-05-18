<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>Clientes</title>
    <link rel="stylesheet" type="text/css" href="css/registro.css"/>
    <link rel="stylesheet" type="text/css" href="css/capas.css"/>
</head>
<body>
    <div id="todoC" style="margin: 0 300px;">
    <h1>Clientes</h1>
    <form action="" method="get">
            <h1>Datos Clientes</h1>
            <fieldset style="width: 300px">
                <label for="idCliente" class="cajatexto" >Id_Cliente</label>
                <input type="text" id="idCliente" name="idCliente" maxlength=10 size=8 class="cajatexto id" onblur="validar(this)"/><br/><br/>
                <label for="nomCliente" class="cajatexto">Nombre del cliente</label>
                <input type="text" id="nomCliente" name="nomCliente" maxlength=50 class="cajatexto letras" onblur="validar(this)"/><br/><br/>
                <label for="apellidoP" class="cajatexto">Apellido Paterno</label>
                <input type="text" id="apellidoP" name="apellidoP" maxlength=50 class="cajatexto letras" onblur="validar(this)"/><br/><br/>
                <label for="apellidoM" class="cajatexto">Apellido Materno</label>
                <input type="text" id="apellidoM" name="apellidoM" maxlength=50 class="cajatexto letras" onblur="validar(this)"/><br/><br/>
                <label for="email" class="cajatexto">E-mail</label>
                <input type="text" id="email" name="email" maxlength=50 class="cajatexto"/><br/><br/>
                <label for="curp" class="cajatexto">CURP</label>
                <input type="text" id="curp" name="curp" maxlength=18 class="cajatexto curp" onblur="validar(this)"/><br/><br/>
                <label for="direccionC" class="cajatexto">Direcci&oacute;n</label>
                <input type="text" id="direccionC" name="direccionC" maxlength=50 class="cajatexto"/><br/><br/>
                <label for="telefonoC" class="cajatexto">Tel&eacute;fono</label>
                <input type="text" id="telefonoC" name="telefonoC" maxlength=15 class="cajatexto num" onblur="validar(this)"/><br/><br/>
                <label for="rfcC" class="cajatexto">RFC</label>
                <input type="text" id="rfc" name="rfcC" maxlength=12 class="cajatexto rfc" onblur="validar(this)"/><br/><br/>
                <label for="CPc" class="cajatexto">C&oacute;digo Postal</label>
                <input type="text" id="CPc" name="CPc" maxlength=5 class="cajatexto num"/><br/><br/>
                <label for="ubicaC" class="cajatexto">Ubicaci&oacute;n</label>
                <input type="text" id="ubicaC" name="ubicaC" maxlength=50 class="cajatexto"/><br/><br/>
                <label for="entidadC" class="cajatexto">Entidad Federativa</label>
                <input type="text" id="entidadC" name="entidadC" maxlength=20 class="cajatexto"/><br/><br/>
            </fieldset>
            <button type="submit">Agregar</button>
            <button type="submit">Modificar</button>
            <button type="submit">Borrar</button>    <br/>
            <!--<a href="MenuP.html" class="button" id="btnUsuarios">Regresar</a>-->
    </form>
    </div>
    <br/><br/><br/>
    <div>
       <table style="border: solid 1px #000;">
        <caption>Datos de Cliente</caption>
        
        <tr>
            <th style="border: solid 1px #000;">Id Cliente</th>
            <th style="border: solid 1px #000;" TD WIDTH="200" >Nombre</th>            
            <th style="border: solid 1px #000;">Apellido Paterno</th>
            <th style="border: solid 1px #000;">Apellido Materno</th>
            <th style="border: solid 1px #000;">Email</th>
            <th style="border: solid 1px #000;">CURP</th>
            <th style="border: solid 1px #000;">Direcci&oacute;n</th>
            <th style="border: solid 1px #000;">Tel&eacute;fono</th>
            <th style="border: solid 1px #000;">RFC</th>
            <th style="border: solid 1px #000;">C&oacute;digo Postal</th>
            <th style="border: solid 1px #000;">Ubicaci&oacute;n</th>
            <th style="border: solid 1px #000;">Entidad Federativa</th>
        </tr>
        
        <tr>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
       
        </tr>
        
        
        <tr>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
        <tr>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
        <tr>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
   
        <tr>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
        <tr>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
        <tr>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
        <tr>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
    </table>
    </div>

</body>
</html>
