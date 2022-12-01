<?php
   include_once("sesiones.php");
   $ver=$_REQUEST['ver'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISUALIZAR</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body class="fondo">
<?php
//donaciones
    if($ver=="donacion"){
?>
<div>
    <h1 class="titulo">.:: Ver donacion ::.</h1>
        <table class="ver">
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
            </tr>
<?php
    include_once("conexion.php");
    $id=$_REQUEST['id'];
    $consulta="select * from donar_sangre where id='$id'";
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
            </tr> 
<?php
    }
}
?>
        </table>
        <button onclick="print()" class="btn-input">Imprimir</button>
    <a class="" href="donaciones.php" ><button class="btn-input">Volver</button></a>
<?php
     }
?>
</div> 




<?php
//taxis
    if($ver=="taxi"){
?>
<div>
    <h1 class="titulo">.:: Ver taxista ::.</h1>
        <table class="ver">
            <tr class="renglon">
            <td class="opciones-admin">Id</td>
        <td class="opciones-admin">Nombre</td>
        <td class="opciones-admin">Apellidos</td>
		<td class="opciones-admin">Telefono</td>
		<td class="opciones-admin">Placas</td>
            </tr>
<?php
    include_once("conexion.php");
    $id=$_REQUEST['id'];
    $consulta="select * from taxis where id='$id'";
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
            </tr> 
<?php
    }
}
?>
        </table>
        <button onclick="print()" class="btn-input">Imprimir</button>
    <a class="" href="taxis.php" ><button class="btn-input">Volver</button></a>
<?php
     }
?>
</div> 


<?php
//contactos
    if($ver=="contacto"){
?>
<div>
    <h1 class="titulo">.:: Ver Contacto ::.</h1>
        <table class="ver">
            <tr class="renglon">
        <td class="opciones-admin">Id</td>
        <td class="opciones-admin">Nombre</td>
        <td class="opciones-admin">Correo</td>
		<td class="opciones-admin">Telefono</td>
		<td class="opciones-admin">Comentarios</td>
            </tr>
        <?php
           include_once("conexion.php");
           $id=$_REQUEST['id'];
            $consulta="select * from contacto where id='$id'";
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
                </tr> 
        <?php
            }
        }
        ?>
            </table>
        </div>
        <button onclick="print()" class="btn-input">Imprimir</button>
    <a class="" href="contactos.php" ><button class="btn-input">Volver</button></a>
<?php
     }
?>
</div>



<?php
//usuarios
    if($ver=="usuario"){
?>
<div>
    <h1 class="titulo">.:: Ver Usuario ::.</h1>
        <table class="ver">
            <tr class="renglon">
    <td class="opciones-admin">Usuario</td>
    <td class="opciones-admin">Password</td>
    <td class="opciones-admin">Privilegio</td>
            </tr>
<?php
    include_once("conexion.php");
     $us=$_REQUEST['usuario'];
     $consulta="select * from usuarios where usuario='$us'";
     $resultado=mysqli_query($con,$consulta);

     if (mysqli_num_rows($resultado)>0){
        while($fila=mysqli_fetch_assoc($resultado)){
?>
            <tr class="renglon">
        <td class="celda"><?php echo $fila['usuario'] ?></td>
        <td class="celda"><?php echo $fila['password'] ?></td>
        <td class="celda"><?php echo $fila['privilegio'] ?></td>
            </tr> 
<?php
    }
}
?>
         </table>
    <button onclick="print()" class="btn-input">Imprimir</button>
    <a class="" href="usuarios.php" ><button class="btn-input">Volver</button></a>
<?php
     }
?>
</div>
</body>
</html>