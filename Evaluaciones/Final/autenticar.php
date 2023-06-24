<?php session_start();
$correo_electronico = $_POST['correo_electronico'];
$contrasena = sha1($_POST['contrasena']);
include('conexion.php');
$sql = "SELECT id,correo_electronico FROM usuarios WHERE correo_electronico='$correo_electronico' AND contrasena='$contrasena'";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
    setcookie('correo_electronico',$correo_electronico,0);
    $fila = $resultado->fetch_assoc();
    $_SESSION['nombre'] = $fila['nombre'];
    $_SESSION['correo_electronico'] = $fila['correo_electronico'];
    $_SESSION['rol'] = $fila['rol'];
    header("location:index.html");
} else {
?>
    Error contraseña no valida
    <meta http-equiv="refresh" content="3; url=login.html" />
<?php
}
?>