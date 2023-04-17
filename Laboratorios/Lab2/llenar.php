<?php
include 'eliminar.php';
$numeros=array();
$mayor=$_GET['n'];
$tamano=$_GET['tamano'];

if($tamano > $mayor){
    echo "Error: El tamaño del vector no puede ser mayor que la cantidad de numero disponibles ";
} else {
for($i=0;$i<$tamano;$i++){
    if($mayor-$i < 1){
        break;
    }
    $numeros[]=$mayor-$i-1; 
}
$resultado=eliminarmayores($numeros,$mayor);
header('Location: eliminar.php?resultado='.implode(',', $resultado));
}

?>