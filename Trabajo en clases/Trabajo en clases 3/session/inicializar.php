<?php session_start();
$a=$_GET['a'];
$b=$_GET['b'];
$_SESSION["a"]=$a;
$_SESSION["b"]=$b;
?>
<meta http-equiv="refresh" content="0;url=menu_operaciones.html">

