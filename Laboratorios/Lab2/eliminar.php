<?php
if(isset($_GET['resultado'])){
    $resultado=explode(',',$_GET['resultado']);
    echo "<h2>Resultado</h2>";
    foreach($resultado as $valor){
        echo $valor."<br>";
    }
} 

function eliminarmayores($n, $mayor){
    $resultado = array();
    foreach($n as $valor){
        if($valor <= $mayor){
            $resultado[] = $valor;
        }
    }
    return $resultado;
}


?>