<?php
/* include_once "../../Backend/Service/UserService.php"; */




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
            include "./Componentes/menu.php";
            ?>



        </header>
        <main>


            <div class="user-crud-panel">

                <div class="botones-user-crud d-flex flex-column">

                    <form id="user-crud-form">
                        <input type="hidden" name="action" value="searchUser">
                        <label for="identification">Buscar por identificacion</label>
                        <input type="text" name="identification" id="identification">
                        <button type="submit">Buscar</button>
                    </form>

                    <div class="result" id="result">

                        <form id="user-form">
                            <input type="hidden" name="action" value="saveChanges">
                            <label class="mb-3" for="id">ID:</label>
                            <input type="text" id="id" name="user_id" readonly>

                            <label class="mb-3" for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre">

                            <label class="mb-3" for="apellido">Apellido:</label>
                            <input type="text" id="apellido" name="apellido">

                            <label class="mb-3" for="user-name">Username:</label>
                            <input type="text" id="user-name" name="user-name">

                            <label class="mb-3" for="telefono">Teléfono:</label>
                            <input type="text" id="telefono" name="telefono">

                            <label class="mb-3" for="e-mail">Email:</label>
                            <input type="email" id="e-mail" name="e-mail">

                            <label class="mb-3" for="genero">Género:</label>
                            <input type="text" id="genero" name="genero">

                            <button type="submit" class="btn btn-dark mt-3">Guardar Cambios</button>
                            <button id="delete-user" class="btn btn-dark mt-3">Borrar usuario</button>
                            <button id="button-cancelar" class="btn btn-dark mt-3">Cancelar</button>
                        </form>

                    </div>

                    <button id="button-create-user" class="btn btn-dark m-5">Crear usuario</button>


                    <div class="createUser" id="createUser">

                        <form id="user-create-form">
                            <input type="hidden" name="action" value="register">
                            <label class="mb-3" for="identificacion">Identificacion:</label>
                            <input type="text" id="identificacion" name="identificacion">

                            <label class="mb-3" for="name">Nombre:</label>
                            <input type="text" id="name" name="name">

                            <label class="mb-3" for="lastName">Apellido:</label>
                            <input type="text" id="lastName" name="lastName">

                            <label class="mb-3" for="username">Username:</label>
                            <input type="text" id="username" name="username">

                            <label class="mb-3" for="phone">Teléfono:</label>
                            <input type="text" id="phone" name="phone">

                            <label class="mb-3" for="email">Email:</label>
                            <input type="email" id="email" name="email">

                            <label class="mb-3" for="gender">Género:</label>
                            <input type="text" id="gender" name="gender">

                            <label for="password">Contraseña:</label>
                            <input class="m-2" type="password" id="password" name="password" required>

                            <button type="submit" class="btn btn-dark mt-3">Crear</button>

                        </form>
                    </div>



                </div>

                <div class="users-table" id="users-table">


                    <table class='table table-bordered table-striped'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Username</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Identificacion</th>
                                <th>Genero</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
            </div>




        </main>
        <?php
        include "./Componentes/footer.html";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/auth-request.js"></script>
    <script src="../JS/user-panel.js"></script>

</body>

</html>