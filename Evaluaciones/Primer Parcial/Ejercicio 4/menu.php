<?php
include 'funciones.php';

$a = $_POST['a'];
$b = $_POST['b'];

setcookie('a', $a);
setcookie('b', $b);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles4.css">
</head>
<body>
<nav class="vertical" style="width: 130px; height: auto;">
            <li><a href="operacion.php?operacion=sumar" style="background-color: #C60000;">Sumar</a></li>
            <li><a href="operacion.php?operacion=restar" style="background-color: #FFC000;">Restar</a></li>
            <li><a href="operacion.php?operacion=multiplicar" style="background-color: #0070C0;">Multiplicar</a></li>
            <li><a href="operacion.php?operacion=dividir" style="background-color: white;">Dividir</a></li>
        </nav>
</body>

