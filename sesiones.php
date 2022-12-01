<?php
   session_start();

   if (!isset($_SESSION['usuario'])){
       header("location:login.php");
   }
   else{
    $us=$_SESSION['usuario'];
    $ps=$_SESSION['password'];
    $priv=$_SESSION['privilegio'];

   }

?>