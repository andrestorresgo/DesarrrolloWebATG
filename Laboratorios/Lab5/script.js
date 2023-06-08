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
    var numero = document.getElementById("numero").value;
    var tope = document.getElementById("tope").value;
    var seleccion = document.querySelector('input[name="seleccion"]:checked').value;
    var resultado = "";

    for (var i = numero; i <= tope; i++) {
        resultado += "<tr>";
        resultado += "<td>" + numero + "</td>";

        var operacion = "";
        var resultadoOperacion = "";

        if (seleccion === "opcion1") {
            operacion = "+";
            resultadoOperacion = Number(numero) + Number(i);
        } else if (seleccion === "opcion2") {
            operacion = "-";
            resultadoOperacion = Number(numero) - Number(i);
        } else if (seleccion === "opcion3") {
            operacion = "x";
            resultadoOperacion = Number(numero) * Number(i);
        } else if (seleccion === "opcion4") {
            operacion = "/";
            resultadoOperacion = Number(numero) / Number(i);
        }

        resultado += "<td>" + operacion + "</td>";
        resultado += "<td>" + i + "</td>";
        resultado += "<td>=</td>";
        resultado += "<td>" + resultadoOperacion + "</td>";
        resultado += "</tr>";
    }

    document.getElementById("Resultado").innerHTML = "<table>" + resultado + "</table>";
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


function actualizarCalendario() {
    var ajax = new XMLHttpRequest();
  
    ajax.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        document.getElementById("resultado").innerHTML = this.responseText;
      }
    };
  
    var mes = document.getElementById("mes").value;
    var anio = document.getElementById("anio").value;
  
    ajax.open("GET", "calendario.php?mes=" + mes + "&anio=" + anio, true);
    ajax.send();
}
