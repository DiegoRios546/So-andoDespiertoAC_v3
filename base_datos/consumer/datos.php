<?php
$endpointUs="http://localhost/SoñandoDespiertoAC1/base_datos/controllers/usuarios.php?op=selectall";
$datosUs=json_decode(file_get_contents($endpointUs), true);
?>