<?php
	
	include_once("sesiones.php");
  $entrar="";

    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
       $usuario=$_POST['usuario'];
       $contraseña=$_POST['contraseña'];
       $priv=$_POST['priv'];
 
       include_once('conexion.php');
 
      //$consulta="insert into usuarios values('$usuario','$contraseña','$priv')";
       $consulta="insert into usuarios(usuario,password,privilegio) values ('$usuario',hex(AES_ENCRYPT('$contraseña','visualizarpass')),'$priv')";
       $resultado=mysqli_query($con,$consulta);
       if($resultado){
        $entrar="usuario";
       }
       else{
        $entrar="error_usuario";
       }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>Usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script type="text/javascript"  src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body class="fondo">
<header  >
        <table class="menu">
            <tr class="menu1">
            <td class="opcion"><a  href="menu.php" class=""><button class="btn-menu">Inicio</button></a></td>
                <td class="opcion"><a  href="donaciones.php" class=""><button class="btn-menu">Donaciones de sangre</button></a></td>
                <td class="opcion"><a  href="taxis.php" class=""><button class="btn-menu">Taxis</button></a></td>
                <td class="opcion"><a  href="contactos.php" class=""><button class="btn-menu">Contáctos</button></a></td>
				        <td class="opcion"><a  href="usuarios.php" class=""><button class="btn-menu">Usuarios</button></a></td>
                <td class="opcion"><a href="/SoñandoDespiertoAC_v3/login.php" class=""><button class="btn-menu"><img src="img/salir.png" class="icono" alt="salir"></button></a></td>
            </tr>
        </table>
    </header>
<h2 align="center" class="titulo">Administracion de usuarios</h2>
<div class="principal">
  <div class="botones">
    <button id="btn-nuevo">NUEVO</button>
    <button id="btn-admin">ADMINISTAR</button>
  </div>
<section class="seccion" id="admin">
  <table class="admin">
    <tr class="renglon">
    <td class="opciones-admin">Usuario</td>
    <td class="opciones-admin">Password</td>
    <td class="opciones-admin">Privilegio</td>
    <?php if ($priv=="admin") { ?>
    <td class="opciones-admin">Acciones</td>
    </tr>
    <?php } 
       include_once("conexion.php");
      $consulta="select * from usuarios";
      $resultado=mysqli_query($con,$consulta);

      if (mysqli_num_rows($resultado)>0){
        while($fila=mysqli_fetch_assoc($resultado)){
    ?>
      <tr class="renglon">
        <td class="celda"><?php echo $fila['usuario'] ?></td>
        <td class="celda"><?php echo $fila['password'] ?></td>
        <td class="celda"><?php echo $fila['privilegio'] ?></td>
                                    
        <?php if ($priv=="admin") { ?>
        <td class="celda">
        <!--     -->
        <a href="visualizar.php?usuario=<?php echo $fila['usuario'] ?>&ver=usuario"><button class="btn_acciones"><img src="img/vista.png" class="icono" alt="ver"></button></a>
        <a href="actualizar_usuarios.php?usuario=<?php echo $fila['usuario'] ?>&editar=usuario"><BUtton class="btn_acciones"><img src="img/editar.png" class="icono" alt="editar"></BUtton></a>
        <a href="eliminar.php?usuario=<?php echo $fila['usuario'] ?>&borrar=usuario" id="eliminar"><BUtton class="btn_acciones"><img src="img/eliminar.png" class="icono" alt="eliminar"></BUtton></a>
        </td>
      </tr> 
        <?php
      }
    }
  }
?>
  </table>
  <h3>Existen <?php echo mysqli_num_rows($resultado) ?> usuarios</h3>
</section>

<section id="nuevo" class="seccion-nuevo">
<h2 align="center">Agregar nuevo "Usuario"</h2>
  <img src="img/usuarios.png" alt="icono-contacto" class="img">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
	    <table align="center" class="tabla">
	      <tr>
	        <td><label>Usuario:</label></td>
	        <td><input type="text" placeholder="Usuario" class="input" name="usuario" required></td>
	      </tr>
	      <tr>
	        <td><label>Contraseña:</label></td>
	        <td><input type="password"  placeholder="Contraseña" class="input" name="contraseña" required></td>
	      </tr>
	      <tr>
	        <td><label>Privilegio:</label></td>
	        <td>
	          <select class="input" name="priv"  required>
	            <option value="admin">Admin</option> 
	            <option value="estandar">Estandar</option> 
	          </select>
	        </td>
	      </tr>
        <tr>
	        <td><input type="submit" class="btn-input" value="Enviar"></td>
	        <td><input type="reset" class="btn-input" value="Borrar"></td>
	      </tr>
	    </table>
	  </form>
</section>
</div>

<?php if ($priv=="estandar"){ ?>
  <script>
$(document).ready(function(){$("#btn-nuevo").hide();});
$(document).ready(function(){$("#btn-admin").hide();});
$(document).ready(function(){$("#admin").show();});
$(document).ready(function(){$("#nuevo").hide();});
  </script>

  <?php } if ($priv=="admin"){ ?>
    <script>
            $(document).ready(function(){$("#nuevo").hide();});
 //Cambiar imagen con btn izquierdo
 $("#btn-nuevo").click(function(){
$("#admin").hide(function(){
$("#nuevo").toggle(1000);  }); });

$("#btn-admin").click(function(){
$("#nuevo").hide(function(){
$("#admin").toggle(1000);  }); });

    </script>
</html>
<?php } 
include_once("sweetalert.php");
?>