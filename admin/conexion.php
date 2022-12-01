<?php
   //definir la variables de conexion
   
   $servidor="localhost";
   $bd="sonando_despierto_ac";
   $user="root"; 
   $pass="";

   //Crear conexion
   $con = new mysqli($servidor, $user, $pass, $bd);

   //Checar conexion
   //if ($con->connect_error) {
    //die("Conexion fallida: " . $con->connect_error);
    //}
    //echo "Conectado con exito"; 
  
?>
