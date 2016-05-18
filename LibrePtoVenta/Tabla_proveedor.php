<?php
  session_start();
  
  include_once('conexion.inc.php');
  $link=conectar();
  $qry_usuarios='call call_sp_lista_proveedores()';
  $rst_usuarios=$link->Execute($qry_usuarios);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>title</title>
    
    <link href="css/registro.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/capas.css"/>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css" />
    <script language="javascript" type="text/javascript" src="js/funciones.js"></script>
    <style>
        
    </style>
</head>
<body>
    <div style="margin: 20px;" > 
       <table style="border: solid 1px #000; width: 900px">
        <caption>PROVEEDORES AUTORIZADOS</caption>
        
        <tr>
            <th style="border: solid 1px #000; width: auto" >ID PROVEEDOR</th>
            <th style="border: solid 1px #000;" TD WIDTH="200" >NOMBRE</th>            
            <th style="border: solid 1px #000;" TD WIDTH="200">DIRECCION</th>
            <th style="border: solid 1px #000;">TELEFONO</th>
            <th style="border: solid 1px #000;">CODIGO POSTAL</th>
            <th style="border: solid 1px #000;">RFC</th>
            <th style="border: solid 1px #000;" colspan="2">Opciones</th>
            
        </tr>
        <?php
        if($rst_usuarios->RecordCount()){
            while(!$rst_usuarios->EOF)
            { ?>
        <tr>
        <td><?php print $rst_usuarios->fields('idproveedor'); ?></td>
        <td><?php print $rst_usuarios->fields('nomproveedor'); ?></td>
        <td><?php print $rst_usuarios->fields('direccionproveedor'); ?></td>
        <td><?php print $rst_usuarios->fields('telefonoproveedor'); ?></td>
        <td><?php print $rst_usuarios->fields('codigopostal'); ?></td>
        <td><?php print $rst_usuarios->fields('rfc_p'); ?></td>
        <td><span class="fa fa-pencil" onclick="window.open('editar_proveedor.php?idproveedor=<?php print $rst_usuarios->fields('idproveedor');?>&nomproveedor=<?php print $rst_usuarios->fields('nomproveedor'); ?>&direccionproveedor=<?php print $rst_usuarios->fields('direccionproveedor'); ?>&telefonoproveedor=<?php print $rst_usuarios->fields('telefonoproveedor');?>&codigopostal=<?php print $rst_usuarios->fields('codigopostal');?>&rfc_p=<?php print $rst_usuarios->fields('rfc_p'); ?>&accion=E','left=200,top=200,width=600,height=450,fullscreen=no, status=no, location=0,menubar=no,toolbar=no');"></span></td>
        <td><span class="fa fa-close" onclick="window.open('editar_proveedor.php?idproveedor=<?php print $rst_usuarios->fields('idproveedor');?>&nomproveedor=<?php print $rst_usuarios->fields('nomproveedor'); ?>&direccionproveedor=<?php print $rst_usuarios->fields('direccionproveedor'); ?>&telefonoproveedor=<?php print $rst_usuarios->fields('telefonoproveedor');?>&codigopostal=<?php print $rst_usuarios->fields('codigopostal');?>&rfc_p=<?php print $rst_usuarios->fields('rfc_p'); ?>&accion=B','left=200,top=200,width=600,height=450,fullscreen=no, status=no, location=0,menubar=no,toolbar=no');"></span></td>
        </tr>
        <?php
        $rst_usuarios->MoveNext();
            }
        }?>
 
        </table>
    </div>
    <div>
        
    </div>
</body>
</html>