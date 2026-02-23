function validarBotones() {
    var botonesBorrar = document.getElementsByClassName('boton-rojo');
    for (var i = 0; i < botonesBorrar.length; i++) {
        botonesBorrar[i].onclick = function () {
            alert('Seguro que quieres borrar esto');
        }
    }

    var botonesEditar = document.getElementsByClassName('boton-verde');
    for (var j = 0; j < botonesEditar.length; j++) {
        botonesEditar[j].onclick = function () {
            alert('Abriendo para editar');
        }
    }
}

window.onload = function () {
    validarBotones();
}
