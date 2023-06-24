<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Datos del alumno</h1>
    <ul>
        <li>Nombre: Andres Alejandro Torres González</li>
        <li>CU: 111-338</li>
        <li>Carrera: Ingeniería en ciencias de la computación</li>
    </ul>
    <div id="divContador" class="divContador">
     <!-- <a href="javascript:cargarContenido('contador.php')">Contador</a> -->
     <?php include "contador.php"?>
     <?php echo $valor ?>
    </div>
</body>
</html>