<?php

include_once("sesiones.php");
$entrar="";


if ($_SERVER["REQUEST_METHOD"]=="POST")
{
   $nombre=$_POST['nombre'];
   $correo=$_POST['correo'];
   $telefono=$_POST['telefono'];
   $comentario=$_POST['comentario'];

   include_once('conexion.php');

   $consulta="insert into contacto values('null','$nombre','$correo','$telefono','$comentario')";

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
<h2 align=center class="titulo">"Administracion del contácto"</h2>
<div class="principal">

<section id="admin" class="seccion">
    <table class="admin">
        <tr class="renglon">
        <td class="opciones-admin">Id</td>
        <td class="opciones-admin">Nombre</td>
        <td class="opciones-admin">Correo</td>
		<td class="opciones-admin">Telefono</td>
		<td class="opciones-admin">Comentarios</td>
    <?php if ($priv=="admin") { ?>
    <td class="opciones-admin">Acciones</td>
    </tr>
    <?php } 
     include_once("conexion.php");
    $consulta="select * from contacto";
    $resultado=mysqli_query($con,$consulta);

    if (mysqli_num_rows($resultado)>0){
        while($fila=mysqli_fetch_assoc($resultado)){
            ?>
    <tr class="renglon">
        <td class="celda"><?php echo $fila['id'] ?></td>
        <td class="celda"><?php echo $fila['nombree'] ?></td>
        <td class="celda"><?php echo $fila['correo'] ?></td>
		<td class="celda"><?php echo $fila['telefono'] ?></td>
		<td class="celda"><?php echo $fila['comentarios'] ?></td>
                                    
        <?php if ($priv=="admin") { ?>
        <td class="celda">
        <a href="visualizar.php?id=<?php echo $fila['id'] ?>&ver=contacto"><button class="btn_acciones"><img src="img/vista.png" class="icono" alt="ver"></button></a>
        <a href="eliminar.php?id=<?php echo $fila['id'] ?>&borrar=contacto"><button class="btn_acciones"><img src="img/eliminar.png" class="icono" alt="eliminar"></button></a>
        </td>
    </tr>
    <?php 
    }
  }
}
?>        
    </table>
<h3>Tienes <?php echo mysqli_num_rows($resultado) ?> solicitudes de contácto</h3>
</section>

</div>
</body>
</html>
<?php
include_once("sweetalert.php");
?>