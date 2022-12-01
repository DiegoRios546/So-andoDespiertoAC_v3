<?php 
include_once("sesiones.php");
include_once("menus.php");


//administrador

$entrar="";


if ($_SERVER["REQUEST_METHOD"]=="POST")
{
   $nombre=$_POST['nombre'];
   $correo=$_POST['correo'];
   $telefono=$_POST['telefono'];
   $comentario=$_POST['comentario'];

   include_once('conexion.php');

   $consulta="insert into contacto values('null','$nombre','$correo','$telefono','$comentario')";

   $resultado=mysqli_query($con,$consulta);

   if($resultado){
    $entrar="contacto";
   }
   else{
    $entrar="error_contacto";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>
<body>
               <!--/. NAV TOP  menu lateral -->
               <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="contacto.php"><i class="fa fa-edit"></i> Mensajes</a>
                    </li>
                    <li>
                        <a class="active-menu" href="taxis.php"><i class="fa fa-qrcode"></i> Taxis</a>
                    </li>
                    <li>
                        <a href="donaciones.php"><i class="fa fa-table"></i> Donaciones</a>
                    </li>
                    <li>
                        <a href="usuarios.php"><i class="fa fa-desktop"></i> Usuarios</a>
                    </li>
                    <li>
                        <a href="ui-elements.html"><i class="fa fa-desktop"></i> UI Elements</a>
                    </li>
					<li>
                        <a href="chart.html"><i class="fa fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tab-panel.html"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
                    </li>
                    <li>
                        <a href="table.html"><i class="fa fa-table"></i> Responsive Tables</a>
                    </li>
                    <li>
                        <a href="form.html"><i class="fa fa-edit"></i> Forms </a>
                    </li>

                    <!-- opcion del menu con mas opciones-->
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- /. NAV SIDE  -->
<div id="wrapper">
    <div id="page-wrapper">
            <div id="page-inner">
        
               <div class="panel panel-default">
                        <div class="panel-heading">
                        <h1>Taxistas</h1>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                       <thead>
                       <tr class="warning">
                            <th class="">Id</th>
                            <th class="">Nombre</th>
                            <th class="">Apellidos</th>
		                    <th class="">Telefono</th>
		                    <th class="">Placas</th>
                            <th class="">Acciones</th>
                           </tr>
                       </thead>
                       <tbody>
                       <?php 
     include_once("conexion.php");
    $consulta="select * from taxis";
    $resultado=mysqli_query($con,$consulta);

    if (mysqli_num_rows($resultado)>0){
        while($fila=mysqli_fetch_assoc($resultado)){
            ?>
    <tr class="info">
        <td class="celda"><?php echo $fila['id'] ?></td>
        <td class="celda"><?php echo $fila['nombre'] ?></td>
        <td class="celda"><?php echo $fila['apellidos'] ?></td>
		<td class="celda"><?php echo $fila['telefono'] ?></td>
		<td class="celda"><?php echo $fila['placas'] ?></td>
        <td class="iconos">
        <a href="visualizar.php?id=<?php echo $fila['id'] ?>&ver=contacto" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-primary btn-circle"><img src="../img/vista.png" class="icono" alt="ver"></button></a>
        <a href="eliminar.php?id=<?php echo $fila['id'] ?>&borrar=contacto" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-danger btn-circle"><img src="../img/eliminar.png" class="icono" alt="eliminar"></button></a>
        <a href=""><button type="button" class="btn btn-success btn-circle"><img src="../img/aceptar.png" class="icono" alt="hecho"></button></a>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title Here</h4>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </td>
    </tr>
    <?php 
    
  }
}
?>        
                       </tbody>
                   </table>
               </div>
           </div>
       </div>

       <!--  end  Context Classes  -->


   
   <script src="assets/js/jquery-1.10.2.js"></script>
   <!-- Bootstrap Js -->
 <script src="assets/js/bootstrap.min.js"></script>
 <!-- Metis Menu Js -->
 <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- DATA TABLE SCRIPTS -->
 <script src="assets/js/dataTables/jquery.dataTables.js"></script>
 <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
 </script>
      <!-- Custom Js -->
 <script src="assets/js/custom-scripts.js"></script>
</body>
</html>
<?php
include_once("sweetalert.php");
?>