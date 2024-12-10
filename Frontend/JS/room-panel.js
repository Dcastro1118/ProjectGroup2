document.addEventListener("DOMContentLoaded", function () {
    // URL de tu backend donde obtendrás la lista de usuarios
    const url = 'http://localhost/ProjectGroup2/Backend/Controllers/RoomController.php'; // Cambia esta URL según tu API

    // Realizar la solicitud al backend usando fetch
    fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: '{"action" : "getAllRooms"}' // El body con la acción
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


var searchRoom = document.getElementById("room-crud-form")
var createPanel = document.getElementById("button-create-room")
var createUserForm = document.getElementById("create-room-form")

if (searchRoom){
    searchRoom.addEventListener("submit", searchUser);
}
if (createPanel) {
    createPanel.addEventListener("click", showPanel); 
}
if (createUserForm) {
    createUserForm.addEventListener("submit", createRoom)
}


function showPanel(event) {
    event.preventDefault();
    var createForm = document.getElementById("roomform");
    createForm.style.display = "block";
}


function createRoom(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);

    // Convertir los datos del formulario a un objeto JSON
    const formObject = {};
    formData.forEach((value, key) => formObject[key] = value);

    console.log(JSON.stringify(formObject))

    // Enviar los datos como JSON
    fetch("http://localhost/ProjectGroup2/Backend/Controllers/RoomController.php", { // URL del controlador
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(formObject)
    })
        .then(response => {
        /*  response.text().then(text => console.log("Respuesta cruda del servidor:", text));
        */  if (response.ok) {
                return; // Procesa la respuesta en JSON si se necesita
            } else {

                throw new Error("Error en el envío del formulario");
            }
        })
        .then(data => {
            console.log("Formulario enviado correctamente:", data);
            alert("Tu soliditud de registro ha sido enviada con exito!");
        })
        .catch(error => {
            console.error("Hubo un problema con el envío:", error);
            alert("Tu soliditud ha fracasado, hubo un problema.");
});



}

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


function fillTableWithData(rooms) {
    const tableBody = document.querySelector('#rooms-table tbody');
    tableBody.innerHTML = ''; // Limpiar la tabla antes de llenarla

    // Iterar sobre la lista de usuarios y crear filas
    rooms.forEach(room => {
        const row = document.createElement('tr'); // Crear una nueva fila de la tabla

        // Crear celdas para cada propiedad del usuario
        const cellId = document.createElement('td');
        cellId.textContent = room.roomId; // Usar los datos del JSON
        row.appendChild(cellId);

        const cellType = document.createElement('td');
        cellType.textContent = room.type;
        row.appendChild(cellType);

        const cellCapacity = document.createElement('td');
        cellCapacity.textContent = room.capacity;
        row.appendChild(cellCapacity);

        const cellFloor = document.createElement('td');
        cellFloor.textContent = room.floor;
        row.appendChild(cellFloor);

        const cellPrice = document.createElement('td');
        cellPrice.textContent = room.price;
        row.appendChild(cellPrice);

        const cellNumber = document.createElement('td');
        cellNumber.textContent = room.number;
        row.appendChild(cellNumber);

        const cellMayordomo = document.createElement('td');
        cellMayordomo.textContent = room.mayordomo;
        row.appendChild(cellMayordomo);

        // Agregar la fila a la tabla
        tableBody.appendChild(row);
    });
}
