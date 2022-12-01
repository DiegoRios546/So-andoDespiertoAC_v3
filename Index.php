<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      $nombre=$_POST['nombre'];
      $apellido=$_POST['telefono'];
      $email=$_POST['email'];
      $comentario=$_POST['mensaje'];
      
      include_once('conexion.php');
  
      $consulta="insert into contacto values (null,'$nombre', '$telefono', '$email', '$comentario')";
  
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
    <link rel="stylesheet" href="plugin/components/Font Awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugin/whatsapp-chat-support.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <!-- PRELOADER -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estiloscontacto.css">
    <link rel="stylesheet" href="css/estilos_f.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">


</head>

<body onload="move()">
    <!-- PRELOADER -->
    <div id="preloader">
        <div id="percent">1%</div>
        <div id="bar">
            <div id="barconfrm"></div>
        </div>

    </div>
    <div class="container_preloader">
        <section id="inicio">

            <!-- INICIO DE HEADER -->
            <header class="header" id="header">
                <a href="index.php"><img src="images/logo.png" alt=""></a>

                <nav class="navbar" id="nav">
                    <a href="#inicio">Inicio</a>
                    <a href="#conocenos">Conócenos</a>
                    <a href="galeria1.php">Galería</a>
                    <a href="donaciones1.php">Súmate</a>
                    <a href="emergencia1.php">Linea de Emergencia</a>
                    <a href="#contacto">Contacto</a>
                </nav>

                <div class="icons">
                    <div class="fas fa-bars" id="menu-btn"></div>
                </div>

                <form action="" class="login">
                    <h3>Inicia Sesión:</h3>
                    <input type="email" placeholder="Ingresa tu Usuario" class="box">
                    <input type="password" placeholder="Ingresa tu Contraseña" class="box">
                    <input type="submit" value="Iniciar Sesión" class="btn">
                </form>
            </header>
            <!-- FIN DE HEADER -->
        </section>

        <div class="container_all" id="container__all">
            <div class="cover">

                <!--INICIO WAVE-->
                <div class="bg_color"></div>
                <div class="wave w1"></div>
                <div class="wave w2"></div>
                <!--FINAL WAVE-->

                <div class="container__cover">
                    <div class="container__info">
                        <h1>Soñando</h1>
                        <h2>Despierto</h2>
                        <p>Los verdaderos super héroes son los que luchan cada día por la vida, <b>vamos juntos a soñar
                                despiertos.</b></p>
                                <a href="donaciones1.php"><input type="button" value="Donar"></a>
                    </div>
                    <div class="container__vector">
                        <img src="images/familia.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- INICIO DE CONOCENOS -->
