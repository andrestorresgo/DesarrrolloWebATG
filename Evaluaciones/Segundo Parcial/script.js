function cargarContenido(abrir) {
    var contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest()
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}


//EJ1

function ByN() {
    var elementos = document.querySelectorAll("*");
    for (var i = 0; i < elementos.length; i++) {
      var elemento = elementos[i];
      elemento.style.filter = "grayscale(100%)";
    }
  }
  
  
//EJ2

function dibujarTabla() {
    var filas = parseInt(document.getElementById('filas').value);
    var columnas = parseInt(document.getElementById('columnas').value);
    
    var contenido = document.getElementById('contenido');
    contenido.innerHTML = ''; // Limpiar contenido previo
    
    var tabla = document.createElement('table');
    tabla.style.border = '1px solid black';
    
    for (var i = 0; i < filas; i++) {
      var fila = document.createElement('tr');
      
      for (var j = 0; j < columnas; j++) {
        var celda = document.createElement('td');
        celda.style.border = '1px solid black';
        celda.textContent = 'Celda'; //para que no esté vacío y se puedan ver las celdas
        fila.appendChild(celda);
      }
      
      tabla.appendChild(fila);
    }
    
    contenido.appendChild(tabla);
  }

  function pregunta2(){
    var contenido = document.getElementById("contenido");
    
    titulo.innerHTML = "Pregunta 2 con DOM";

    var inputFilas = document.createElement("input");

    inputFilas.type = "text";
    inputFilas.placeholder = "Filas";

    var inputColumnas = document.createElement("input");

    inputColumnas.type = "text";
    inputColumnas.placeholder = "Columnas";

    var botonDibujar = document.createElement("button");

    botonDibujar.textContent = "Dibujar";
    botonDibujar.addEventListener("click", function () 
{
        var filas = parseInt(inputFilas.value);
        var columnas = parseInt(inputColumnas.value);
        dibujarTabla(filas, columnas);
    });

    contenido.innerHTML = "";
    contenido.appendChild(inputFilas);
    contenido.appendChild(inputColumnas);
    contenido.appendChild(botonDibujar);
}

  //Ej3

  function cargarFormulario() {
    document.getElementById('titulo').textContent = 'Pregunta 3 Insertar en fetch';
    fetch('forminsertar.php')
      .then(response => response.text())
      .then(data => {
        document.getElementById('contenido').innerHTML = data;
        document.getElementById('insertar').addEventListener('click', insertarLibro);
      });
  }

  function insertarLibro(){
    var form =  document.getElementById('forminsertar');
    var datos = new FormData(form);
    var ajax = new XMLHttpRequest()
    ajax.open("POST", 'insertar.php', false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200)
            resultado.innerHTML = ajax.responseText;
    }
    ajax.send(datos);
}

//EJ5

function cambiarImagen() {
    var libroSeleccionado = document.getElementById("libros").value;
    var imagenes = document.getElementsByClassName("imagen");

    for (var i = 0; i < imagenes.length; i++) {
        imagenes[i].style.display = "none";
    }

    document.getElementById(libroSeleccionado).style.display = "block";
}