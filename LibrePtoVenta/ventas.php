<?php
session_start();
// como se que se ejecuto el submit?
  if(/*isset($_SESSION['autorizado']) && $_SESSION['autorizado']=='22032821'*/true){
    // la rutina de agregado.. salvar datos en la tabla
    include_once('conexion.inc.php');
   $link=conectar();
  foreach($_GET as $campo=>$valor){
     $llave=$campo;
     $$llave=$valor;
 }
 
   function llenarArts(){
    include_once('conexion.inc.php');
    $link=conectar();
    $qry_inv="call sp_lista_inventario()";
    $resultado='';
    $rst_inv=$link->Execute($qry_inv);
    while(!$rst_inv->EOF)
    {
        $resultado.='<option value="'.$rst_inv->fields('nomproducto').'">'.$rst_inv->fields('nomproducto').'</option>';
        $rst_inv->MoveNext();
    }//fin del while
    return $resultado;
  }
   //$qry_inventarios="call sp_disminuir_inventario ('$id','$cantidad')";
    
   //$rst_inventarios=$link->Execute($qry_inventarios);
    if(isset($_GET['agrega']) && $_GET['agrega']=='#123%123$a'){
    // la rutina de agregado.. salvar datos en la tabla
    include_once('conexion.inc.php');
   $link=conectar();
  foreach($_GET as $campo=>$valor){
     $llave=$campo;
     $$llave=$valor;
 }


   //$qry_inventarios="call sp_aumentar_inventario ('$id','$cantidad')";

  }
     $qry_ultimo="call sp_ultima_venta";
  
   //$rst_inventarios=$link->Execute($qry_inventarios);
   $rst_ultimo=$link->Execute($qry_ultimo);
   $ultimo = $rst_ultimo->Fields('id');
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>Ventas</title>
    <link href="css/ventas.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css" />
    <!--script language="javascript" type= "text/javascript" src="js/funciones.js"></script-->
</head>
<body>
    <h1>Ventas</h1>
    <div>
    <div id="top">
            <form method="get">
                <label for="id" >Id</label>
                <input type="text" name="id" id="id" size=5 class="num" onblur="validar(this)" value="<?php print (isset($id))?$id:''; ?>"  />
                <select name="muebles">
                    <?php print llenarArts();?>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <label for="cantidad">Cantidad</label>
                <input type="text" name="cantidad" id="cantidad" size=4 class= "num" onblur="validar(this)"  value="<?php print (isset($cantidad))?$cantidad:''; ?>"/>

                <input type="hidden" value="#123%123$" name="agrega" />
                <button class="btn" type="submit" onclick="tabla.location.reload();">Agregar</button>
                <input type="hidden" name="ultimo" id="ultimo" value="<?php print $ultimo;?>"/>
        
                <br/>
                <br/>
            <!--<a href="Factura.html"><button class="btn" type="submit">Generar Factura</button></a>-->
            </form>
    </div>
     <br/>
     <br/>
    <!--div id="tabla"-->
    <iframe name="tabla" width="620px" height="400px"src="tablaventa.php">
      <?php }else{ ?>
         <div>
            <span>Accesso no autorizado</span>
         </div>
      <?php }?>
    <!--/div-->
    </iframe>
</body>
</html>
