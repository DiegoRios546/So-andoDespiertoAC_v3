<?php
   include_once("sesiones.php");

   $us=$_REQUEST['usuario'];
   $entrar="";

   include_once("conexion.php");
   $cryp="['password']";
   $contraseña="select AES_DECRYPT('$cryp'),'visualizarpass') from usuarios";
   $consulta="select * from usuarios where usuario='$us'";
   $resultado=mysqli_query($con,$consulta);

   if ($fila=mysqli_fetch_assoc($resultado))
   {
       //regresa el registro de la consulta
  
   if ($_SERVER["REQUEST_METHOD"]=="POST"){
       $user=$_POST['usuario1'];
       $ps=$_POST['password'];
       $priv=$_POST['privilegio'];
       
       $consulta="update usuarios set usuario='$user' ,password='$ps' ,privilegio='$priv' where usuario='$us'";

       $resultado=mysqli_query($con,$consulta);

       if ($resultado){
        $entrar="actualizar";
       }
       else{
        $entrar="error_actualizar";
       }


   }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::Actualizar Usuario::.</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body class="fondo">
    <section class="seccion-nuevo">
    <h1 class="titulo">.:: Actualizar Usuario ::.</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
        <table align="center" class="tabla">
            <tr class="renglon">
                <td><label for="usuariolbl">Usuario:</label></td>
                <td><input class="input" type="text" name="usuario1" id="usuariolbl" required placeholder="Usuario" autofocus value="<?php echo $fila['usuario'] ?>"></td>
            </tr>
            <tr class="renglon">
               <td><label for="passlbl">Contraseña:</label></td>
                <td><input class="input" type="text" name="password" id="passlbl" required placeholder="Contraseña" value="<?php echo $fila['password'] ?>" ></td>
            </tr>
            <tr class="renglon">
               <td><label for="privlbl">Privilegio:</label></td>
                <td><input class="input" type="text" name="privilegio" id="privlbl" required placeholder="Privilegio" value="<?php echo $fila['privilegio'] ?>" ></td>
            </tr>
            <tr class="renglon">
                <td><input type="submit" name="enviar" Value="Guardar"  class="btn-input"  ></td>
                <td><input type="reset" name="borrar" Value="Borrar"   class="btn-input" ></td>
            </tr>
        </table>
        <input type="hidden" name="usuario" Value="<?php echo $fila['usuario'] ?> "  >
    </form>
    <a class="" href="usuarios.php" ><button class="btn-input">Volver</button></a>
    </section>
</body>
</html>
<?php
include_once("sweetalert.php");
?>