<br><br><br>
        <section class="conocenos" id="conocenos">
            <div class="container about_container">
                <div class="about_left">
                    <div class="about_image">
                        <div class="about_image-bg"></div>
                        <div class="about_image-lg">
                            <img src="images/img1.jpg" alt="">
                        </div>
                        <div class="about_image-sm">
                            <img src="images/img1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <h3>Conócenos</h3>
                <p>
                    Soñando despierto es una asociación civil sin fines de lucro,
                    orientada a cumplir sueños de niños con patologías Y pronósticos críticos,
                    creando una experiencia única, para que los sueños de estos niños se hagan realidad,
                    ya que un deseo brinda esperanza y motivación para enfrentar su patología,
                    además de ser una experiencia inolvidable.</p>
                <p>
                    Por otro lado, impacta en una necesidad de urgencia colaborando
                    en el transporte de niños que se encuentran en tratamiento
                    oncológico para que lleguen lo más pronto posible a recibir
                    atención médica cuando se estén cruzando con un cuadro de fiebre y así,
                    no corra peligro su vida.
                </p>
                <p>
                    “Soñando Despierto” A.C. Es una asociación que fué creada en 2019 en Durango, Dgo. México,
                    por María Elena Matuk Plantillas.
                </p>
            </div>
        </section>
        <!-- FIN DE CONOCENOS -->

        <!-- INICIO DE MISION Y VISION -->

        <section class="mision_vision" id="mision_vision">
            <div class="container">
                <div class="ms_box">
                    <div class="ms_img">
                        <img src="images/mision.png" alt="">
                    </div>
                    <div class="ms_heading">
                        <h3>Misión</h3>
                    </div>
                    <p>
                    Impactar de forma positiva en la vida de niños que padecen cáncer brindándoles esperanza para el futuro, fortaleza para enfrentar su enfermedad y alegría que los mantenga felices.
                    </p>
                </div>
                <div class="ms_box">
                    <div class="ms_img">
                        <img src="images/vision.png" alt="">
                    </div>
                    <div class="ms_heading">
                        <h3>Visión</h3>
                    </div>
                    <p>
                    Tener presencia a nivel nacional e internacional transformando la vida de niños en tratamiento oncológico mejorando su calidad de vida.
                    </p>
                </div>
            </div>
        </section>

        <!-- FIN DE MISION Y VISION -->

        <!-- INICIO DE INFORMACION -->
        <div class="estadistica">
            <section id="info" class="info">
                <div class="container info_container">
                    <div class="info_left">
                        <h3>NUESTROS OBJETIVOS</h3>
                        <p>
                        La experiencia que cambió la forma de ver el altruismo y darnos cuenta que sin recursos económicos, actuando desde el corazón se logra lo imposible, es por eso que gracias a quienes aportan a la asociación, cumplimos nuestros objetivos.
                        </p>
                        <a href="#mas_info" class="btn_info">Datos Estadísticos</a>
                    </div>
                    <div class="info_right">
                        <article class="informacion">
                            <h5>1</h5>
                            <p>Cumplir sueños de niños con patologías y pronósticos críticos o reservados
                            </p>
                        </article>
                        <article class="informacion">
                            <h5>2</h5>
                            <p>Crear una experiencia única, para que los sueños de los niños se hagan realidad. 
                            </p>
                        </article>
                        <article class="informacion">
                            <h5>3</h5>
                            <p>Brindar un deseo de esperanza y motivación para enfrentar su patología, además de ser una experiencia inolvidable. 
                            </p>
                        </article>
                        <article class="informacion">
                            <h5>4</h5>
                            <p>Impactar en una necesidad de urgencia colaborando en el transporte de niños que se encuentran en tratamiento oncológico, para que lleguen lo más pronto posible a recibir atención médica.
                            </p>
                        </article>
                        <article class="informacion">
                            <h5>5</h5>
                            <p>Servicio de emergencia cuando estén cursando con un cuadro de fiebre, y así, su vida no corra peligro.
                            </p>
                        </article>
                        <article class="informacion">
                            <h5>6</h5>
                            <p>Buscamos transformar vidas, comenzando por todos los estados de la República, cumpliendo sueños de niños con un pronóstico crítico creando una experiencia única para ellos.
                            </p>
                        </article>
                    </div>
                </div>
            </section>

            <!-- MAS INFORMACION -->

            <section id="mas_info" class="mas_info">
                <div class="container info_container">
                    <article class="mas">
                        <div class="mas_icon"><i class="fa-solid fa-plus"></i></div>
                        <div class="text">
                            <h3>Comunidad o sector beneficiado con el proyecto</h3>
                            <p>Inicialmente, a todos los niños con cáncer en el estado de Durango, sumando 350 actualmente. Caracterizamos el perfil de nuestro sector beneficiado a través de una encuesta realizada a una población de 172 padres de familia de niños con cáncer en Durango.
                            </p>
                        </div>
                    </article>
                    <article class="mas">
                        <div class="mas_icon"><i class="fa-solid fa-plus"></i></div>
                        <div class="text">
                            <h3>Localización</h3>
                            <p>El 55.6% de los niños viven en Durango, 11.1% provienen de Nombre de Dios, 5.6% de Hidalgo, Mezquital, Peñón Blanco, Santa Clara, Santiago Papasquiaro y Jiménez Zacatecas, respectivamente 
                            </p>
                        </div>
                    </article>
                    <article class="mas">
                        <div class="mas_icon"><i class="fa-solid fa-plus"></i></div>
                        <div class="text">
                            <h3>Situación socioeconómica</h3>
                            <p>83.3% de la población beneficiada es de escasos recursos [Ver gráfico 2], donde 72.2% no tienen accesibilidad a un transporte propio y residen a los alrededores de la capital.
                            Respecto a los ingresos al año de familias con niños con cáncer, el 83.3% contestó que gana menos $37,000 al año. Mientras que el 16.7% indicó que recibe entre $37,000 y $75,000 anuales 
                            </p>
                        </div>
                    </article>
                    <article class="mas">
                        <div class="mas_icon"><i class="fa-solid fa-plus"></i></div>
                        <div class="text">
                            <h3>Capacidad de detección de fiebre</h3>
                            <p>Además, se encontró que el 82.4% de las madres de los niños con cáncer sí sabe detectar cuando su hijo tiene fiebre mientras que el 17.6% restante, lo cual implica que se prolonga el tiempo de atención del niño al padecer fiebre. Y de toda esta población, el 23.5% no tiene termómetro para detectar la fiebre. Por lo cual se lanzó una campaña de donación para la compra de termómetros digitales. 
                            </p>
                        </div>
                    </article>
                    <article class="mas">
                        <div class="mas_icon"><i class="fa-solid fa-plus"></i></div>
                        <div class="text">
                            <h3>Tiempo aproximado actual que tardan en recibir atención médica</h3>
                            <p>Por otro lado, se mapeó el tiempo que tardan en llegar al Centro Estatal de Cancerología, el 5.9% demora de 7 a 8 horas en trasladarse, el 23.5% de 3 a 4 horas en llegar a la capital donde se encuentra el Centro de Cancerología y el 70.6% tarda entre 1 y 2 horas.
                            </p>
                        </div>
                    </article>
                    <article class="mas">
                        <div class="mas_icon"><i class="fa-solid fa-plus"></i></div>
                        <div class="text">
                            <h3>Accesibilidad al transporte</h3>
                            <p>Asimismo, el transporte que predomina en las comunidades de las familias de niños con cáncer es el autobús con 66.7% de representación en las zonas donde viven los niños y en segundo lugar los taxis con un 50% de representación. Seguido de los vehículos ya sean propios o de vecinos con un 27.8% de representación. 
                            </p>
                        </div>
                    </article>
                    <article class="mas">
                        <div class="mas_icon"><i class="fa-solid fa-plus"></i></div>
                        <div class="text">
                            <h3>Servicios de emergencia</h3>
                            <p>Respecto a servicios de emergencia en sus comunidades, un 80% cuenta con Ambulancia Pública, 70% con patrullas policiacas, 50% Bomberos y 40% Ambulancia Privada, es decir, no todas las familias cuentan con servicios en sus comunidades en casos de emergencia.
                            </p>
                        </div>
                    </article>
                    <article class="mas">
                        <div class="mas_icon"><i class="fa-solid fa-plus"></i></div>
                        <div class="text">
                            <h3>Cáncer Infantil en México</h3>
                            <p>En los países de ingresos altos, más del 80% de los niños afectados de cáncer se curan, pero en muchos países de ingresos medianos y bajos, como México, la tasa de curación es de aproximadamente 20% (OMS, 2018).
                            </p>
                        </div>
                    </article>
                    <article class="mas">
                        <div class="mas_icon"><i class="fa-solid fa-plus"></i></div>
                        <div class="text">
                            <h3>Riesgo de mortabilidad</h3>
                            <p>Cuando un niño padece cáncer y tiene fiebre es una urgencia que puede poner en peligro su vida, cada hora que pasa sin recibir atención eleva el riesgo de morir por infección 7%. Muchos de estos niños no tienen el recurso para acudir de inmediato a urgencias. Incluso, en los países de ingresos medianos y bajos, las dificultades para acceder a la atención sanitaria desencadenan defunciones evitables.
                            </p>
                        </div>
                    </article>
                    <article class="mas">
                        <div class="mas_icon"><i class="fa-solid fa-plus"></i></div>
                        <div class="text">
                            <h3>Importancia</h3>
                            <p>El cáncer es una de las principales causas de mortalidad entre niños y adolescentes en todo el mundo; cada año se diagnostica cáncer a aproximadamente 300,000 niños de entre 0 y 19 años (OMS, 2017).
                            </p>
                        </div>
                    </article>
                </div>
            </section>
            <!-- FINAL DE INFORMACION -->

            <!-- INICIO DE CONTACTO -->
            <section class="contact" id="contacto">
                <div class="container contact_container">
                    <aside class="contact_aside">
                        <div class="aside_image">
                            <img src="contacto.gif" alt="">
                        </div>
                        <h2>Contáctanos</h2>
                        <p>
                            Si tienes alguna duda sobre lo que realiza nuestra asociación, o quieres ponerte en contacto con nosotros, no dudes en dejarnos un mensaje, o bien encuentranos en nuestras redes sociales adjuntadas en la parte de abajo.
                            Si requieres apoyo dejanos tu solicitud y con gusto te atenderemos.
                        </p>
                        <ul class="contact_details">
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <h5>(+52) 618 106 2909</h5>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <h5>Sonandodespierto.dgo@gmail.com</h5>
                            </li>
                        </ul>
                        <ul class="contact_socials">
                            <li><a href="https://www.facebook.com/sonandodespierto.dgo/" target="blank"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=+526181062909&text=Hola, como puedo ayudar a Soñando Despierto?" target="blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="https://instagram.com/sonandodespierto.dgo?igshid=YmMyMTA2M2Y=" target="blank"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </aside>

                    <!-- <form action="https://formspree.io/f/xoqbqdpw" method="POST" class="contact_form"> -->
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="contact_form">
                        <div class="form_name">
                            <input type="text" name="nombre" placeholder="Nombre completo" required>
                            <input type="text" name="telefono" placeholder="Telefono" required>
                        </div>
                        <input type="email" name="email" placeholder="E-mail" required>
                        <textarea name="mensaje" rows="7" placeholder="Sugerencias" required></textarea>
                        <button type="submit" class="btn_info">Enviar</button>
                    </form>
                    <!-- FIN DE CONTACTO -->
                </div>
            </section>
        </div>
    </div>
   
    
        </div>
           <!-- Button Whatsapp Structure -->
  <div class="whatsapp_chat_support wcs_fixed_right" id="button-w">
    <div class="wcs_button wcs_button_circle">
        <span class="fa fa-whatsapp"></span>
    </div>  
    <div class="wcs_popup">
        <div class="wcs_popup_close">
            <span class="fa fa-close"></span>
        </div>
        <div class="wcs_popup_header">
            <span class="fa fa-whatsapp"></span>
            <strong>Soñando Despierto</strong>
            <div class="wcs_popup_header_description">¿Necesidas ayuda? Envianos tu mensaje </div>
        </div>  
        <div class="wcs_popup_input" 
            data-number="526182663001"
            data-availability='{ "monday":"07:00-22:30", "tuesday":"07:00-22:30", "wednesday":"07:7030-22:30", "thursday":"07:00-22:30",
                 "friday":"07:00-22:30", "saturday":"09:00-18:30", "sunday":"09:00-22:30" }'>
            <input type="text" placeholder="Escribir pregunta!" />
            <i class="fa fa-play"></i>
        </div>
        <div class="wcs_popup_avatar">
            <img src="img/logotipo.png" alt="">
        </div>
    </div>
