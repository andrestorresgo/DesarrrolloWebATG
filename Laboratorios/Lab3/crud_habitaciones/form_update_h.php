<?php
error_reporting(E_ALL ^ E_WARNING);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    include('conexion.php');
    $sql = "SELECT id,nro,idtipohabitacion,banoprivado,espacio,precio FROM habitaciones where id=$id";

    $resultado = $con->query($sql);

    $row = $resultado->fetch_assoc();
    ?>
    <form action="update_h.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?> ">
            <label for="idtipohabitacion">Id Tipo:</label>
            <input type="text" name="idtipohabitacion" value="<?php echo $row['idtipohabitacion']; ?>">
        </div>
        <div>
            <label for="banoprivado">Bano Privado:</label>
            <input type="number" name="banoprivado" value="<?php echo $row['banoprivado']; ?>">
        </div>
        <div>
            <label for="espacio">Espacio:</label>
            <input type="number" name="espacio" value="<?php echo $row['espacio']; ?>">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" name="precio" value="<?php echo $row['precio']; ?>">
        </div>
       
        <input type="submit" value="Actualizar">



    </form>

</body>

</html>