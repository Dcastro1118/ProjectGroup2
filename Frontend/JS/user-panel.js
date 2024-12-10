document.addEventListener("DOMContentLoaded", function () {
    // URL de tu backend donde obtendrás la lista de usuarios
    const url = 'http://localhost/ProjectGroup2/Backend/Controllers/UserController.php'; // Cambia esta URL según tu API

    // Realizar la solicitud al backend usando fetch
    fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: '{"action" : "getAllUsers"}' // El body con la acción
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`Error en la solicitud: ${response.status}`);
        }
        return response.json(); // Convertir la respuesta a JSON
    })
    .then(data => {
        // Aquí procesas los datos y llenas la tabla
        fillTableWithData(data); // Llamamos a la función para llenar la tabla
    })
    .catch(error => {
        console.error("Hubo un problema con la solicitud:", error);
    });
});


var userCrudPanel = document.getElementById("user-crud-form")
var userForm = document.getElementById("user-form")
var buttonCreateUser = document.getElementById("button-create-user")
var userCreateForm = document.getElementById("user-create-form")
var buttonCancel = document.getElementById("button-cancelar")
var deleteUserButton = document.getElementById("delete-user")


if (userCrudPanel){
    userCrudPanel.addEventListener("submit", searchUser);
}

if (userForm){
    userForm.addEventListener("submit", saveChanges);
}

if (buttonCreateUser) {
    buttonCreateUser.addEventListener("click", createUserPanel);
}
if (userCreateForm) {
    userCreateForm.addEventListener("submit", createUser);
}
if (buttonCancel) {
    buttonCancel.addEventListener("click", cancelUpdate);
}
if (deleteUserButton) {
    deleteUserButton.addEventListener("click", deleteUser);
}

function cancelUpdate(event) {
    event.preventDefault();
    formEditar = document.getElementById("result");
    formEditar.style.display = "none";
}


function deleteUser(event) {
    event.preventDefault();
    const id = document.getElementById("id").value;

    fetch("http://localhost/ProjectGroup2/Backend/Controllers/UserController.php", { // URL del controlador
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ action : "deleteUser", userId : id })
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
            window.location.href = "http://localhost/ProjectGroup2/Frontend/HTML/UsersPanel.php";

        })
        .catch(error => {
            console.error("Hubo un problema con el envío:", error);
            alert("Tu soliditud ha fracasado, hubo un problema.");
});
    
}




async function searchUser(event) {

    formEditar = document.getElementById("result");

    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);
    // Convertir los datos del formulario a un objeto JSON
    const formObject = {};
    formData.forEach((value, key) => formObject[key] = value);
    console.log(JSON.stringify(formObject));
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
                formEditar.style.display = "block";
                // Rellenamos el formulario con los datos
                document.getElementById('id').value = data.Usuario.id;
                document.getElementById('nombre').value = data.Usuario.nombre;
                document.getElementById('apellido').value = data.Usuario.apellido;
                document.getElementById('user-name').value = data.Usuario.username;
                document.getElementById('telefono').value = data.Usuario.telefono;
                document.getElementById('e-mail').value = data.Usuario.email;
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

function saveChanges(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);

    // Convertir los datos del formulario a un objeto JSON
    const formObject = {};
    formData.forEach((value, key) => formObject[key] = value);
    console.log(JSON.stringify(formObject))

    fetch("http://localhost/ProjectGroup2/Backend/Controllers/UserController.php", { // URL del controlador
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
            window.location.href = "http://localhost/ProjectGroup2/Frontend/HTML/UsersPanel.php";

        })
        .catch(error => {
            console.error("Hubo un problema con el envío:", error);
            alert("Tu soliditud ha fracasado, hubo un problema.");
});
    
}

function createUserPanel() {
    formCreate = document.getElementById("createUser");
    formCreate.style.display = "block";
}

function createUser(event) {
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
                window.location.href = "http://localhost/ProjectGroup2/Frontend/HTML/UsersPanel.php"; 
            })
            .catch(error => {
                console.error("Hubo un problema con el envío:", error);
                alert("Tu soliditud ha fracasado, hubo un problema.");
    });
}


function fillTableWithData(users) {
    const tableBody = document.querySelector('#users-table tbody');
    tableBody.innerHTML = ''; // Limpiar la tabla antes de llenarla

    // Iterar sobre la lista de usuarios y crear filas
    users.forEach(user => {
        const row = document.createElement('tr'); // Crear una nueva fila de la tabla

        // Crear celdas para cada propiedad del usuario
        const cellId = document.createElement('td');
        cellId.textContent = user.user_id; // Usar los datos del JSON
        row.appendChild(cellId);

        const cellName = document.createElement('td');
        cellName.textContent = user.name;
        row.appendChild(cellName);

        const cellLastName = document.createElement('td');
        cellLastName.textContent = user.last_name;
        row.appendChild(cellLastName);

        const cellUsername = document.createElement('td');
        cellUsername.textContent = user.user_name;
        row.appendChild(cellUsername);

        const cellPhone = document.createElement('td');
        cellPhone.textContent = user.phone;
        row.appendChild(cellPhone);

        const cellEmail = document.createElement('td');
        cellEmail.textContent = user.email;
        row.appendChild(cellEmail);

        const cellIdentification = document.createElement('td');
        cellIdentification.textContent = user.identificacion;
        row.appendChild(cellIdentification);

        const cellGender = document.createElement('td');
        cellGender.textContent = user.gender;
        row.appendChild(cellGender);

        // Agregar la fila a la tabla
        tableBody.appendChild(row);
    });
}
