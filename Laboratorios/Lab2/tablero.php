<?php
  $table = array(
    array(0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 0, 0, 0, 0)
  );

  $destacada = false;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tablero</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <form method="get" action="tablero.php">
    <label for="fila">Fila:</label>
    <input type="number" id="fila" name="fila" min="1" max="8" value="<?php echo $fila; ?>">
    <label for="col">Columna:</label>
    <input type="number" id="col" name="col" min="1" max="8" value="<?php echo $col; ?>">
    <input type="submit" value="Destacar Celda">
  </form>

  <table>
    <?php

      foreach ($table as $i => $fila) {
        echo "<tr>";

        foreach ($fila as $j => $cell) {

          if (($i + $j) % 2 == 0) {
            echo "<td class='blanco'> </td>";
          } else {
            echo "<td class='negro'> </td>";
          }
          if ($i + 1 == $fila && $j + 1 == $col && !$destacada) {
            echo "<td class='destacada'> </td>";
            $destacada = true;
          }
        }
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>
