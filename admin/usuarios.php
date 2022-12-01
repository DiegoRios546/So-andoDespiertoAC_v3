<?php
    include_once("sesiones.php");
	include_once("menus.php");
  $entrar="";

    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
       $usuario=$_POST['usuario'];
       $contraseña=$_POST['contraseña'];
       $priv=$_POST['priv'];
 
       include_once('conexion.php');
 
      //$consulta="insert into usuarios values('$usuario','$contraseña','$priv')";
       $consulta="insert into usuarios(usuario,password,privilegio) values ('$usuario',hex(AES_ENCRYPT('$contraseña','visualizarpass')),'$priv')";
       $resultado=mysqli_query($con,$consulta);
       if($resultado){
        $entrar="usuario";
       }
       else{
        $entrar="error_usuario";
       }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<title>Usuarios</title>
    <script type="text/javascript"  src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>
<body class="">
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
                        <a href="taxis.php"><i class="fa fa-qrcode"></i> Taxis</a>
                    </li>
                    <li>
                        <a href="donaciones.php"><i class="fa fa-table"></i> Donaciones</a>
                    </li>
                    <li>
                        <a class="active-menu" href="usuarios.php"><i class="fa fa-desktop"></i> Usuarios</a>
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
            <style>

    </style>
        
               <div class="panel panel-default">
               <div class="panel-heading">
                             <h1>Administrador de usuarios</h1>
                        </div>
                        
<div class="principal">
  <div class="botones">
    <button id="btn-nuevo" class="btn">NUEVO</button>
    <button id="btn-admin" class="btn">ADMINISTAR</button>
  </div>
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                            <section id="admin">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                       <thead>
                           <tr class="warning">
                               <th>Usuario</th>
                               <th>Contraseña</th>
                               <th>Privilegio</th>
                               <th>Acciones</th>
                           </tr>
                       </thead>
                       <tbody>
                       <?php 
       include_once("conexion.php");
      $consulta="select * from usuarios";
      $resultado=mysqli_query($con,$consulta);

      if (mysqli_num_rows($resultado)>0){
        while($fila=mysqli_fetch_assoc($resultado)){
    ?>
      <tr class="info">
        <td class="celda"><?php echo $fila['usuario'] ?></td>
        <td class="celda"><?php echo $fila['password'] ?></td>
        <td class="celda"><?php echo $fila['privilegio'] ?></td>
        <td class="iconos">

                           <a href="visualizar.php?id=<?php echo $fila['id'] ?>&ver=contacto" data-toggle="modal" data-target="#myModal"><button type="button" class="btn btn-primary btn-circle"><img src="../img/vista.png" class="icono" alt="ver"></button></a>
                           <a href="actualizar_usuarios.php?usuario=<?php echo $fila['usuario'] ?>&editar=usuario" data-toggle="modal" data-target="#myModal"><button class="btn btn-info btn-circle btn_acciones"><img src="../img/editar.png" class="icono" alt="editar"></button></a>
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
       </section>
<center>
<section id="nuevo" class="seccion-nuevo">
<h2>Agregar nuevo "Usuario"</h2>
  <img src="../img/usuarios.png" alt="icono-contacto" class="img">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
	    <table align="center" class="tabla">
	      <tr>
	        <td><label>Usuario:</label></td>
	        <td><input type="text" placeholder="Usuario" class="input" name="usuario" required></td>
	      </tr>
	      <tr>
	        <td><label>Contraseña:</label></td>
	        <td><input type="password"  placeholder="Contraseña" class="input" name="contraseña" required></td>
	      </tr>
	      <tr>
	        <td><label>Privilegio:</label></td>
	        <td>
	          <select class="input" name="priv"  required>
	            <option value="admin">Admin</option> 
	            <option value="estandar">Estandar</option> 
	          </select>
	        </td>
	      </tr>
        <tr>
	        <td><input type="submit" class="btn" value="Enviar"></td>
	        <td><input type="reset" class="btn" value="Borrar"></td>
	      </tr>
	    </table>
	  </form>
</section>
</div>
               </div>
           </div>
       </div>
       </center>
  <script>
$(document).ready(function(){$("#admin").hide();});
 //Cambiar imagen con btn izquierdo
 $("#btn-nuevo").click(function(){
$("#admin").hide(function(){
$("#nuevo").toggle(1000);  }); });

$("#btn-admin").click(function(){
$("#nuevo").hide(function(){
$("#admin").toggle(1000);  }); });

    </script>
</html>
<?php 
include_once("sweetalert.php");
?>