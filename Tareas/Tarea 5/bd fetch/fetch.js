function cargarContenido(abrir) {

    var contenedor;
    contenedor = document.getElementById('datos');
    fetch(abrir)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}
function editarPersona(id) {
    var contenedor;
    contenedor = document.getElementById('datos');
    fetch('form_update.php?id=' + id)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);

}
function crearPersona() {
    var contenedor;
    contenedor = document.getElementById('datos');
    var formulario = document.getElementById("form-persona");
    var parametros = new FormData(formulario);
    fetch("create.php",
        {
            method: "POST",
            body: parametros
        })
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}
function actualizarPersona() {
    var formulario = document.getElementById("edit-form");
    var parametros = new FormData(formulario);
    fetch("update.php",
        {
            method: "POST",
            body: parametros
        })
        .then(response => response.text())
        .then(data => cargarContenido('read.php'));
}
function eliminarPersona(id) {
    fetch(`delete.php?=${id}`)
        .then(response => response.text())
        .then(data => cargarContenido('read.php'));
}
