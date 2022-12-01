<?php

include_once("sesiones.php");
$entrar="";


if ($_SERVER["REQUEST_METHOD"]=="POST")
{
   $nombre=$_POST['nombre'];
   $apellidos=$_POST['apellidos'];
   $telefono=$_POST['telefono'];
   $matricula=$_POST['matricula'];

   include_once('conexion.php');

   $consulta="insert into taxis values('null','$nombre','$apellidos','$telefono','$matricula')";

   $resultado=mysqli_query($con,$consulta);

   if($resultado){
    $entrar="taxis";
   }
   else{
    $entrar="error_taxis";
   }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>Taxis</title>
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
                <td class="opcion"><a href="/SoñandoDespiertoAC/" class=""><button class="btn-menu"><img src="img/salir.png" class="icono" alt="salir"></button></a></td>
            </tr>
        </table>
    </header>
<h2 align=center class="titulo">"Solicitudes de taxis"</h2>
<div class="principal">

<section id="admin" class="seccion">
    <table class="admin">
        <tr class="renglon">
        <td class="opciones-admin">Id</td>
        <td class="opciones-admin">Nombre</td>
        <td class="opciones-admin">Apellidos</td>
		<td class="opciones-admin">Telefono</td>
		<td class="opciones-admin">Placas</td>
    <?php if ($priv=="admin") { ?>
    <td class="opciones-admin">Acciones</td>
    </tr>
    <?php } 
     include_once("conexion.php");
    $consulta="select * from taxis";
    $resultado=mysqli_query($con,$consulta);

    if (mysqli_num_rows($resultado)>0){
        while($fila=mysqli_fetch_assoc($resultado)){
            ?>
    <tr class="renglon">
        <td class="celda"><?php echo $fila['id'] ?></td>
        <td class="celda"><?php echo $fila['nombre'] ?></td>
        <td class="celda"><?php echo $fila['apellidos'] ?></td>
		<td class="celda"><?php echo $fila['telefono'] ?></td>
		<td class="celda"><?php echo $fila['placas'] ?></td>
                                    
        <?php if ($priv=="admin") { ?>
        <td class="celda">
        <a href="visualizar.php?id=<?php echo $fila['id'] ?>&ver=taxi"><button class="btn_acciones"><img src="img/vista.png" class="icono" alt="ver"></button></a>
        <a href="eliminar.php?id=<?php echo $fila['id'] ?>&borrar=taxi"><button class="btn_acciones"><img src="img/eliminar.png" class="icono" alt="eliminar"></button></a>
        <a href="visualizar.php?id=<?php echo $fila['id'] ?>&ver=taxi"><button class="btn_acciones"><img src="img/aceptar.png" class="icono" alt="ver"></button></a>
        </td>
    </tr>
    <?php 
    }
  }
}
?>        
    </table>
<h3>Tienes <?php echo mysqli_num_rows($resultado) ?> solicitudes pendientes</h3>
</section>
</div>
</body>
</html>
<?php 
include_once("sweetalert.php");
?>