</div>

    <!-- jQuery 1.8+ -->
<script src="plugin/components/jQuery/jquery-1.11.3.min.js"></script>
    <!-- Plugin JS file -->
<script src="plugin/components/moment/moment.min.js"></script>
<script src="plugin/components/moment/moment-timezone-with-data.min.js"></script> <!-- spanish language (es) -->
<script src="plugin/whatsapp-chat-support.js"></script>
<script>
   $('#button-w').whatsappChatSupport({
        defaultMsg : '',
    });
</script>
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
                    <a href="admin/index.php" target="blank"><i class="fa-solid fa-users-rectangle"></i> Administrador</a>
                </div>
            </div>

            <div class="box__copyright">
                <p>Todos los derechos reservados © 2022 <b>Soñando Despierto</b></p>
            </div>
        </Footer>
    </div>
    <!-- SCRIPTS -->
    <script src="js/script.js"></script>

    <!-- PRELOADER -->
    <script>
        const tll = gsap.timeline({
            paused: "true"
        });
        tll.to("#percent, #bar",{
            duration:.2,
            opacity: 0,
            zIndex: -1
        });
        tll.to("#preloader",{
            duration: .8,
            width: "0%"
        });
        tll.from(".container_preloader",{
            duration: 1.5,
            y: "-150%"
        },"-=.2");
        var width = 1;
        var bar = document.getElementById("barconfrm");
        var id;
        function move(){
            id = setInterval(frame,10);

        }
        function frame(){
            if(width>=100){
                clearInterval(id);
                tll.play();
            }
            else{
                width++;
                bar.style.width = width + "%";
                document.getElementById("percent").innerHTML = width + "%";
            }
        }
    </script>
</body>

</html>