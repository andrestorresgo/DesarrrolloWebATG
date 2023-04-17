<?php session_start();

$n = $_SESSION['n'];

$vector1 = $_POST['vector1'];
$vector2 = $_POST['vector2'];

$resultado = array();

echo "El resultado es:<br>";

for ($i = 0; $i < $n; $i++) {
  $resultado[$i] = $vector1[$i] + $vector2[$i];
  echo $resultado[$i];
  echo"<br>";
}
?>
