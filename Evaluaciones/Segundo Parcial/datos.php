<?php
include("conexion.php");

$sql = "SELECT titulo, imagen FROM libros";
$result = $con->query($sql);

$librosData = array();
$options = "";
$imagenes = "";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $libro = array(
            "titulo" => $row["titulo"],
            "imagen" => $row["imagen"]
        );
        array_push($librosData, $libro);

        $options .= "<option value='" . $row["imagen"] . "'>" . $row["titulo"] . "</option>";
        $imagenes .= "<div id='" . $row["imagen"] . "' class='imagen'><img src='images/" . $row["imagen"] . "' alt='" . $row["titulo"] . "'></div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <style>
        .imagen {
            display: none;
        }
    </style>
       <script src="script.js"></script>
</head>
<body>
    <label for="libros">Selecciona un libro:</label>
    <select id="libros" onchange="cambiarImagen()">
        <?php echo $options; ?>
    </select>

    <div id="imagenContainer">
        <?php echo $imagenes; ?>
    </div>
</body>
</html>
