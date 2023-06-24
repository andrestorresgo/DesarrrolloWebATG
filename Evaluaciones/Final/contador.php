<?php
    if (isset($_COOKIE['contador'])) {
        $valor = $_COOKIE['contador'] + 1;
        // echo "Es la visita $valor";	
        setcookie('contador', $valor, 0);
    } else {
        // echo "Es la visita 1";
        setcookie('contador', 1, 0);
    }
?>