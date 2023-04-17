<!DOCTYPE html>
<html>
<head>
	<title>Tablero</title>
	<link rel="stylesheet" href="styles1.css">
</head>
<body>
	<?php
		$color = $_POST["color"];
		$nombre = $_POST["nombre"];
		$fila = $_POST["fila"];
		$columna = $_POST["columna"];

		function imprimir_casilla($fila, $columna, $nombre, $color) {
			echo "<td>$nombre  <img src='images/Bowser.png' height='40px'></td>";
		}

		echo "<table class='tabla';>";
		for ($i = 1; $i <= 5; $i++) {
			echo "<tr>";
			for ($j = 1; $j <= 5; $j++) {
				if ($i == $fila && $j == $columna) {
					imprimir_casilla($i, $j, $nombre, $color);
				} else {
					if (($i + $j) % 2 == 0) {
						echo "<td bgcolor='white'></td>";
					} else {
						echo "<td bgcolor='$color'></td>";
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	?>
</body>
</html>
