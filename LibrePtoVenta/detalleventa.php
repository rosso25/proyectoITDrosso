<?php
session_start();

    foreach($_GET as $campo=>$valor){
    $llave=$campo;
    $$llave=$valor;
 }
 function llenarFecha(){
    include_once('conexion.inc.php');
    $link=conectar();
    //$qry_tipos="call sp_lista_tipos()";
    $qry_fecha="call sp_fecha()";
    $rst_fecha=$link->Execute($qry_fecha);
    $resultado='';
    
    while(!$rst_fecha->EOF)
    {
        $resultado.='<option name="fecha" id="fecha" selected="selected" value="'.$rst_fecha->fields('fecha').'">'.$rst_fecha->fields('fecha').'</option>';
        //$resultado.='<option value="'.$rst_tipos->fields('tipo').'">'.$rst_tipos->fields('descripcion').'</option>';//no esta la esructura completa
        $rst_fecha->MoveNext();
    }//fin del while
    return $resultado;
}
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
    <form action="" method="get">
    <label for="Id">Fecha de Venta</label>
    <select name="fecha" id="fecha" value="buscar">
        <?php print llenarFecha();?>
    </select>
    <input class="btn" type="submit" value="buscar"/>
    </form>
    <iframe name="tabla" width="400px" height="400px"<?php (isset($fecha))?print "src=\"tabla_detalle.php?buscar=$fecha\"":print 'src="tabla_detalle.php"';?>>
    </iframe>
</body>
</html>