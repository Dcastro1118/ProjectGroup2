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


            <div class="room-crud-panel">

                <div class="botones-room-crud">

                    <form id="room-crud-form">
                        <label for="identificacion">Buscar por identificacion</label>
                        <input type="text" name="identificacion" id="identificacion">
                        <button type="submit">Buscar</button>
                    </form>

                    <div class="result">

                        <form id="user-form">
                            <label class="mb-3" for="id">ID:</label>
                            <input type="text" id="id" name="id" disabled>

                            <label class="mb-3" for="nombre">Tipo:</label>
                            <input type="text" id="nombre" name="nombre">

                            <label class="mb-3" for="apellido">Capacidad:</label>
                            <input type="text" id="apellido" name="apellido">

                            <label class="mb-3" for="username">Piso:</label>
                            <input type="text" id="username" name="username">

                            <label class="mb-3" for="telefono">Precio:</label>
                            <input type="text" id="telefono" name="telefono">

                            <label class="mb-3" for="email">Numero de habitacion</label>
                            <input type="email" id="email" name="email">


                        </form>

                        <button class="btn btn-dark mt-3">Guardar Cambios</button>
                        <button class="btn btn-dark mt-3">Borrar usuario</button>

                    </div>

                    <button id="button-create-room" class="btn btn-dark m-5">Crear Habitacion</button>
                    <div id="roomform" class="roomform">

                        <form id="create-room-form">
                            <input type="hidden" name="action" value="createRoom">
                            <label class="mb-3" for="tipoHabitacion">Tipo:</label>
                            <select id="tipoHabitacion" name="tipoHabitacion">
                                <option value="Suite">Suite</option>
                                <option value="JuniorSuite">Junior Suite</option>
                                <option value="Honeymoon">Honeymoon</option>
                            </select>
                            <label class="mb-3" for="capacity">Capacidad:</label>
                            <input type="text" id="capacity" name="capacity">

                            <label class="mb-3" for="floor">Piso:</label>
                            <input type="text" id="floor" name="floor">

                            <label class="mb-3" for="price">Precio:</label>
                            <input type="text" id="price" name="price">

                            <label class="mb-3" for="room-number">Numero de habitacion</label>
                            <input type="text" id="room-number" name="room-number">

                            <label class="mb-3" for="mayordomo">Mayordomo</label>
                            <input type="text" id="mayordomo" name="mayordomo">



                            <button type="submit" class="btn btn-dark mt-3">Crear</button>


                        </form>
                    </div>
                </div>

                <div class="rooms-table">
                    <table class='table table-bordered table-string'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tipo</th>
                                <th>Capacidad</th>
                                <th>Piso</th>
                                <th>Precio</th>
                                <th>Numero de Habitacion</th>"
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
    <script src="../JS/room-panel.js"></script>




</body>