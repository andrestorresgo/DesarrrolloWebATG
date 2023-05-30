<?php
include('conexion.php');

$id = $_GET['id'];
$nombre = $_GET['nombre'];

$sql = "SELECT * FROM provincia WHERE id = $id AND nombre = '$nombre'";
$resultado = $con->query($sql);

$provincias = array();
while ($row = $resultado->fetch_assoc()) {
    $provincias[] = $row;
}

echo json_encode($provincias, JSON_UNESCAPED_UNICODE);

$con->close();
?>