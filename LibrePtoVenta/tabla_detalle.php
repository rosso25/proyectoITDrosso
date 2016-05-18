<?php
session_start();
    include_once('conexion.inc.php');
    $link=conectar();
    if(isset($_GET['buscar'])&&$_GET['buscar']!=null){
        foreach($_GET as $campo=>$valor){
            $llave=$campo;
            $$llave=$valor;
        }
        $qry_usuarios="call sp_buscar_fecha('$buscar')";
    }else
        $qry_usuarios="call sp_lista_venta()";
    $rst_usuarios=$link->Execute($qry_usuarios);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>title</title>
    <link rel="stylesheet" type="text/css" href="css/capas.css"/>
    <link href="css/ventas.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="tabla">
       <table style="border: solid 2px #000;">
        <caption>Detalle de Venta</caption>
        <tr>
            <th style="border: solid 1px #000;">Articulo</th>
            <th style="border: solid 1px #000;" TD WIDTH="200">Cliente</th>          
            <th style="border: solid 1px #000;">Numero de Factura</th>
            <th style="border: solid 1px #000;">Id Venta</th>
            <th style="border: solid 1px #000;" TD WIDTH="200" >Fecha de Venta</th>  
        </tr>
        <?php
        if($rst_usuarios->RecordCount()){
            while(!$rst_usuarios->EOF)
            { ?>
        <tr>
        <td><?php print $rst_usuarios->fields('nomproducto'); ?></td>
        <td><?php print $rst_usuarios->fields('nomcliente'); ?></td>
        <td><?php print $rst_usuarios->fields('iddv'); ?></td>
        <td><?php print $rst_usuarios->fields('idventa'); ?></td>
        <td><?php print $rst_usuarios->fields('fecha'); ?></td>
        </tr>
        <tr>
        <?php
        $rst_usuarios->MoveNext();
            }
        }?>
       </table>
    
</body>
</html>