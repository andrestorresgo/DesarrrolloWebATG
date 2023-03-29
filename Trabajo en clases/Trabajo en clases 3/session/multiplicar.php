<?php session_start();
if(isset($_SESSION["a"]) and isset($_SESSION["b"])){
    include 'operaciones.php';
    $operaciones = new operaciones($_SESSION["a"], $_SESSION["b"]);
    echo 'la multiplicación es '.$operaciones->multiplicacion();
}
else{
    echo "No se han recibido los datos";
}
?>