function numeros(char) {
    var contrasena = document.getElementById("contrasena");
    contrasena.value = contrasena.value + char;
}

function mezclar(array) {
    var ordenActual = array.length, aux, ordenRandom;

    while (0 !== ordenActual) {
        ordenRandom = Math.floor(Math.random() * ordenActual);
        ordenActual -= 1;

        aux = array[ordenActual];
        array[ordenActual] = array[ordenRandom];
        array[ordenRandom] = aux;
    }

    return array;
}

function generarNumeros() {
    var valoresNumeros = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C'];
    valoresNumeros = mezclar(valoresNumeros);
    var divNumeros = document.getElementById("numpad");
    for (var i = 0; i < valoresNumeros.length; i++) {
        var button = document.createElement("input");
        button.type = "button";
        button.value = valoresNumeros[i];
        button.onclick = (function() {
            var valorActual = valoresNumeros[i];
            return function() { numeros(valorActual); };
        })();
        divNumeros.appendChild(button);
        if ((i + 1) % 3 == 0) {
            divNumeros.appendChild(document.createElement("br"));
        }
    }
}

function cargarContenido(abrir){
    var contenedor
    contenedor = document.getElementById('main');
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function cargarContador(abrir){
    var contenedor = document.getElementById('divContador');
    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

window.onload = function() {
    cargarContador('contador.php');
};

function cargarInsertar(abrir){
    var contenedor = document.getElementById('insertar');
    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

var ajax = new XMLHttpRequest();
ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
    }
};
ajax.open("GET", "contador.php", true);
ajax.send();