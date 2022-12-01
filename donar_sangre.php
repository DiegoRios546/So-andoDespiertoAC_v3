<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {

      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $edad=$_POST['edad'];
      $telefono=$_POST['phone'];
      $sangre=$_POST['tipo'];
      $sexo=$_POST['genero'];
      $estado=$_POST['estado'];
      $ciudad=$_POST['ciudad'];
      $municipio=$_POST['municipio'];
      $fecha=$_POST['fecha'];
      
      include_once('conexion.php');
  
      $consulta="insert into donar_sangre values (null,'$nombre', '$apellido', '$edad', '$telefono', '$sangre', '$sexo', '$estado', '$ciudad', '$municipio', '$fecha')";
  
      $resultado=mysqli_query($con,$consulta);

    if ($resultado){
      echo "<script>
      alert('Registro insertado con Éxito');
       location.href='donar_sangre.php';
      </script>";
      
  }
  else 
  {
      echo "<script>
      alert('Registro NO insertado, intentelo de nuevo ...');
      location.href='donar_sangre.php.php';
      </script>";
      
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo_min.png" type="image/x-icon">
    <title>Soñando Despierto</title>
    <!-- LINK DE FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilos_f.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
   

</head>
<body>
<section id="inicio">
    <!-- INICIO DE HEADER -->
    <header class="header" id="header">
        <img src="images/logo.png" alt="">

        <nav class="navbar" id="nav">
            <a href="index.php">Inicio</a>
            <a href="index.php">Conócenos</a>
            <a href="galeria1.php">Galería</a>
            <a href="donaciones1.php">Súmate</a>
            <a href="emergencia1.php">Linea de Emergencia</a>
            <a href="#contacto">Contacto</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
    </header>
    <!-- FIN DE HEADER -->
</section>

    
    <!-- REGISTRO PARA DONACIÓN -->
        <div class="formulario">
            <h1>Donación de sangre</h1>
            <h2>¡Agradecemos tu interés por ayudar a miles de niños y niñas con cáncer!</h2>
            <p>Te informamos que tus datos serán integrados a nuestra base de datos para poder recibir tu solicitud, 
                una vez revisada tu información, nos pondremos en contacto contigo para comenzar el proceso de donación, 
                te mantendremos informado. Gracias por aportar a nuestra asociación a brindar un deseo de esperanza, quizá 
                mañana tú o los tuyos puedan necesitar una transfusión que salve sus vidas, de ser así, no dudes en contactarnos. Te 
                pedimos que te registres de manera consciente, evita enviar información que nos pueda provocar confusiones, 
                recuerda que debes ser mayor de +18 años, no pongas en peligro a nadie por eso conoce los requisitos antes de 
                comenzar el llenado de datos <a href="https://www.gob.mx/issste/es/articulos/requisitos-y-proceso-para-la-donacion-de-sangre?idiom=es" target="blank">aqui</a></p>
            </div>
        </div>

        <style>
            .reg{
                width: 50%;
                display: flex;
                margin-left: auto;
                margin-right: auto;
                padding: 5vmin;
                margin-top: 1rem;
                margin-bottom: 1rem;
                font-size: 18px;
            }

            .reg input{
                font-size: 12px;
            }
            .form-top{
                text-align: center;
                margin: 1rem;
                font-size: 17px;
                font-weight: 800;
                color: #04B2D9;
            }

            .sp{
                color: #F244A4;
            }

            
        </style>
        <br><br><br><br><br><br>
        <section id="registro">
            <div class="form-top">
			<h2>REGISTRO <span class="sp"> DE DONADORES VOLUNTARIOS</span></h2>	
            </div>	
            <div class="reg">	
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form_reg">
			<input class="input" type="text" name="nombre" placeholder=" Nombre:" required autofocus>
            <input class="input" type="text" name="apellido" placeholder="  Apellidos:" required>
            <input class="input" type="text" name="edad" placeholder="  Edad:" required>
			<input class="input" type="text" name="phone" placeholder=" Teléfono:" required>
            <input class="input" type="text" name="tipo" placeholder=" Tipo de sangre:" required>
            <input class="input" type="text" name="genero" placeholder="  Género:" required>
            <br>
            <label for="Fecha">Fecha solicitud:</label>
            <input class="input" type="date" name="fecha" placeholder=" Fecha:" required>
            <br>
            <input class="input" type="text" name="estado" placeholder=" Estado:" required>
            <input class="input" type="text" name="ciudad" placeholder="Ciudad:" required>
            <input class="input" type="text" name="municipio" placeholder="Municipio:" required>
            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
        </div>
        </section>

        <Footer>
            <div class="container__footer">

                <div class="box__footer">
                    <div class="terms">
                        <img src="images/logo.png" alt="">
                    </div>
                </div>

                <div class="box__footer">
                    <h2>Patrocinadores</h2>
                    <a href="#">Generales de Durango</a>
                </div>

                <div class="box__footer">
                    <h2>Menú</h2>
                    <a href="#">Inicio</a>
                    <a href="#">Conócenos</a>
                    <a href="#">Galería</a>
                    <a href="#">Súmate</a>
                    <a href="#">Linea de Emergencia</a> 
                    <a href="#">Contacto</a>              
                </div>

                <div class="box__footer">
                    <h2>Redes Sociales</h2>
                    <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                    <a href="#"><i class="fab fa-whatsapp-square"></i> Whatsapp</a>
                    <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
                    <a href="#"><i class="fa-solid fa-users-rectangle"></i> Administrador</a>
                </div>
            </div>

            <div class="box__copyright">
                <p>Todos los derechos reservados © 2022 <b>Soñando Despierto</b></p>
            </div>
        </Footer>
    </div>
   


    <!-- SCRIPTS -->
    <script src="js/script.js"></script>
</body>
</html>