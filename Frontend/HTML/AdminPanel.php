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

        <div class="panel-section">
            <div class="admin-panel">
                <h1>Panel de Administracion</h1>
                <a class="btn btn-dark" href="">Administrar habitaciones</a>
                <a class="btn btn-dark" href="./UsersPanel.php">Administrar Usuarios</a>
                <a class="btn btn-dark" href="">Administrar Reservaciones</a>
            </div>
        </div>


        </main>
        <?php
    include "./Componentes/footer.html";
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/auth-request.js"></script>
    
</body>

</html>