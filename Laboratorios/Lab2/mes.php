<!DOCTYPE html>
<html>
  <head>
    <title>Document</title>
  </head>
  <body>
    <?php
      $meses = array(
        1 => 'Enero',
        2 => 'Febrero',
        3 => 'Marzo',
        4 => 'Abril',
        5 => 'Mayo',
        6 => 'Junio',
        7 => 'Julio',
        8 => 'Agosto',
        9 => 'Septiembre',
        10 => 'Octubre',
        11 => 'Noviembre',
        12 => 'Diciembre'
      );

      if (isset($_GET['n']) && $_GET['n'] >= 1 && $_GET['n'] <= 12) {
        $n = $_GET['n'];
        echo '<label for="mes">Selecciona un mes:</label>';
        echo '<select name="mes">';
        echo '<option value="' . $n . '">' . $meses[$n] . '</option>';
        echo '</select>';
      } else {
        echo '<p>El valor de n no es un número del 1 al 12.</p>';
      }
    ?>
  </body>
</html>
