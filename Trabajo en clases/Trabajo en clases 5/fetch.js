function cargarProvincias() {
    var departamentoSelect = document.getElementById("departamento");
    var departamentoId = departamentoSelect.value;
    var provinciaSelect = document.getElementById("id");
    
    provinciaSelect.innerHTML = "";
    
    fetch(`read_provincia.php?departamentoId=${departamentoId}`)
      .then(response => response.json())
      .then(data => {
        data.forEach(provincia => {
          var option = document.createElement("option");
          option.value = provincia.id;
          option.text = provincia.nombre;
          provinciaSelect.appendChild(option);
        });
      })
      .catch(error => console.log(error));
  }
  
  function cargarDepartamentos() {
    fetch('read_departamento.php')
      .then(response => response.json())
      .then(data => {
        var departamentoSelect = document.getElementById("departamentos");

        data.forEach(departamento => {
          var option = document.createElement("option");
          option.value = departamento.id;
          option.text = departamento.nombre;
          departamentoSelect.appendChild(option);
        });
      })
      .catch(error => console.log(error));
  }
  
  cargarDepartamentos();
  