<?php

include_once("sesiones.php");
$entrar="";


if ($_SERVER["REQUEST_METHOD"]=="POST")
{
   $nombre=$_POST['nombre'];
   $apellidos=$_POST['apellidos'];
   $edad=$_POST['edad'];
   $telefono=$_POST['telefono'];
   $sangre=$_POST['sangre'];
   $sexo=$_POST['sexo'];
   $fecha=$_POST['fecha'];
   $estado=$_POST['estado'];
   $ciudad=$_POST['ciudad'];
   $municipio=$_POST['municipio'];

   include_once('conexion.php');

   $consulta="insert into donar_sangre values('null','$nombre','$apellidos','$edad','$telefono','$sangre','$sexo','$fecha','$estado','$ciudad','$municipio')";

   $resultado=mysqli_query($con,$consulta);

   if($resultado){
    $entrar="contacto";
   }
   else{
    $entrar="error_contacto";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>Contactos</title>
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
                <td class="opcion"><a href="login.php" class=""><button class="btn-menu"><img src="img/salir.png" class="icono" alt="salir"></button></a></td>
            </tr>
        </table>
    </header>
<h2 align=center class="titulo">"Donaciones de sangre"</h2>
<div class="principal">

<section id="admin" class="seccion1">

    <table class="admin">
        <tr class="renglon">
        <td class="opciones-admin">Id</td>
        <td class="opciones-admin">Nombre</td>
        <td class="opciones-admin">Apellidos</td>
        <td class="opciones-admin">Edad</td>
		<td class="opciones-admin">Telefono</td>
		<td class="opciones-admin">Tipo de sangre</td>
        <td class="opciones-admin">Sexo</td>
        <td class="opciones-admin">Fecha</td>
        <td class="opciones-admin">Estado</td>
        <td class="opciones-admin">Ciudad</td>
        <td class="opciones-admin">Municipio</td>
    <?php if ($priv=="admin") { ?>
    <td class="opciones-admin">Acciones</td>
    </tr>
    <?php } 
     include_once("conexion.php");
    $consulta="select * from donar_sangre";
    $resultado=mysqli_query($con,$consulta);

    if (mysqli_num_rows($resultado)>0){
        while($fila=mysqli_fetch_assoc($resultado)){
            ?>
    <tr class="renglon">
        <td class="celda"><?php echo $fila['id'] ?></td>
        <td class="celda"><?php echo $fila['nombre'] ?></td>
        <td class="celda"><?php echo $fila['apellidos'] ?></td>
        <td class="celda"><?php echo $fila['edad'] ?></td>
		<td class="celda"><?php echo $fila['telefono'] ?></td>
		<td class="celda"><?php echo $fila['tipo_sangre'] ?></td>
        <td class="celda"><?php echo $fila['sexo'] ?></td>
        <td class="celda"><?php echo $fila['fecha'] ?></td>
        <td class="celda"><?php echo $fila['estado'] ?></td>
        <td class="celda"><?php echo $fila['ciudad'] ?></td>
        <td class="celda"><?php echo $fila['municipio'] ?></td>
                                    
        <?php if ($priv=="admin") { ?>
        <td class="celda">
        <a href="visualizar.php?id=<?php echo $fila['id'] ?>&ver=donacion"><button class="btn_acciones"><img src="img/vista.png" class="icono" alt="ver"></button></a>
        <a href="eliminar.php?id=<?php echo $fila['id'] ?>&borrar=donacion"><button class="btn_acciones"><img src="img/eliminar.png" class="icono" alt="eliminar"></button></a>
        </td>
    </tr>
    <?php 
    }
  }
}
?>        
    </table>
    <h3>Tienes <?php echo mysqli_num_rows($resultado) ?> solicitud pendientes</h3>
</section>

</div>
</body>
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