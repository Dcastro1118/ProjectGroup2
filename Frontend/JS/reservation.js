document.getElementById("reservation-form").addEventListener("submit", consultarDisponibilidad());

function  consultarDisponibilidad(event){
    event.preventDefault(); 
    const form = event.target;
    const formData = new FormData(form);

    // Convertir los datos del formulario a un objeto JSON
    const formObject = {};
    formData.forEach((value, key) => formObject[key] = value);

    // Enviar los datos como JSON
    console.log(formObject);

  fetch("http://localhost/ProjectGroup2/Backend/Controllers/ReservationController.php", { // URL del controlador
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(formObject)
    })
    alert("La sesion ha sido cerrada con exito!");
    window.location.href = "http://localhost/ProjectGroup2/Frontend/HTML/Login.php";



}