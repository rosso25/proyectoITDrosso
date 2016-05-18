<?php
  session_start();
  
  include_once('conexion.inc.php');
  $link=conectar();
  $qry_usuarios='call sp_lista_empleados()';
  $rst_usuarios=$link->Execute($qry_usuarios);

?>

<html>
<head>
    <title>title</title>
    <link rel="stylesheet" type="text/css" href="css/capas.css"/>
    <!--<link href="estilo.css" rel="stylesheet" type="text/css"/>-->
    <script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
    <form action="" method="get">
        
        <div id="principaltabla">
            <h1>MODIFICAR USUARIO</h1>
            <label for="Id"  >Id</label>
            <input type="text" id="Id" name="Id" maxlength=10 size=8 class="cajatexto id" onblur="validar(this)"/></br></br>
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" maxlength=30 class="cajatexto letras" onblur="validar(this)"/><br/><br/>
            <label for="AP">Apellido Paterno</label>
            <input type="text" id="AP" name="AP" maxlength=8 size=8 class="cajatexto letras" onblur="validar(this)"/><br/><br/>
            <label for="AM">Apellido Materno</label>
            <input type="text" id="AM" name="AM" maxlength=8 size=8 class="cajatexto letras" onblur="validar(this)"/><br/><br/>           
            <button type="submit" href="MenuP.php">Agregar</button>
            <button type="submit" href="MenuP.php">Modificar</button>
            <button type="submit" href="MenuP.php">Borrar</button>
            <!--<br/><br/><a href="usuarios.html" class="button" id="btn">Regresar</a>-->
        </div>
    </form>
    <div id="tabla">
       <table style="border: solid 1px #000;">
        <caption>USUARIOS AUTORIZADOS</caption>
        
        <tr>
            <th style="border: solid 1px #000;">ID USUARIO</th>
            <th style="border: solid 1px #000;" TD WIDTH="100" >NOMBRE</th>            
            <th style="border: solid 1px #000;">APELLIDO PATERNO</th>
            <th style="border: solid 1px #000;">APELLIDO MATERNO</th>
        </tr>
             
        <?php
        if($rst_usuarios->RecordCount()){
            $claseRen="non";
            while(!$rst_usuarios->EOF)
            { ?>
            <tr class="<?php print $claseRen;?>">
        <td><?php print $rst_usuarios->fields('idempleado'); ?></td>
        <td><?php print $rst_usuarios->fields('nomusuario'); ?></td>
        <td><?php print $rst_usuarios->fields('apellido'); ?></td>
        <td><?php print $rst_usuarios->fields('cargo'); ?></td>
        <td><?php print $rst_usuarios->fields('nombre'); ?></td>
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