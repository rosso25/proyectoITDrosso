<?php
    session_start();
    include_once('conexion.inc.php');
    $link=conectar();
    $valido=false;
    //$password= crypt("123456","cesar");
    //$qry_login="call sp_agregar_empleado('Ibarra Trejo', 'Administrador','IT001','Cesar', 'cesarin','$password')";
    //$resultset=$link->Execute($qry_login);
    
    if(isset($_GET['usuario'])){
 
        foreach($_GET as $campo=>$valor){
            $llave=$campo;
            $$llave=$valor;
        }
        $contra=crypt($contra,"cesar");
        $qry_usuarios="call sp_buscar_id ('$usuario','$contra')";
        $rst_usuarios=$link->Execute($qry_usuarios);
        if($rst_usuarios->RecordCount())
        {
            
          $_SESSION['nombre']=$rst_usuarios->fields('nomusuario');
          $_SESSION['autorizado']='22032821';
          $_SESSION['cargo']=$rst_usuarios->fields('cargo');
         // $nombre=$rst_usuarios->fields('nombre');
          $valido=true;
          ?>
            <h3><?php print "Bienvenido";
             
            ?></h3><?php    
        }else
        {
            $_SESSION['autorizado']='no';
            $valido=false;
            
        }
    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Ingresar</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
     <script type="text/javascript">
      window.onload=function() {
      
      var oFormulario=document.login;
      oFormulario.usuario.focus();
        
      }
      
      function validar() {
         var oFormulario=document.login;
         if (oFormulario.usuario.value==null || oFormulario.usuario.value.length<=0) {
             oFormulario.usuario.focus();
            return false;
         }
          if (oFormulario.contra.value==null || oFormulario.contra.value.length<=0) {
             oFormulario.contra.focus();
            return false;
         
         }
         return true;
      }
    </script>
</head>
<body>
    <?php if(isset($valido) && !$valido){?>
    <form name="login" action="" method="get" onsubmit="return validar();">
        <div id="principal" margin="auto">
            <h1>Ingresar</h1>
            <label for="Usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" maxlength=10/></br></br>
            <label for="contra">Contrase&ntilde;a</label>
            <input type="password" id="contra" name="contra" maxlength=8/></br></br>
            <a href="#"><button type="submit" href="#">Acceder</button></a>
        </div>
    </form>
    <?php
    }
    ?>
</body>
</html>