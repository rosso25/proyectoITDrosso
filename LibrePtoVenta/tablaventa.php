
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
         <head>
            
    <link href="css/ventas.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css" />
         </head>
        <body>
        <table border=bold>
            <tr>
            <th style="border: solid 1px #000;">Id</th>
            <th style="border: solid 1px #000;" TD WIDTH="50" >Producto</th>            
            <th style="border: solid 1px #000;">Cantidad</th>
            <th style="border: solid 1px #000;">Precio</th>
            <th style="border: solid 1px #000;">borrar</th> 
        </tr>
          <?php
session_start();
include_once('conexion.inc.php');
  $link=conectar();
  $qry_usuarios='call sp_lista_temp()';
  $rst_usuarios=$link->Execute($qry_usuarios);
if($rst_usuarios->RecordCount())
    {
        $claseRen="non";
      while(!$rst_usuarios->EOF)
      { ?>
       <tr class="<?php print $claseRen;?>">
        <td><?php print $rst_usuarios->fields('idProducto'); ?></td>
        <td><?php print $rst_usuarios->fields('nomProducto'); ?></td>
        <td><?php print $rst_usuarios->fields('cantidad'); ?></td>
        <td><?php print $rst_usuarios->fields('precio'); ?></td>
        <!-- agregado para opciones -->
       <td><span class="fa fa-close"></span></a></td>
      </tr>
       
      <?php
      $claseRen=($claseRen=="non")?"par":"non";
      $rst_usuarios->MoveNext();
      }
    }
?>
        </table>
      
        <div id="totales">
            <label for="subtotal">Subtotal</label>
            <input type="text" name="subtotal" id="subtotal" size=4 readonly="readonly"/>
            <br/>
            <label for="iva">IVA</label>
            <input type="iva" name="iva" id="iva" size=4 readonly="readonly"/>
            <br/>
            <label for="total">Total</label>
            <input type="text" name="total" id="total" size=4 />
        </div>
        <br/><br/><br/><br/><br/>
        <!--<a href="MenuP.html" class="button">Regresar</a>-->
    </div>
    </body>
    </html>