function cargarContenido(abrir) {
    var contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function cargarTabla() {
    fetch("tabla.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("contenido").innerHTML = data;
        })
        .catch(error => {
            console.error("Error al cargar la tabla:", error);
        });
}

function aplicarCambios() {
    var elementoSeleccionado = document.getElementById("elemento-seleccionado").value;
    var ancho = document.getElementById("ancho").value + "px";
    var alto = document.getElementById("alto").value + "px";
    var color = document.getElementById("color").value;
    
    var elemento = document.getElementById(elementoSeleccionado);
    if (elemento) {
        elemento.style.width = ancho;
        elemento.style.height = alto;
        elemento.style.backgroundColor = color;
    }
}

function generarTabla() {
    var seleccion = document.querySelector('input[name="seleccion"]:checked').value;
    var texto = document.getElementById("texto").value;
    
    fetch("calcular.php?seleccion=" + seleccion + "&numero=" + texto)
        .then(response => response.json())
        .then(data => {
            var tabla = '<table>';
            for (var i = 0; i < data.filas.length; i++) {
                tabla += '<tr>';
                for (var j = 0; j < data.columnas.length; j++) {
                    tabla += '<td>' + data.filas[i] + ' - ' + data.columnas[j] + '</td>';
                }
                tabla += '</tr>';
            }
            tabla += '</table>';
            document.getElementById("Resultado").innerHTML = tabla;
        })
        .catch(error => {
            console.error("Error al generar la tabla:", error);
        });
}

function cargarSeleccionar() {
    fetch("seleccionar.html")
        .then(response => response.text())
        .then(data => {
            document.getElementById("contenido").innerHTML = data;
        })
        .catch(error => {
            console.error("Error al cargar seleccionar:", error);
        });
}

function actualizarCalendario() {
    var anio = $("#anio").val();
    var mes = $("#mes").val();
    
    $.get("calendario.php", { anio: anio, mes: mes })
        .done(function(data) {
            $("#resultado").html(data);
        })
        .fail(function() {
            console.error("Error al actualizar el calendario");
        });
}