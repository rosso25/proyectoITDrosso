<?php
session_start();
 if(isset($_GET['agrega']) && $_GET['agrega']=='#123%123$'){
    // la rutina de agregado.. salvar datos en la tabla
    include_once('conexion.inc.php');
    $link=conectar();
    foreach($_GET as $campo=>$valor){
     $llave=$campo;
     $$llave=$valor;
    }
    $qry_usuarios="call agregar_proveedor ('$idproveedor','$nomproveedor','$direccionproveedor','$telefonoproveedor','$codigopostal','$rfc_p')";
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
            <legend>Datos de Registro</legend>
        <label><input id="idproveedor" name="idproveedor" class="cajatexto" onblur="validar(this)" onfocus="this.select();"/>ID_Proveedor</label><br/><br/>
        <label><input id="nomproveedor" name="nomproveedor" class="cajatexto"  onblur="validar(this)"  onfocus="this.select();"/>Nombre</label><br/><br/>
        <label><input id="direccionproveedor" name="direccionproveedor" class="cajatexto"  onblur="validar(this)" onfocus="this.select();"/>Direccion</label><br/><br/>
        <label><input id="telefonoproveedor" name="telefonoproveedor" class="cajatexto"  onblur="validar(this)" onfocus="this.select();"/>Telefono</label><br/><br/>
        <label><input id="codigopostal" name="codigopostal" class="cajatexto"  onblur="validar(this)" onfocus="this.select();"/>Codigo Postal</label><br/><br/>
        <label><input id="rfc_p" name="rfc_p" class="cajatexto" onblur="validar(this)"  onfocus="this.select();"/>RFC</label><br/><br/>
        </fieldset><br/>
        <input type="hidden" value="#123%123$" name="agrega" />
        <div class="botones">
          <input class="btn" type="submit" value="Agregar"/>
          <input class="btn" type="reset" value="Limpiar"/>
        &nbsp; &nbsp;
        <br/><br/>
        </div>
    </form>
    
</body>
</html>