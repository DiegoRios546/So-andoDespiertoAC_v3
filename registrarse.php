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
   $tel=$_POST['tel'];
   $correo=$_POST['correo'];

   include_once('conexion.php');

   $consulta="insert into usuarios(usuario,password,privilegio,telefono,Correo) values ('$us','$ps','estandar','$tel','$correo')";
    if($consulta){
        $resultado=$con->query($consulta);
       if($resultado){
        $entrar="registro"; 
       }
       else{
        $entrar="error_registro";
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
<body onload="register()">


        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya estás Registrado?</h3>
                        <p>Inicia Sesión para entrar</p>
                        <a href="login.php">
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button></a>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no estás Registrado?</h3>
                        <p>Regístrate para que puedas Iniciar Sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                

                    <!--Register-->
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" name="nombre" placeholder="Nombre completo" class="contenedor__login_input" required>
                        <input type="text" placeholder="Teléfono" name="tel" class="contenedor__login_input" required>
                        <input type="email" placeholder="Correo" name="correo" class="contenedor__login_input" required>
                        <input type="password" name="pass" id="password" class="contenedor__login_input" placeholder="Contraseña" required>
                        <p class="advertencia_login">Por favor considere esto para poder crear su contraseña:</p>
                        <span id="mensaje"></span>
                        <ul>
                        <li id="mayus">1 mayuscula</li>
                        <li id="special">Caracteres especiales</li>
                        <li id="numbers">Digitos</li>
                        <li id="lower">Minusculas</li>
                        <li id="len">minimo 8 caracteres</li>
                        </ul>
                        <Input type="submit" class="btn_sesion" placeholder="Regístrarse">
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