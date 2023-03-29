<?php
if(isset($_COOKIE['a']) and isset($_COOKIE['b'])){
    include 'operaciones.php';
    $operaciones = new operaciones($_COOKIE['a'], $_COOKIE['b']);
    echo 'la suma es '.$operaciones->suma();
}
else{
    echo "No se han recibido los datos";
}
?>
