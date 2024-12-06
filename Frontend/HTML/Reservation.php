<?php
/*
include "../../Backend/Service/SessionService.php";
$sessionService = new SessionService();
$sessionService->middleware(); */
?>
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
            <?php
            $currentPage = 'login';
            include "./Componentes/menu.php";
            ?>



        </header>
        <main>
        <section class="d-flex align-items-center justify-content-center m-5">
                <div class="Reservar">
                    <div class="text-center">
                        <h1 class="mb-4">Reservacion en linea</h1>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="hotel" class="form-label">Elija el tipo de habitacion</label>
                            <select class="form-select" id="hotel">
                                <option selected disabled> Elija una Habitacion</option>
                                <option value="hotel1">Suite</option>
                                <option value="hotel2">Junior Suite</option>
                                <option value="hotel3">Honeymoon</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="checkin" class="form-label">Entrada</label>
                                <input type="date" class="form-control" id="checkin" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="checkout" class="form-label">Salida</label>
                                <input type="date" class="form-control" id="checkout" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-dark" onclick="checkAvailability()">CONSULTAR DISPONIBILIDAD</button>
                        </div>
                    </form>

                </div>
                

                <div class=".room_container d-flex">

                    <div class="card m-3" style="width: 18rem; background-color: #004445c7; color: #c6c5c1;">
                        <img src="../Resources/Servicios/Habitaciones/Suite.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Suite</h5>
                            <p class="card-text">La Suite es una amplia habitacion doble con baño incluido y una hermosa vista al bosque.</p>
                            <a href="#" class="btn btn-dark">Ver detalles</a>
                        </div>
                    </div>

                    <div class="card m-3" style="width: 18rem; background-color: #004445c7; color: #c6c5c1;">
                        <img src="../Resources/Servicios/Habitaciones/SuiteJunior.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Junior Suite</h5>
                            <p class="card-text">La Suite Junior es una pequeña habitacion doble con baño incluido y
                                una hermosa vista al bosque </p>
                            <a href="#" class="btn btn-dark">Ver detalles</a>
                        </div>
                    </div>

                    <div class="card m-3" style="width: 18rem; background-color: #004445c7; color: #c6c5c1;">
                        <img src="../Resources/Servicios/Habitaciones/Honeymoon.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Honeymoon</h5>
                            <p class="card-text">La habitacion Honeymoon es una hermosa habitacion adornada que convertira tu luna de miel
                                en un momento inolvidable
                            </p>
                            <a href="#" class="btn btn-dark">Ver detalles</a>
                        </div>
                    </div>
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