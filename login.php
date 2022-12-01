<?php

session_start();

if (isset($_SESSION))
{
    session_destroy();
}
$entrar="";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
   $us=$_POST['nombre'];
   $ps=$_POST['pass'];

   include_once('conexion.php');

   //$consulta="select usuario,password,privilegio from usuarios where usuario='$us' and password='$ps'";

   $consulta="select usuario,password,privilegio from usuarios where usuario='$us' and password=hex(AES_ENCRYPT('$ps','visualizarpass'))";
  

   if ($consulta){
   $resultado=$con->query($consulta);

   if ($resultado->num_rows > 0)
   {
       while ($fila=$resultado->fetch_assoc())
       {
           $priv=$fila['privilegio'];
           

           session_start();
           $_SESSION['usuario']=$us;
           $_SESSION['password']=$ps;
           $_SESSION['privilegio']=$priv;

           //Entre al menu de opciones 
         
           if($priv=="admin"){
            echo "<script>
            alert('Email enviado com Sucesso!');
            window.location='../admin/index.html';
            </script>";

         }
        }
        


         if($priv=="estandar"){
               $entrar="estandar";
         }
        }
    }
else{
  $entrar="error1";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- ESTILOS -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="images/logo_min.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>


        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya estás Registrado?</h3>
                        <p>Inicia Sesión para entrar</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no estás Registrado?</h3>
                        <p>Regístrate para que puedas Iniciar Sesión</p>
                        <a href="registrarse.php">
                        <button id="btn__registrarse">Regístrarse</button></a>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text"  name="nombre" placeholder="Usuario" class="contenedor__login_input">
                       <div class="contrasena">
                        <input type="password" name="pass" id="password"  placeholder="Contraseña" class="contenedor__login_input" required> 
                       
                        <img src="img/ver.png"  style="width: 10%; height: 10%; margin-top:7%; " onclick="mostrarContrasena()">
                        </div>
                        <p><a href="#">¿Olvidaste tu contraseña?</a></p>
                        <button class="btn_sesion">
                        <Input type="submit"  placeholder="Iniciar Sesión" style="background: none; border: none; color:white;" ></button>
                    </form>
                    
                </div>
            </div>

        </main>

        <script src="js/login.js"></script>
        <script src="js/contraseña.js"></script>
</body>
</html>
<?php
include_once("sweetalert.php");
?>