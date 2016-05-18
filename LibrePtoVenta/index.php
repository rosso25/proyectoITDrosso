<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
    <title>Muebler&iacute;a "Muebles Finos"</title>
    <script language="javascript" type="text/javascript" src="js/interfaz.js"></script>
    		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#encabezado {
				margin:auto;
				
				width:500px;
				color: #ffffff;
			}
			
			body{
				
				background: url(img/Madera.jpg) repeat;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#51b0ff;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#95cfff;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
			
		</style>
</head>
<body>
    <?php include_once("menu.php");?>
	<!--		
    <div id="encabezado">
    <h1 style="text-align: center">Muebler&iacute;a "Muebles Finos"</h1>
        <ul class="nav">
            <li><a href="ventas.php" target="contenido">Venta</a></li>
            <li><a href="#">Inventario</a>
                <ul>
                    <li><a href="Inventario.php" target="contenido">Ver Inventario</a></li>
                    <li><a href="ent_inventario.php" target="contenido">Entrada de Inventario</a></li>
                </ul>
            </li>
            <li><a href="#">Usuarios</a>
                <ul>
                    <li><a href="tabla_usuarios.php" target="contenido">Ver Usuarios</a></li>
                    <li><a href="formulario_registro.php" target="contenido">Registro de Usuario</a></li>
                </ul>
            </li>
			<li><a href="#">Proveedores</a>
                <ul>
                    <li><a href="Tabla_proveedor.php" target="contenido">Ver Proveedores</a></li>
                    <li><a href="editar_proveedor.php" target="contenido">Registro de Proveedores</a></li>
                </ul>
            </li>
			<li><a href="#">Clientes</a>
				<ul>
					<li><a href="Clientes.php" target="contenido">Ver Clientes</a></li>
					<li><a href="editar_clientes.php" target="contenido">Registro de Clientes</a></li>
				</ul>
			</li>
        </ul>
    </div>

    <div name="contenido" style="height: 500px; width: 75%; margin: auto">
		<iframe style="width: 100%; height: 100%; border-style: none;" name="contenido" >
			<div>
			<?php require_once("Principal.php");?>
			</div>
		</iframe>
    </div>-->
</body>
</html>
