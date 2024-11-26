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
                include "./Componentes/menu.html";
                ?>

        </header>
        <main>
            

            <div class="register_image d-flex justify-content-evenly">
            
            
            <div id="register_box" class="m-3 d-flex flex-column align-items-center justify-content-center">

                <!--Etiqueta formulario-->

                <h2>Registrate</h2>
                <p> y empieza a vivir tus vacaciones soñadas!</p>


                <form class="d-flex flex-column justify-content-center align-content-center text-center" style="width: 300px;" id="register_form"
                    method="post">
                    
                    <input type="hidden" name="action" value="register">
                    <label for="name">Nombre</label>
                    <input class="form-control m-2" type="text" id="name" name="name" required>
                    <span class="error" id="nameError"></span>

                    <label for="lastName">Apellidos</label>
                    <input class="form-control m-2" type="text" id="lastName" name="lastName" required>
                    <span class="error" id="apellidosError"></span>

                    <label for="identificacion">Identificación:</label>
                    <input class="form-control m-2" type="text" id="identificacion" name="identificacion" required>
                    <span class="error" id="identificacionError"></span>

                    <label for="phone">Telefono</label>
                    <input class="form-control m-2" type="text" id="phone" name="phone" required>
                    <span class="error" id="telefonoError"></span>

                    <label for="username">Usuario:</label>
                    <input class="form-control m-2" type="text" id="username" name="username" required>
                    <span class="error" id="usuarioError"></span>

                    <label for="password">Contraseña:</label>
                    <input class="form-control m-2" type="password" id="password" name="password" required>
                    <span class="error" id="contraseñaError"></span>

                    <label for="email">Correo Electrónico:</label>
                    <input class="form-control m-2" type="email" id="email" name="email" required>
                    <span class="error" id="correoError"></span>

                    <label class="m-2" for="gender">Genero:</label>
                    <select class="m-2" id="gender" name="gender">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Femenino">Prefiero no especificar</option>
                    </select>

                    <br> <br>

                    <button class="btn btn-dark m-2" type="submit">¡Registrarse!</button>
                    <button class="btn btn-dark m-2" type="reset">Limpiar</button>

                </form>

            </div>
        </div>

        </main>

            <!-- Footer -->
        <?php
    include "./Componentes/footer.html";
    ?>
        <!-- Finaliza Footer -->

    </div>
    <script src="../JS/user-session.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/auth-request.js"></script>
</body>

</html>