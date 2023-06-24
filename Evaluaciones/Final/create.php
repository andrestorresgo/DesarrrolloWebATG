<?php 
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];


$imagen_original=$_FILES['imagen']['name'];
$arreglo=explode(".",$imagen_original);
$extension=$arreglo[1];
$imagen=uniqid().'.'.$extension;
include('conexion.php');

copy($_FILES['imagen']['tmp_name'],'images/'.$imagen);
$sql="INSERT into productos (imagen,nombre,descripcion,precio,stock)
VALUES ('$imagen','$nombre','$descripcion',$precio,$stock)";
echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read.php" />