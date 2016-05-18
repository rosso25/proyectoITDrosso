<?php
session_start();

    include_once('conexion.inc.php');
    $link=conectar();
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
    $qry_usuarios="call actualizarproveedor ('$idproveedor','$nomproveedor','$direccionproveedor','$telefonoproveedor','$codigopostal','$rfc_p')";
    }
    if($accion=='B'){
      $qry_usuarios="call eliminarproveedor ('$idproveedor');";
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
            <legend>Proveedor</legend>
        <label><input idproveedor="idproveedor" name="idproveedor" value="<?php print (isset($idproveedor))?$idproveedor:''; ?>" class="cajatexto"  readonly="readonly" onblur="validar(this)" onfocus="this.select();"/>ID_Proveedor</label><br/><br/>
        <label><input nomproveedor="nomproveedor" name="nomproveedor" value="<?php print (isset($nomproveedor))?$nomproveedor:''; ?>" class="cajatexto" onblur="validar(this)"/>Nombre Proveedor</label><br/><br/>
        <label><input direccionproveedor="direccionproveedor" name="direccionproveedor" value="<?php print (isset($direccionproveedor))?$direccionproveedor:''; ?>" class="cajatexto" onblur="validar(this)"/>Direccion</label><br/><br/>
        <label><input telefonoproveedor="telefonoproveedor" name="telefonoproveedor" value="<?php print (isset($telefonoproveedor))?$telefonoproveedor:''; ?>" class="cajatexto" onblur="validar(this)" onfocus="this.select();"/>Telefono</label><br/><br/>
        <label><input codigopostal="codigopostal" name="codigopostal" value="<?php print (isset($codigopostal))?$codigopostal:''; ?>" class="cajatexto" onblur="validar(this)" onfocus="this.select();"/>Codigo Postal</label><br/><br/>
        <label><input rfc_p="rfc_p" name="rfc_p" value="<?php print (isset($rfc_p))?$rfc_p:''; ?>" class="cajatexto" onblur="validar(this)" onfocus="this.select();"/>RFC</label><br/><br/>
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