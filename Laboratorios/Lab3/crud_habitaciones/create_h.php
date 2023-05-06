<?php 
$idtipohabitacion=$_POST['idtipohabitacion'];
$banoprivado=$_POST['banoprivado'];
$espacio=$_POST['espacio'];
$precio=$_POST['precio'];

include('conexion.php');

$sql="INSERT into habitaciones (idtipohabitacion,banoprivado,espacio,precio) 
VALUES ('$idtipohabitacion','$banoprivado','$espacio',$precio)";
echo $sql;
if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

<meta http-equiv="refresh" content="3; url=read_h.php" />