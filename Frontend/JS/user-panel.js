document.getElementById("user-crud-form").addEventListener("submit", searchUser);


async function searchUser(event) {

    formEditar = document.getElementById("result");
    formEditar.style.display = "block";    
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);

    // Convertir los datos del formulario a un objeto JSON
    const formObject = {};
    formData.forEach((value, key) => formObject[key] = value);

    console.log(formObject);

    try {
        const response = await fetch("http://localhost/ProjectGroup2/Backend/Controllers/UserController.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(formObject)
        });

        if (response.ok) {
            // Esperamos la respuesta en formato JSON
            const data = await response.json(); // Esta es la forma correcta de obtener los datos

            if (data.Usuario) {
                // Rellenamos el formulario con los datos
                document.getElementById('id').value = data.Usuario.id;
                document.getElementById('nombre').value = data.Usuario.nombre;
                document.getElementById('apellido').value = data.Usuario.apellido;
                document.getElementById('username').value = data.Usuario.username;
                document.getElementById('telefono').value = data.Usuario.telefono;
                document.getElementById('email').value = data.Usuario.email;
                document.getElementById('identificacion').value = data.Usuario.Identificacion;
                document.getElementById('genero').value = data.Usuario.genero;
            } else {
                console.error('Estructura de respuesta no válida:', data);
            }
        } else {
            throw new Error("Error en el envío del formulario");
        }
    } catch (error) {
        console.error("Hubo un problema con el envío:", error);
        alert("Tu solicitud ha fracasado, hubo un problema.");
    }
}

