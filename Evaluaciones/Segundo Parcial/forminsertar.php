<?php
    include("conexion.php");
    $sql = "SELECT * FROM editoriales";
    $consulta = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
    <form action="insertar.php" method="post">
        <input type="file" name="imagen">
        <br>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">
        <br>
        <label for="autos">Autor</label>
        <input type="text" name="autor">
        <br>
        <label for="editorial">Editorial</label>
        <select name="editorial">
            <?php while($editorial = mysqli_fetch_array($consulta)){ ?>
                <option value="<?php echo $editorial['id'] ?>"><?php echo $editorial['editorial'] ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="anio">Año</label>
        <input type="number" name="anio">
        <br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>
