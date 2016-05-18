<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>title</title>
      <link rel="stylesheet" type="text/css" href="css/registro.css"/>
      <link rel="stylesheet" type="text/css" href="css/capas.css"/>
      <script language="javascript" type="text/javascript" src="js/funciones.js"></script>
</head>
<body>
    <form action="" method="get">
        <div id="principal">
            <h1>Menu inventario</h1>
            <label for="Id" class="cajatexto">Id</label>
            <input type="text" id="Id" name="Id" maxlength=10 size=8 class="cajatexto" onblur="validar(this)" /><br/><br/>
            <label for="Nombrea" class="cajatexto">Nombre art&iacute;culo</label>
            <input type="text" id="Nombrea" name="Nombrea" maxlength=30 class="cajatexto" onblur="validar(this)"/><br/><br/>
            <label for="Preciof" class="cajaprecio">Precio de f&aacute;brica</label>
            <input type="text" id="Preciof" name="Preciof" maxlength=8 size=8 class="cajatexto" onblur="validar(this)"/><br/><br/>
            <label for="Preciou" class="cajaprecio">Precio de Unitario</label>
            <input type="text" id="Preciou" name="Preciou" maxlength=8 size=8 class="cajatexto" onblur="validar(this)"/><br/><br/>
            <label for="cant" class="cajaprecio">Cantidad</label>
            <input type="text" id="cant" name="cant" maxlength=8 size=8 class="cajatexto" onblur="validar(this)"/><br/><br/>            
            <button type="submit">Agregar</button>
            <button type="submit">Modificar</button>
            <button type="submit">Borrar</button>    <br/>
            <a href="ent_inventario.php"><button type="button">Entrada de Mercanc&iacute;a</button></a><br/><br/>
            <!--<a href="MenuP.html" class="button" id="btnUsuarios">Regresar</a>-->
        </div>
    </form>
    <div id="tabla">
       <table style="border: solid 1px #000;">
        <caption>Inventario</caption>
        
        <tr>
            <th style="border: solid 1px #000;">Id Articulo</th>
            <th style="border: solid 1px #000;" TD WIDTH="200" >Nombre</th>            
            <th style="border: solid 1px #000;">Precio fabrica</th>
            <th style="border: solid 1px #000;">Precio Unitario</th>
            <th style="border: solid 1px #000;">Existencia</th>
        </tr>
        
        <tr>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
       
        </tr>
        
        
        <tr>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
        <tr>
            <td style="border: solid 1px #000;" >dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
        <tr>
            <td style="border: solid 1px #000;" >dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
   
        <tr>
            <td style="border: solid 1px #000;" >dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
        <tr>
            <td style="border: solid 1px #000;" >dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
        <tr>
            <td style="border: solid 1px #000;" >dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
        <tr>
            <td style="border: solid 1px #000;" >dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
            <td style="border: solid 1px #000;">dato</td>
        </tr>
    </table>
       </div>
    
</body>
</html>
