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
                include "./Componentes/menu.php";
                ?>



        </header>
        <main>


        <section class="seccion-mapa">
            <div class="contenedor-mapa">
                <h2>Mapa</h2>
                <p>Nuestra ubicacion se encuentra en el corazon de Monteverde</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.1248778620825!2d-84.81848922103116!3d10.331890157422633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa01978f5f77c49%3A0x990decc8173f24d4!2sProvincia%20de%20Puntarenas%2C%20Monteverde!5e0!3m2!1ses!2scr!4v1733109961340!5m2!1ses!2scr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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