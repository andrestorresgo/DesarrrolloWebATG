<?php
class Examen {
    private $cadena1;
    private $cadena2;
    
    function __construct($cadena1, $cadena2) {
        $this->cadena1 = $cadena1;
        $this->cadena2 = $cadena2;
    }
    
    function cruzar() {
        $letras_comunes = array_intersect(str_split($this->cadena1), str_split($this->cadena2));
        
        if (empty($letras_comunes)) {
            echo "no existen letras comunes";
            return;
        }
        
        $tabla = "<table>";
        for ($i = 0; $i < strlen($this->cadena2); $i++) {
            $tabla .= "<tr>";
            for ($j = 0; $j < strlen($this->cadena1); $j++) {
                if ($this->cadena2[$i] == $this->cadena1[$j]) {
                    $tabla .= "<td>" . $this->cadena1[$j] . "<br>" . $this->cadena2[$i] . "</td>";
                } else {
                    $tabla .= "<td></td>";
                }
            }
            $tabla .= "</tr>";
        }
        $tabla .= "</table>";
    }
}

$cadena1 = "hola";
$cadena2 = "mundo";
$examen = new Examen($cadena1, $cadena2);
$examen->cruzar();
