<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/logo_min.png" type="image/x-icon">
  <title>Galería</title>

  <!-- LINK DE FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

  <!-- PRELOADER -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"
    integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="css/estilos_galeria.css">
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
            <p>Aquí podrás observar imagenes de diferentes eventos y sobre la organización en general.</p>
            <a href="#galeria"><input type="button" value="Ver"></a>
          </div>
          <div class="container__vector">
            <img src="images/iconos.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="color"></div>
<br><br>
    <main class="main" id="galeria">
      <section class="intro">
        <h1 class="first-heading">GALERÍA</h1>
      </section>

      <section class="work">

        <section class="grid">
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img1.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img2.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img3.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img4.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img5.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img6.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img7.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img8.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img9.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img10.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img11.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img12.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img13.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img14.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img15.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img16.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img17.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img18.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img19.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img20.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img21.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img22.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img23.jpg" alt="Project" class="grid-img">
          </div>
          <div class="project">
            <section class="project-info">
              <h3 class="third-heading">Soñando Despierto</h3>
              <p class="description">“SIGAMOS CUMPLIENDO SUEÑOS, SIGANDO SALVANDO VIDAS, SIGAMOS SOÑANDO DESPIERTO”</p>
            </section>
            <img src="images/img24.jpg" alt="Project" class="grid-img">
          </div>

          <div class="fade"></div>
        </section>
      </section>
  </div>

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

  <!-- PRELOADER -->
  <script>
    const tll = gsap.timeline({
      paused: "true"
    });
    tll.to("#percent, #bar", {
      duration: .2,
      opacity: 0,
      zIndex: -1
    });
    tll.to("#preloader", {
      duration: .8,
      width: "0%"
    });
    tll.from(".container_preloader", {
      duration: 1.5,
      y: "-150%"
    }, "-=.2");
    var width = 1;
    var bar = document.getElementById("barconfrm");
    var id;

    function move() {
      id = setInterval(frame, 10);

    }

    function frame() {
      if (width >= 100) {
        clearInterval(id);
        tll.play();
      } else {
        width++;
        bar.style.width = width + "%";
        document.getElementById("percent").innerHTML = width + "%";
      }
    }
  </script>

  <script src="js/script.js"></script>

</body>

</html>