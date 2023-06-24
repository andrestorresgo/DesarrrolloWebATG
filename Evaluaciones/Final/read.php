<?php error_reporting(E_ERROR | E_PARSE);

if (!isset($_GET['orden'])) {
    $orden = 'id';
} else {
    $orden = $_GET['orden'];
}
if (!isset($_GET['buscar'])) {
    $buscar = "'%'";
} else {
    $buscar = "'%".str_replace(" ","%",$_GET['buscar'])."%'";
}


include('conexion.php');
$sql = "SELECT id,nombre,descripcion,precio,imagen,stock FROM productos
order by $orden";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <!-- <div>
        <form action="read.php" method="get">
            <label for="buscar">Buscar</label>
            <input type="text" name="buscar" value="<?php echo isset($_GET['buscar'])?$_GET['buscar']:''; ?>">
            <input type="submit" value="Buscar">
        </form>
    </div> -->
    <table>
        <tr>
            <th>Fotografia</th>
            <th><a href="read.php?orden=nombre"> nombre</a></th>
            <th><a href="read.php?orden=descripcion">descripcion</a> </th>
            <th><a href="read.php?orden=precio">precio</a></th>
            <th><a href="read.php?orden=stock">stock</a></th>
            <th>Operaciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
            <td><img width="100px" src="images/<?php echo $row['imagen'];  ?>" alt=""> </td>
            <td><?php echo $row['nombre'] ?> </td>
                <td><?php echo $row['descripcion'] ?></td>
                <td><?php echo $row['precio'] ?></td>
                <td><?php echo $row['stock'] ?></td>
                <td>
                    <?php if ($_SESSION['rol'] == 'administrador') { ?>
                        <a href="form_update.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>


<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}
?>
    <a href="javascript:cargarContenido('forminsertar.html')">Insertar</a>
<div id="insertar">

</div>
<?php
if ($_SESSION['rol'] == 'administrador') {
?>
    <!-- <a href="form_create.php">Insertar</a> -->
<?php
}
$con->close();
?>