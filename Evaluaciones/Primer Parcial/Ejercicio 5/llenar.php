<link rel="stylesheet" href="styles5.css">

<?php
session_start();

$n = $_POST['n'];

$_SESSION['n'] = $n;

echo "<form action='resultado.php' method='post'>";
echo "<div class='enrectar'>";
echo "<table>";
echo "<td>";
for ($i = 0; $i < $n; $i++) {
  echo "<tr>";
  echo "<input type='text' name='vector1[$i]' id='vector1[$i]'>";
  echo "<br>";
  echo "</tr>";
}
echo "</td>";
echo "</table>";
echo "<table>";
echo "<td>";
for ($i = 0; $i < $n; $i++) {
  echo "<tr>";
  echo "<input type='text' name='vector2[$i]' id='vector2[$i]'>";
  echo "<br>";
  echo "</tr>";
}
echo "</td>";
echo "</table>";
echo "</div>";
echo "<input type='submit' value='calcular'>";
echo "</form>";
?>
