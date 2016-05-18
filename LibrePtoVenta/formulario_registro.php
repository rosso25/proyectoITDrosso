<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>title</title>
    <link type="text/css" rel="stylesheet" href="css/registro.css"/>
    <script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
    <h1>R E G I S T R O</h1>
    <form action="formulario_registro.html" method="get">
        <fieldset style="width: 450px">
            <legend>Datos de Registro</legend>
        <label for="id" class="cajatexto">ID_Usuario</label>
        <input type="text" size="8" maxlength="8" id="id" name="id" class="cajatexto"onblur= "validar(this)"/> <br/>
         <label for="nombre" class="cajatexto">Nombre</label>
        <input type="text" id="ap" size="50" name="ap" class="cajatexto" onblur= "validar(this)"/><br/>
        <label for="nombre" class="cajatexto">Primer Apellido</label>
        <input type="text" id="ap" size="50" name="ap" class="cajatexto" onblur= "validar(this)"/><br/>
        <label for="nombre" class="cajatexto">Segundo Apellido</label>
        <input type="text" id="am" size="50" name="am" class="cajatexto" onblur= "validar(this)"/><br/>
        <label for="sexo">Sexo</label><br/>
        <input type="radio" name="sexo" id="sexo" value="F" checked="checked"/>
        <span>Femenino</span>&nbsp;&nbsp;
        <input type="radio" name="sexo" id="sexo" value="M"/>
        <span>Masculino</span><br/>
        <label for="nomUsuario">Nombre de Usuario</label>
        <input type="text" id=nomUsuario size=48 name="nomUsuario" class="cajatexto"/><br/>
        <label for="contraseña" class="cajatexto">Contrase&ntilde;a</label>
        <input type="password" id="contraseña" name="contraseña" maxlength=8 class="cajatexto"/></br></br>
        <input type="hidden" value="5318008" name="contra" class="cajatexto"/>
        </fieldset>
        <input type ="submit" value="Enviar" class="boton"/>
        &nbsp; &nbsp;
        <input type="reset" value="Limpiar" class="boton"/>
        <br/><br/>
        <!--<a href="usuarios.html" class="button" id="btnUsuarios">Regresar</a>-->
    </form>
    
</body>
</html>