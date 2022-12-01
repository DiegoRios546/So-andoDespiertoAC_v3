<?php
include_once("sesiones.php");
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<script src="imprimir.js"></script>
    
<body class="fondo">
		<h1 class="titulo">Sistema de administracion "Soñando Despierto"</h1>
		<a href="login.php"> <img src="img/cerrar2022.png" alt="" title="Cerrar Sesión"> </a>
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

<div class="login_texto">
    <h1 class="">Bienvenido al sistema gestor de "Soñando Despierto"</h1>
    <img src="img/logo.png" alt="error al cargar la imagen" class="img-inicio" width="40%">
    <h2 class="texto">Los verdaderos super héroes son los que luchan cada día por la vida, VAMOS JUNTOS A SOÑAR DESPIERTOS.</h2>
</div> 
</body>
</html>