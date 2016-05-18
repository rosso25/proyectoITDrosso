<?php
session_start();

    /*include_once('conexion.inc.php');
    $link=conectar();*/
    foreach($_GET as $campo=>$valor){
    $llave=$campo;
    $$llave=$valor;
 }
 $accion=(isset($accion))?$accion:'';
    switch($accion)
    {
        case "E":
            $texto='Actualizar';
            break;
        case "B":
            $texto='Eliminar';
            break;
    }
    if(isset($_GET['actualiza']) && $_GET['actualiza']=='#123%123$'){
    // la rutina de agregado.. salvar datos en la tabla
    include_once('conexion.inc.php');
    $link=conectar();
    foreach($_GET as $campo=>$valor){
     $llave=$campo;
     $$llave=$valor;
    }
    if($accion=='E'){
    $qry_usuarios="call sp_actualizar_cliente ('$idcliente,$nomcliente, $apellidop,$apellidom,$email,$curp,$direccioncliente,$telefonocliente,
   $rfc_c,$codigopostal,$ubicacion,$entfede')";
    }
    if($accion=='B'){
      $qry_usuarios="call sp_eliminar_cliente ('$idcliente')";
    }
   $rst_usuarios=$link->Execute($qry_usuarios);
  }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>title</title>
    <link href="css/registro.css" rel="stylesheet" type="text/css"/>
    <style>
        #botones{
            text-align: center;
        }
    </style>
    <script languaje="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
    <h1>R E G I S T R O</h1>
    <form action="" method="get">
        <fieldset>
            <legend>Clientes</legend>
        <label><input idcliente="idcliente" name="idcliente" value="<?php print (isset($idcliente))?$idcliente:''; ?>" class="cajatexto"  readonly="readonly" onblur="validar(this)" onfocus="this.select();"/>ID_Cliente</label><br/><br/>
        <label><input nomcliente="nomclientes" name="nomproveedor" value="<?php print (isset($nomproveedor))?$nomproveedor:''; ?>" class="cajatexto" onblur="validar(this)"/>Nombre Cliente</label><br/><br/>
        <label><input apellidop="apellidop" name="apellidop" value="<?php print (isset($apellidop))?$apellidop:''; ?>" class="cajatexto" onblur="validar(this)"/>Apellido P.</label><br/><br/>
        <label><input apellidom="apellidom" name="apellidom" value="<?php print (isset($apellidom))?$apellidom:''; ?>" class="cajatexto" onblur="validar(this)"/>Apellido M.</label><br/><br/>
        <label><input email="email" name="email" value="<?php print (isset($email))?$email:''; ?>" class="cajatexto" onblur="validar(this)"/>Email</label><br/><br/>
        <label><input curp="curp" name="curp" value="<?php print (isset($curp))?$curp:''; ?>" class="cajatexto" onblur="validar(this)"/>CURP</label><br/><br/>
        <label><input direccioncliente="direccioncliente" name="direccioncliente" value="<?php print (isset($direccioncliente))?$direccioncliente:''; ?>" class="cajatexto" onblur="validar(this)"/>Direccion</label><br/><br/>
        <label><input telefonocliente="telefonocliente" name="telefonocliente" value="<?php print (isset($telefonocliente))?$telefonocliente:''; ?>" class="cajatexto" onblur="validar(this)" onfocus="this.select();"/>Telefono</label><br/><br/>
        <label><input rfc_c="rfc_c" name="rfc_c" value="<?php print (isset($rfc_c))?$rfc_c:''; ?>" class="cajatexto" onblur="validar(this)"onfocus="this.select();"/>RFC</label><br/><br/>
        <label><input codigopostal="codigopostal" name="codigopostal" value="<?php print (isset($codigopostal))?$codigopostal:''; ?>" class="cajatexto" onblur="validar(this)" onfocus="this.select();"/>Codigo Postal</label><br/><br/>
        <label><input ubicacion="ubicacion" name="ubicacion" value="<?php print (isset($ubicacion))?$ubicacion:''; ?>" class="cajatexto" onblur="validar(this)"/>Ubicacion</label><br/><br/>
        <label><input entfede="entfede" name="entfede" value="<?php print (isset($entfede))?$entfede:''; ?>" class="cajatexto" onblur="validar(this)" onfocus="this.select();"/>Entidad Federativa</label><br/><br/>
        <input type="hidden" value="#123%123$" name="actualiza" />
        <input type="hidden" value="<?php print (isset($accion))? $accion:''; ?>" name="accion" />
        <div id="botones">
        <input class="btn" type="submit" value="<?php print (isset($texto))?$texto:'--';?>"/>
        &nbsp; &nbsp;
        <input type="reset" value="Limpiar" class="boton"/>
        <br/><br/>
        <!--<a href="usuarios.html" class="button" id="btnUsuarios">Regresar</a>-->
        </div>
        </fieldset><br/>
        
    </form>
</body>
</html>