window.onload = function() {
    // Acceder a los datos del usuario almacenados en localStorage
    let user = JSON.parse(localStorage.getItem('user'));

    // Obtener los elementos del DOM
    let loginButton = document.getElementById('Button_Login');
    let logoutButton = document.getElementById('Button_Logout');
    let userPhoto = document.getElementById('userimage');

    // Verificar si el usuario está en línea
    if (user && user.isLoggedIn) {
        // El usuario está en línea
        // Mostrar el botón de logout y la foto del usuario
        
        logoutButton.style.display = 'flex';  // Mostrar el botón de logout
        logoutButton.style.alignItems = 'center';  // Mostrar el botón de logout
        userPhoto.src = user.photo;            // Asignar la foto al elemento <img>
        userPhoto.style.display = 'flex';     // Mostrar la foto del usuario
        userPhoto.style.alignItems = 'center';     // Mostrar la foto del usuario

        // Ocultar el botón de login
        loginButton.style.display = 'none';
    } else {
        // El usuario no está en línea
        // Ocultar el botón de logout y la foto del usuario
        logoutButton.style.display = 'none';
        userPhoto.style.display = 'none';

        // Mostrar el botón de login
        loginButton.style.display = 'flex';
        loginButton.style.alignItems = 'center';
    }
};
