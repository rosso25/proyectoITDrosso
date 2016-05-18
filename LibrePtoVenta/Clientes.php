<?php
  session_start();

  include_once('conexion.inc.php');
  $link=conectar();
  $qry_usuarios='call sp_lista_clientes()';
  $rst_usuarios=$link->Execute($qry_usuarios);
?>

<!doctype html>

<html lang="en">
<head>
    <title>::Listar</title>
    <link rel="stylesheet" type="text/css" href="css/capas.css" />
    <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css" />
</head>
<body>
   <table class="normal">
    <caption>DATOS CLIENTES</caption>
   <tr>
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
   </tr>
<?php
 if($rst_usuarios->RecordCount())
    {
        $claseRen="non";
        
      while(!$rst_usuarios->EOF)
      {
     /*  $tipo2='';
        if ($rst_usuarios->fields('tipo')==1){
          $tipo2="Administrador";
        }
         if ($rst_usuarios->fields('tipo')==2){
          $tipo2="Cliente";
        }
         if ($rst_usuarios->fields('tipo')==3){
          $tipo2="Vendedor";
        }*/
        
        ?>
      
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
        
        <!--<td><//?php print $rst_usuarios->fields('tipo'); ?></td>-->
      
        <!-- agregado para opciones -->
        <td><span class="fa fa-pencil" onclick="window.open('editar_clientes.php?id=<?php print $rst_usuarios->fields('id'); ?>&nombre=<?php print $rst_usuarios->fields('nombre'); ?>&accion=E','Acciones','left=200,top=200,width=600,height=450,fullscreen=no, status=no, location=0,menubar=no,toolbar=no');"></span></td>
        <td><a href="editar_clientes.php?id=<?php print $rst_usuarios->fields('id'); ?>&nombre=<?php print $rst_usuarios->fields('nombre'); ?>&accion=B"><span class="fa fa-close"></span></a></td>
        <td><span class="fa fa-print"  onclick="window.open('imprimir_usuario.php?id=<?php print $rst_usuarios->fields('id'); ?>&nombre=<?php print $rst_usuarios->fields('nombre'); ?>&accion=E','Acciones','left=200,top=200,width=600,height=450,fullscreen=no, status=no, location=0,menubar=no,toolbar=no');"></span></td>
       </tr>
       
      <?php
      $claseRen=($claseRen=="non")?"par":"non";
      $rst_usuarios->MoveNext();
      }?>
      
      
      
  
      <?php
    }
 else { ?>
    <tr><td colspan="3">No hay registros</td></tr>
    
<?php    
  }
?>
   
    
   </table>
   <!--iframe name="Acciones" ></iframe-->
</body>

</html>


