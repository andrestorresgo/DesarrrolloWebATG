<?php
include('conexion.php');

$id = $_GET['id'];
$nombre = $_GET['nombre'];

$sql = "SELECT * FROM departamentos WHERE id = $id AND nombre = $nombre";
$resultado = $con->query($sql);
$departamentos = array();
while ($row = $resultado->fetch_assoc()) {
    $departamentos[] = $row;
}
echo json_encode($agenda, JSON_UNESCAPED_UNICODE);


$con->close();
