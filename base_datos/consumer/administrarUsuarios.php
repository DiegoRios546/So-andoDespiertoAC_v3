<?php 
//Crear una interfaz para mostrar en pantalla todos los registros de la tabla categoría
//Consumir la API_RESTful
require_once('datos.php');
include_once('navbar.php');
echo "<br>";
echo "<style> 
th{text-align: center}
</style>";
echo "<body style='background-color:#A9F5F2;'>";
echo "<div style='background-color:#81DAF5'>";
echo "<center>";
echo "<br>";
echo "<table border=2>";
echo "<tr class='table-dark'><th colspan='6'><h2 style='text-align:center'>Registros de Productos</h2></th></tr>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Usuario</th>";
echo "<th>Password</th>";
echo "<th>Privilegio</th>";
echo "<th>Acciones</th>";
for ($i=0; $i<count($datosUs); $i++){
    echo "<tr>";
    echo "<td><center><b>".$datosUs[$i]['id']."</b></center></td>";
    echo "<td>".$datosUs[$i]['usuario']."</td>";
    echo "<td>".$datosUs[$i]['password']."</td>";
    echo "<td>".$datosUs[$i]['privilegio']."</td>";
    echo "<td><a class='btn btn-outline-primary btn-sm' href='actualizarUsuarios.php?id="
    .$datosUs[$i]['id']."&nombre=".$datosUs[$i]['usuario']."&password=".$datosUs[$i]['password']."&privilegio=".$datosUs[$i]['privilegio']."' style='margin-inline: 0.5rem;'>Actualizar</a>  <a class='btn btn-outline-danger btn-sm' href='eliminarUsuarios.php?id=".$datosUs[$i]['id']."' style='margin-inline: 0.5rem;'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
echo "</center>";
echo "</div>";
echo "</body>";
