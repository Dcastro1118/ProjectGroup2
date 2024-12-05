document.getElementById("Button_menu").addEventListener("click", toggleMenu);

function toggleMenu() {
    const menu = document.getElementById("esconder-menu");
    // Alterna entre mostrar y ocultar el menú
    if (menu.style.display === "flex") {
        menu.style.display = "none"; // Oculta el menú
    } else {
        menu.style.display = "flex"; // Muestra el menú
    }
}
