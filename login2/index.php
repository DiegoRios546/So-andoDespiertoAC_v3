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
               $entrar="admin";

         }
        }
         if($priv=="estandar"){
               $entrar="estandar";
         }
        }
else{
  $entrar="error1";
}
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/SD.png" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>INICIAR SESIÓN</h2>
                        <p>Ingresa tu correo electrónico y contraseña para iniciar sesión</p>
                       
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <input type="text" class="email" name="nombre" placeholder="Usuario" required>
                            <div class="contrasena">
                            <input type="password" id="password" class="password" name="pass" placeholder="Contraseña" style="margin-bottom: 2px;" required>
                            <img src="images/ver.png"  style="width: 8%; height: 8%; margin-top:3%; " onclick="mostrarContrasena()">
                            </div>
                            <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;">¿Olvidaste tu contraseña?</a></p>
                            <input class="btn" type="submit" placeholder="Iniciar Sesión">
                        </form>
                        <div class="social-icons">
                            <p>¿No tienes cuenta? <a href="register.php">Regístrate</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->
    <script src="js/login.js"></script>
        <script src="js/contraseña.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>

</body>

</html>
<?php
include_once("../sweetalert.php");
?>