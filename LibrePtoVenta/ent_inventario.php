<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>Entrada de Inventario</title>
    <link rel="stylesheet" type="text/css" href="css/entradas.css" media="screen" />
    <script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
    <div id="entrada">
        <p>ENTRADA DE MERCANCIA</p>
        <label for="Id">Id</label>
         <input class="caja idp" id="Id"  name="Id" size="5" />
         <select class="caja" name="Mercancia">
            <option class="caja" value="0" > Opci&oacute;n</option>
            <option class="caja" value="1">Ejemplo 1</option>
            <option class="caja" value="2">Ejemplo 2</option>
            <option class="caja" value="3">Ejemplo 3</option>
            </select><br/> <br/> </div>
    <div id="cantidad">
        <label for="Cantidad">Cantidad</label>
        <input class="caja num" id="Cant" name="Cant" size="5" onblur="validar(this)"/>
        <br/> <br/> </div>
    <div id="botones">
    
        <a href="Inventario.html"><button class="caja" type="submit" >ACEPTAR</button></a>
        <a href="Inventario.html"><button class="caja" type="button">CANCELAR</button></a>
         </div>   
         
         
    
</body>
</html>
