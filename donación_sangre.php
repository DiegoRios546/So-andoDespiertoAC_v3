<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellidos'];
      $edad=$_POST['edad'];
      $telefono=$_POST['telefono'];
      $direccion=$_POST['direccion'];
      $sangre=$_POST['sangre'];
      $sexo=$_POST['sexo'];
      $estado=$_POST['estado'];
      $municipio=$_POST['municipio'];
      $ciudad=$_POST['ciudad'];
      $fecha=$_POST['fecha'];
      
      include_once('conexion.php');
  
      $consulta="insert into donar_sangre values (null,'$nombre', '$apellido', '$edad', '$telefono', '$direccion', '$sangre', '$sexo', '$estado', '$municipio', '$ciudad', '$fecha')";
  
      $resultado=mysqli_query($con,$consulta);

    if ($resultado){
      echo "<script>
      alert('Registro insertado con Éxito');
       location.href='index.php';
      </script>";
      
  }
  else 
  {
      echo "<script>
      alert('Registro NO insertado, intentelo de nuevo ...');
      location.href='index.php.php';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
   

</head>
<body>
<section id="inicio">
    <!-- INICIO DE HEADER -->
    <header class="header" id="header">
        <img src="images/logo.png" alt="">

        <nav class="navbar" id="nav">
            <a href="Index.php">Inicio</a>
            <a href="index.php">Conócenos</a>
            <a href="galeria1.php">Galería</a>
            <a href="donaciones.php">Súmate</a>
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
                comenzar el llenado de datos <a href="#">aqui</a></p>
            </div>
        </div>

        <section id="registro">
                <div class="container">
                    <div class="form__top">
                        <h2>FORMULARIO DE <span>REGISTRO</span></h2>
                    </div>		
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="contact_form">
                        <input class="input" type="text" name="nombre"  placeholder="Nombre" required autofocus>
                        <input class="input" type="text" name="apellidos" placeholder="Apellidos" required autofocus>
                        <input class="input" type="email" name="edad"  placeholder="Edad" required>
                        <input class="input" type="text"  name="telefono" placeholder="Telefono" required>
                        <input class="input" type="text" name="direccion"  placeholder="Dirección" required>
                        <input class="input" type="text" name="sangre"  placeholder="Tipo Sangre" required autofocus>
                        <input class="input" type="text" name="sexo"  placeholder="Sexo" required autofocus>
                        <input class="input" type="text"  name="estado" placeholder="Estado" required autofocus>
                        <input class="input" type="text" name="municipio" placeholder="Municipio" required autofocus>
                        <input class="input" type="text" name="ciudad"   placeholder="Ciudad" required autofocus>
                        <br>
                        <label>Fecha</label>
                        <input class="input" type="date" name="fecha" placeholder="Fecha" required autofocus>
                        <div class="btn__form">
                            <input class="btn__submit" type="submit" value="ENVIAR">
                            <input class="btn__reset" type="reset" value="LIMPIAR">	
                        </div>
                        <br>
                        <a class="return" href="donaciones.html">Regresar</a>
                    </form>
                </div>

            </div>

        </section>
   


    <!-- SCRIPTS -->
    <script src="js/script.js"></script>
</body>
</html>