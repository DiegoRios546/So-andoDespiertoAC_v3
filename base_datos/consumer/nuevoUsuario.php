<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom=$_POST['nombre'];
    $pass=$_POST['pass'];
    $priv=$_POST['privilegio'];
    $in = json_encode(array("nombre"=>"$nom","password"=>"$pass","privilegio"=>"$priv"));

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'http://localhost/SoñandoDespiertoAC1/base_datos/controllers/usuarios.php?op=insert',
CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $in,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

echo "<script>alert('Registro insertado exitosamente')
window.location.href = 'administrarUsuarios.php'
</script>";
}

include_once('navbar.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
</head>
<body style="background-color:#A9F5F2">
    <br>
        <div class="container" style="background-color:#81DAF5">
        <h2 style="text-align:center">Nuevo Usuario</h2>
        <hr>
        <center>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" style="width:50%;">
                        <div class="form-floating ">
                            <label for="nombre" class="form-label">Usuario:</label>
                            <input type="text" placeholder="Nombre" name="nombre" autocomplete="off">
                        </div>
                        <div class="form-floating mt-1">
                            <label for="pass" class="form-label">Contraseña:</label>
                            <input type="text" placeholder="password" name="pass" autocomplete="off">
                        </div>
                        <div class="form-floating mt-1">
                            <label for="privilegio" class="form-label">Privilegio:</label>
                            <input type="text" placeholder="privilegio" name="privilegio" autocomplete="off">
                            
                        </div>

                        <div style="display:flex; justify-content: space-between;" class="mt-3">
                            <input class="btn btn-primary" type="submit" name="enviar">
                            <input class="btn btn-danger" type="reset" name="borrar">
                        </div>
                </form>
                </center>
        <hr>
        </div>
</body>
</html>