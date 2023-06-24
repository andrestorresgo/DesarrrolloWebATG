<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Clientes</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<div class="clientes">
<?php
$sql = "SELECT imagen, nombre, correo_electronico, telefono, direccion FROM clientes";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class='tarjeta'>";
    echo "<img width='100px'src='images/" . $row["imagen"] . "' alt=''>";
    echo "<h2>" . $row["nombre"] . "</h2>";
    echo "<p>Correo electrónico: " . $row["correo_electronico"] . "</p>";
    echo "<p>Teléfono: " . $row["telefono"] . "</p>";
    echo "<p>Dirección: " . $row["direccion"] . "</p>";
    echo "</div>";
  }
} else {
  echo "no hay clientes registrados";
}
$con->close();
?>
</div>
</body>
</html>