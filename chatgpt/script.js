function openPopup() {
    document.getElementById("pop_up1").style.display = "block";
}

function closePopup() {
    document.getElementById("pop_up1").style.display = "none";
}

function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var telefono = document.getElementById("telefono").value;
    var hora = document.getElementById("hora").value;

    if (nombre === "" || telefono === "" || hora === "") {
        alert("Por favor, complete todos los campos.");
        return false;
    }
    return true;
}

document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe de forma predeterminada

    var formData = new FormData(document.getElementById("formulario")); // Crear objeto FormData con los datos del formulario

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "guardar.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("pop_up1").style.display = "none"; // Ocultar pop-up1
            document.getElementById("pop_up2").style.display = "block"; // Mostrar pop-up2
            setTimeout(function() {
                document.getElementById("pop_up2").style.display = "none"; // Ocultar pop-up2 después de 3 segundos
            }, 3000);
        }
    };
    xhr.send(formData); // Enviar los datos del formulario como formData
});

// Función para validar que el campo de teléfono solo acepte números
document.getElementById("telefono").addEventListener("input", function(event) {
    var input = event.target;
    var valor = input.value;
    input.value = valor.replace(/\D/g, ''); // Reemplaza cualquier caracter que no sea un dígito por nada
});