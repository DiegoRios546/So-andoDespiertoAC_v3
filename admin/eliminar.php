<?php
   include_once("sesiones.php");
   include_once("conexion.php");
  
 
   $entrar="";
   $borrar=$_REQUEST['borrar'];



      //donaciones
      if($borrar=="donacion"){
         $id=$_REQUEST['id'];
         $consulta="delete from donar_sangre where id='$id'";
      $resultado=mysqli_query($con,$consulta);
   
      if ($resultado){
           echo "<script>
                   alert('Registro eliminado con Éxito');
                   location.href='donaciones.php';
                </script>";
      }
      else{
           echo "<script>
                   alert('Registro NO eliminado... VERIFIQUE');
                   location.href='donaciones.php';
                 </script>";
   
      }
   
      }


   //contactos
   else if($borrar=="contacto"){
      $id=$_REQUEST['id'];
      $consulta="delete from contacto where id='$id'";
   $resultado=mysqli_query($con,$consulta);

   if ($resultado){
        echo "<script>
                alert('Registro eliminado con Éxito');
                location.href='contacto.php';
             </script>";
   }
   else{
        echo "<script>
                alert('Registro NO eliminado... VERIFIQUE');
                location.href='contacto.php';
              </script>";

   }

   }
//taxis
   else if($borrar=="taxi"){
      $id=$_REQUEST['id'];
      $consulta="delete from taxis where id='$id'";
   $resultado=mysqli_query($con,$consulta);
   if ($resultado){
      echo "<script>
              alert('Registro eliminado con Éxito');
              location.href='taxis.php';
           </script>";
 }
 else{
      echo "<script>
              alert('Registro eliminado con Éxito');
              location.href='taxis.php';
            </script>";

 }
   }


   //usuarios
   else if($borrar=="usuario"){
      $us=$_REQUEST['usuario'];
      $consulta="delete from usuarios where usuario='$us'";
   $resultado=mysqli_query($con,$consulta);

   if ($resultado){
        echo "<script>
        alert('Registro eliminado exitosamente');
        location.href='usuarios.php';
      </script>";

   }
   else{
        echo "<script>
                alert('Registro NO eliminado... VERIFIQUE');
                location.href='usuarios.php';
              </script>";

   }

   }
   include_once("sweetalert.php");
?>