var loginForm = document.getElementById("login_form");
var registerForm = document.getElementById("register_form");


if (loginForm) {
    loginForm.addEventListener("submit", loginRequest);
}

if (registerForm) {
    registerForm.addEventListener("submit", registerRequest);
}

// Función para guardar los datos del usuario en localStorage
function guardarUsuarioEnLocalStorage(userData) {
    localStorage.setItem('usuario', JSON.stringify(userData));  // Convertimos el objeto a JSON para guardarlo
}



function loginRequest(event) {
    event.preventDefault();
    // Capturar los datos del formulario
    const form = event.target;
    const formData = new FormData(form);

    // Convertir los datos del formulario a un objeto JSON
    const formObject = {};
    formData.forEach((value, key) => formObject[key] = value);

    // Enviar los datos como JSON

    console.log(formObject);

    fetch("http://localhost/ProjectGroup2/Backend/Controllers/AuthController.php", { // URL del controlador
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(formObject)
    })
        .then(response => {
            if (response.ok) {
                return response.json(); // Procesa la respuesta en JSON si se necesita
            } else {
                throw new Error("Error en el envío del formulario");
            }
        })
        .then(data => {
            console.log("Formulario enviado correctamente:", data);
            if (data.usuario) {  // Verifica que los datos del usuario existan
                guardarUsuarioEnLocalStorage(data.usuario);
                alert("Has iniciado sesión correctamente!");
            } else {
                alert("No se pudo obtener la información del usuario.");
            }
        })
        .catch(error => {
            console.error("Hubo un problema con el envío:", error);
            alert("Error, contraseña o usuario incorrecto!");
        });
    }

function registerRequest(event) {
    event.preventDefault();
    // Capturar los datos del formulario
    const form = event.target;
    const formData = new FormData(form);

    // Convertir los datos del formulario a un objeto JSON
    const formObject = {};
    formData.forEach((value, key) => formObject[key] = value);

    // Enviar los datos como JSON
    fetch("http://localhost/ProjectGroup2/Backend/Controllers/AuthController.php", { // URL del controlador
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(formObject)
    })
        .then(response => {
        /*  response.text().then(text => console.log("Respuesta cruda del servidor:", text));
        */  if (response.ok) {
                return response.json(); // Procesa la respuesta en JSON si se necesita
            } else {
                throw new Error("Error en el envío del formulario");
            }
        })
        .then(data => {
            console.log("Formulario enviado correctamente:", data);
            alert("Tu soliditud de registro ha sido enviada con exito!");
            window.location.href = "http://localhost/ProjectGroup2/Frontend/HTML/Login.php"; // Ajusta la URL según tu proyecto
        })
        .catch(error => {
            console.error("Hubo un problema con el envío:", error);
            alert("Tu soliditud ha fracasado, hubo un problema.");
});
}