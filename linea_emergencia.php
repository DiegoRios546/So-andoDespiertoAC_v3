<?php

include_once("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linea de emergencia</title>
    <link rel="stylesheet" type="text/css" href="css/estilos_taxis.css">
</head>
<body>
<h1>Taxis disponibles</h1>
<section class="">
        <table class="tabl">
                    <?php
                         include_once("conexion.php");
                        $consulta="select * from taxis";
                        $resultado=mysqli_query($con,$consulta);

                        if (mysqli_num_rows($resultado)>0){
                            while($fila=mysqli_fetch_assoc($resultado))
                            {
                             ?>
            <tr>
            <div class="credencial">
                <div class="credencial1">
                <h1>Taxista  <?php echo $fila['nombre'] ?></h1>
                <img src="" alt="img-taxista">
                </div>
                <div class="credencial1">
                <p>Nombre: <?php echo $fila['nombre'] ?> <?php echo $fila['apellidos'] ?></p>
                <p>Telefono: <?php echo $fila['telefono'] ?></p>
                <p>Matricula: <?php echo $fila['matricula'] ?></p>
                <button class="btn_ver"><a  class="btn_ver" href="visualizar.php?id=<?php echo $fila['id'] ?>&ver=taxi">VER</button></a>
            </div>
            </div>
            </tr>
			   <?php
                            }
                        }

                    ?>
			</table>
		<h3>Existen <?php echo mysqli_num_rows($resultado) ?> Taxistas</h3>
</section>
</body>
</html>