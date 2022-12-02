<?php 
$id = $_REQUEST['id'];
$nombre = $_REQUEST['nombre'];
$password = $_REQUEST['password'];
$privilegio = $_REQUEST['privilegio'];

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['id'];
    $nom=$_POST['username'];
    $pass=$_POST['pass'];
    $priv=$_POST['privilegio'];

    $in = json_encode(array("id"=>"$id","nombre"=>"$nom","password"=>"$pass","privilegio"=>"$priv"));


$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'http://localhost/SoñandoDespiertoAC1/base_datos/controllers/usuarios.php?op=update',
CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS => $in,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

echo "<script>alert('Registro actualizado exitosamente')
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
    <title>Actualizar Usuario (<?php echo $id ?>)</title>
</head>
<body style="background-color:#A9F5F2">
    <br>
        <div class="container" style="background-color:#81DAF5">
        <h2 style="text-align:center"> Actualizar Usuario (<?php echo $id ?>)</h2>
        <hr>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" style="width:50%; margin-inline: auto; justify-content: space-around;">
                        <div class="form-floating mt-1">
                            <label for="username" class="form-label">Usuario:</label>
                            <br>
                            <input type="text" placeholder="Nombre" name="username" value="<?php echo $nombre ?>" autocomplete="off">
                        </div>
                        <div class="form-floating mt-1">
                            <label for="pass" class="form-label">Contraseña:</label>
                            <br>
                            <input type="text" placeholder="password" name="pass" value="<?php echo $password ?>" autocomplete="off">
                        </div>
                        <div class="form-floating mt-1">
                            <label for="privilegio" class="form-label">Privilegio:</label>
                            <br>
                            <input type="text" placeholder="privilegio" name="privilegio" value="<?php echo $privilegio ?>" autocomplete="off">
                        </div>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
                            <input type="hidden" name="password" value="<?php echo $password ?>">
                            <input type="hidden" name="privilegio" value="<?php echo $privilegio ?>">

                        <div style="display:flex; justify-content: space-between;" class="mt-3">
                            <input class="btn btn-primary" type="submit" name="enviar">
                            <input class="btn btn-danger" type="reset" name="borrar">
                        </div>
                </form>
        <hr>
        </div>
</body>
</html>