<?php
  session_start();
  
  include_once('conexion.inc.php');
  $link=conectar();
  $qry_usuarios='call sp_lista_clientes()';
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
        <caption>CLIENTES</caption>
        
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
            <th colspan="3">Opciones</th>
        </tr>
        <?php
        if($rst_usuarios->RecordCount()){
          $claseRen="non";
            while(!$rst_usuarios->EOF)
            { ?>
            <tr class="<?php print $claseRen;?>">
        <td><?php print $rst_usuarios->fields('idcliente'); ?></td>
        <td><?php print $rst_usuarios->fields('nomcliente'); ?></td>
        <td><?php print $rst_usuarios->fields('apellidop'); ?></td>
        <td><?php print $rst_usuarios->fields('apellidom'); ?></td>
        <td><?php print $rst_usuarios->fields('email'); ?></td>
        <td><?php print $rst_usuarios->fields('curp'); ?></td>
        <td><?php print $rst_usuarios->fields('direccioncliente'); ?></td>
        <td><?php print $rst_usuarios->fields('telefonocliente'); ?></td>
        <td><?php print $rst_usuarios->fields('rfc_c'); ?></td>
        <td><?php print $rst_usuarios->fields('codigopostal'); ?></td>
        <td><?php print $rst_usuarios->fields('ubicacion'); ?></td>
        <td><?php print $rst_usuarios->fields('entfede'); ?></td>
        
        <td><span class="fa fa-pencil" onclick="window.open('editar_clientes.php?idcliente=<?php print $rst_usuarios->fields('idcliente');?>&nomcliente=<?php print $rst_usuarios->fields('nomcliente'); ?>&apellidop=<?php print $rst_usuarios->fields('apellidop'); ?>&apellidom=<?php print $rst_usuarios->fields('apellidom'); ?>&email=<?php print $rst_usuarios->fields('email'); ?>&curp=<?php print $rst_usuarios->fields('curp'); ?>&direccioncliente=<?php print $rst_usuarios->fields('direccioncliente'); ?>&telefonocliente=<?php print $rst_usuarios->fields('telefonocliente');?>&rfc_c=<?php print $rst_usuarios->fields('rfc_c'); ?>&codigopostal=<?php print $rst_usuarios->fields('codigopostal');?>&ubicacion=<?php print $rst_usuarios->fields('ubicacion');?>&entfede=<?php print $rst_usuarios->fields('entfede');?>&accion=E','left=200,top=200,width=600,height=450,fullscreen=no, status=no, location=0,menubar=no,toolbar=no');"></span></td>
        <td><span class="fa fa-close" onclick="window.open('editar_clientes.php?idcliente=<?php print $rst_usuarios->fields('idcliente');?>&nomcliente=<?php print $rst_usuarios->fields('nomcliente'); ?>&apellidop=<?php print $rst_usuarios->fields('apellidop'); ?>&apellidom=<?php print $rst_usuarios->fields('apellidom'); ?>&email=<?php print $rst_usuarios->fields('email'); ?>&curp=<?php print $rst_usuarios->fields('curp'); ?>&direccioncliente=<?php print $rst_usuarios->fields('direccioncliente'); ?>&telefonocliente=<?php print $rst_usuarios->fields('telefonocliente');?>&rfc_c=<?php print $rst_usuarios->fields('rfc_c'); ?>&codigopostal=<?php print $rst_usuarios->fields('codigopostal');?>&ubicacion=<?php print $rst_usuarios->fields('ubicacion');?>&entfede=<?php print $rst_usuarios->fields('entfede');?>&accion=B','left=200,top=200,width=600,height=450,fullscreen=no, status=no, location=0,menubar=no,toolbar=no');"></span></td>
        <?php
        $claseRen=($claseRen=="non")?"par":"non";
        $rst_usuarios->MoveNext();
            }
        }?>
 
        </table>
    </div>
    <div>
        
    </div>
</body>
</html>