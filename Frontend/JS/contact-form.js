document.getElementById("contact_form").addEventListener("submit", sendJson) 
document.getElementById("ver-mapa").addEventListener("click", verMapa)

    function verMapa(){
        location.href = 'http://localhost/ProjectGroup2/Frontend/HTML/Mapa.php';
    }




    function sendJson (event){
    event.preventDefault(); 
    // Capturar los datos del formulario
    const form = event.target;
    const formData = new FormData(form);

    // Convertir los datos del formulario a un objeto JSON
    const formObject = {};
    formData.forEach((value, key) => formObject[key] = value);

    // Enviar los datos como JSON

    console.log(formObject);

    fetch("http://localhost/ProjectGroup2/Backend/Controllers/ContactoController.php", { // URL del controlador
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
            alert("Tu soliditud ha sido enviada con exito!");
        })
        .catch(error => {
            console.error("Hubo un problema con el envío:", error);
            alert("Tu soliditud ha fracasado, hubo un problema.");
        });
};
