<?php
    error_reporting(E_ERROR | E_PARSE);
    $archivo_original = $_FILES['imagen']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = $arreglo[1];
    $fotografia = uniqid() . '.' . $extension;
    echo $fotografia;
    include("conexion.php");
    copy($_FILES['imagen']['tmp_name'], 'images/' . $fotografia);
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $id_editorial = $_POST['editorial'];
    $anio = $_POST['anio'];
    $sql = "INSERT INTO libros (imagen,titulo,autor,ideditorial,anio,idusuario,idcarrera) VALUES ('$fotografia','$titulo', '$autor', $id_editorial, $anio, 1, 1)";
    if ($con->query($sql) === TRUE) {
        echo "Se creo el registro correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
?>

<meta http-equiv="refresh" content="3; url=parcial2.html" />