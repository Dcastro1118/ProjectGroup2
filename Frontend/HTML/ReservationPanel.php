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

                <div class="botones-user-crud">

                    <form id="user-crud-form">
                        <label for="identificacion">Buscar por identificacion</label>
                        <input type="text" name="identificacion" id="identificacion">
                        <button type="submit">Buscar</button>
                    </form>

                    <div class="result">

                        <form id="user-form">
                            <label class="mb-3" for="id">ID:</label>
                            <input type="text" id="id" name="id" disabled>

                            <label class="mb-3" for="nombre">User ID</label>
                            <input type="text" id="nombre" name="nombre">

                            <label class="mb-3" for="apellido">Check In</label>
                            <input type="text" id="apellido" name="apellido">

                            <label class="mb-3" for="username">Check Out</label>
                            <input type="text" id="username" name="username">


                        </form>

                        <button class="btn btn-dark mt-3">Guardar Cambios</button>
                        <button class="btn btn-dark mt-3">Borrar usuario</button>

                        
                    </div>

                </div>

                <div class="users-table">
                    <?php

                    echo "<table class='table table-bordered table-striped'>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>User ID</th>";
                    echo "<th>Check in</th>";
                    echo "<th>Check out</th>";
                    echo "</tr>";
                    echo "</thead>";
/*
                    foreach ($users as $user) {
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>" . $user->getId() . "</td>";
                        echo "<td>" . $user->getName() . "</td>";
                        echo "<td>" . $user->getLastName() . "</td>";
                        echo "<td>" . $user->getUsername() . "</td>";
                        echo "<td>" . $user->getPhone() . "</td>";
                        echo "<td>" . $user->getEmail() . "</td>";
                        echo "<td>" . $user->getIdentification() . "</td>";
                        echo "<td>" . $user->getGender() . "</td>";

                        echo "</tr>";

                        echo "</tbody>";
                    }


                    echo "</table>";
*/


                    ?>
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