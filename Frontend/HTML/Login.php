<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/styles.css">
</head>

<body>
    <div class="external_container">
        <header>
            <!--Accesos directos-->

            <!--Contenedor de botones-->


                <!--Etiqueta botones navegación-->
                <?php
                $currentPage = 'login';
                include "./Componentes/menu.html";
                ?>



        </header>
        <main>

            <section class="seccion_login m-2 w-100 d-flex align-items-center justify-content-evenly">


                <div class="video_login">
                    <video src="../Resources/COSTA RICA IN 4K 60fps HDR (ULTRA HD).mp4" autoplay loop muted playsinline></video>
                </div>


                <div id="login_box" class="d-flex text-center flex-column align-items-center">

                    <h2 style="font-size: clamp(13px, 1.5vw, 30px);" class="m-4 ">Iniciar sesion</h2>
                    <!--Etiqueta formulario-->
                    <form id="login_form" class="d-flex flex-column justify-content-center align-content-center text-center w-75"
                        style="width: 300px;" id="login_form" method="post">

                        <input type="hidden" name="action" value="login">
                        <label class="mb-2" for="identificacion">Identificación:</label>
                        <input class="form-control mb-3" type="text" id="identificacion" name="identificacion" required>
                        <span class="error" id="correoError"></span>

                        <label class="mb-2" for="contraseña">Contraseña:</label>
                        <input class="form-control" type="password" id="password" name="password" required>
                        <span class="error" id="contraseñaError"></span>

                        <button class="botones_login btn btn-dark mb-3 mt-3" type="submit">¡Iniciar sesion!</button>
                        <button class="botones_login btn btn-dark" type="reset">Limpiar</button>


                    </form>
                    <a class="m-3" href="Register.php">¿No tienes cuenta? ¡Registrate! </a>
                    <a class="m-1" href="Login.php">¿Olvidaste tu contraseña? </a>
                </div>
            </section>
        </main>
        <?php
    include "./Componentes/footer.html";
    ?>
    </div>
    <script src="../JS/user-session.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/auth-request.js"></script>
</body>

</html>