<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.22/dist/sweetalert2.all.min.js"></script>



<?php if ($entrar=="contacto"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Mensaje enviado !',
  showConfirmButton: false,
  timer: 1500
}).then(function(){
    location.href='index.php';
});
    }
    mensaje();
</script>
<?php }elseif ($entrar=="error_contacto"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'ERROR! Mensaje no enviado',
  showConfirmButton: false,
  timer: 1500
}).then(function(){
    location.href='index.php';
});
    }
    mensaje();
</script>
<?php }?>



<?php if ($entrar=="taxista"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Registro exitoso !',
  showConfirmButton: false,
  timer: 1500
}).then(function(){
    location.href='emergencia1.php';
});
    }
    mensaje();
</script>
<?php }elseif ($entrar=="error_taxista"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'ERROR! Registro no enviado',
  showConfirmButton: false,
  timer: 1500
}).then(function(){
    location.href='emergencia1.php';
});
    }
    mensaje();
</script>
<?php }?>



<?php if ($entrar=="donacion"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Registro exitoso !',
  showConfirmButton: false,
  timer: 1500
}).then(function(){
    location.href='donaciones1.php';
});
    }
    mensaje();
</script>
<?php }elseif ($entrar=="error_donacion"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'ERROR! Registro no enviado',
  showConfirmButton: false,
  timer: 1500
}).then(function(){
    location.href='donar_sangre.php';
});
    }
    mensaje();
</script>
<?php }?>



<?php if ($entrar=="actualizar"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Usuario actualizado exitosamente !',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='usuarios.php';
});
    }
    mensaje();
</script>
<?php }elseif ($entrar=="error_actualizar"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Usuario NO actualizado !',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='usuarios.php';
});
    }
    mensaje();
</script>
<?php }?>


<?php if ($entrar=="usuario"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Usuario insertado exitosamente!',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='usuarios.php';
});
    }
    mensaje();
</script>
<?php }elseif ($entrar=="error_usuario"){ ?>
    <script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Usuario NO insertado !',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='usuarios.php';
});
    }
    mensaje();
</script>
<?php }?>



<?php if ($entrar=="admin"){ ?>
<script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'B I E N V E N I D O al sistema <?php  echo $_SESSION['usuario']?>!',
  showConfirmButton: false,
  timer: 2000
}).then(function(){
    location.href='menu.php';
});
    }
    mensaje();
</script>

<?php } elseif ($entrar=="error1"){ ?>
<script>
    function mensaje(){
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'Usuario y contraseña incorrectas ',
  Text: 'por favor verifique ...',
  showConfirmButton: false,
  timer: 2000
})
    }
    mensaje();
</script>
<?php } ?>
