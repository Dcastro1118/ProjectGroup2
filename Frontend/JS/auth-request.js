var loginForm = document.getElementById("login_form");
var registerForm = document.getElementById("register_form");
var logout_button = document.getElementById("logout_button")


if (loginForm) {
    loginForm.addEventListener("submit", loginRequest);
}

if (registerForm) {
    registerForm.addEventListener("submit", registerRequest);
}

if (logout_button) {
    logout_button.addEventListener("click", cerrarSesion);
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
                console.log("Bien");
                window.location.href = "http://localhost/ProjectGroup2/Frontend/HTML/index.php";
                return response.json(); // Procesa la respuesta en JSON si se necesita
            } else {
                throw new Error("Error en el envío del formulario");
            }
        })
        .then(data => {
                alert("Has iniciado sesión correctamente!");
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
function cerrarSesion(event){
    event.preventDefault();
    const bodyData = {
        action: "logout"
    };
    fetch("http://localhost/ProjectGroup2/Backend/Controllers/AuthController.php", { // URL del controlador
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(bodyData)
    })
    alert("La sesion ha sido cerrada con exito!");
    window.location.href = "http://localhost/ProjectGroup2/Frontend/HTML/Login.php";
}
