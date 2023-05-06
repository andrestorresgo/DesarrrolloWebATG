<?php
error_reporting(E_ALL ^ E_WARNING);
?>
<?php

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
$sql = "SELECT id,nro,idtipohabitacion,banoprivado,espacio,precio FROM habitaciones 
where nro like $buscar 
order by $orden
";
echo $sql;
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
?>
    <div>
        <form action="read_h.php" method="get">
            <label for="buscar">Buscar</label>
            <input type="text" name="buscar" value="<?php echo isset($_GET['buscar'])?$_GET['buscar']:''; ?>">
            <input type="submit" value="Buscar">
        </form>
    </div>
    <table>
        <tr>
            <th><a href="read_h.php?orden=id"> ID </a></th>
            <th><a href="read_h.php?orden=nro">NUMERO</a> </th>
            <th><a href="read_h.php?orden=idtipohabitacion">TIPO HABITACION</a> </th>
            <th><a href="read_h.php?orden=banoprivado">BANO PRIVADO</a></th>
            <th><a href="read_h.php?orden=espacio">ESPACIO</a></th>
            <th><a href="read_h.php?orden=precio">PRECIO</a></th>

            <th>Operaciones</th>
        </tr>
        <?php while ($row = $resultado->fetch_assoc()) {
        ?>
            <tr>
            <td><?php echo $row['id'] ?> </td>
            <td><?php echo $row['nro'] ?> </td>
            <td><?php echo $row['idtipohabitacion'] ?> </td>
            <td><?php echo $row['espacio'] ?> </td>
            <td><?php echo $row['banoprivado'] ?> </td>
            <td><?php echo $row['precio'] ?></td>
                <td>
                    
                        <a href="form_update_h.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="delete_h.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                </td>
                
            </tr>
        <?php } ?>
    </table>


<?php
} else {
    echo "la tabla no tiene datos que mostrar";
}
?>
    <a href="form_create_h.html">Insertar</a>
   
<?php

$con->close();
?>