<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Latest compiled and minified CSS -->
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
            <div class="m-3 d-flex justify-content-evenly gap-3">


                <div class="contenedorInfo p-4 d-flex flex-column align-items-center text-center">
                    <h2>Contactenos</h2>
                    <h3>¡Estamos para ayudarte!</h3>
                    <p class="m-lg-3 text-center">
                        Nos encantaría saber de ti. Si tienes alguna pregunta, comentario o necesitas asistencia, no
                        dudes en ponerte en contacto con nosotros.

                    </p>

                    <ul>
                        <li>Telefono: 8657-6745</li>
                        <li>Correo electronico: hotelbatsu@gmail.com</li>
                        <li>Ubicacion: Monteverde, Puntarenas, Costa Rica</li>
                        <li>Horario de atencion: 8:00 am - 8:00 pm</li>
                    </ul>
                    <div class="d-flex justify-content-evenly w-75">

                        <img class="logos_redes" src="../Resources/facebookicono.png" alt="">
                        <img class="logos_redes" src="../Resources/instagramicono.png" alt="">


                    </div>
                    <button id="ver-mapa" class="btn btn-dark mt-3">Ver mapa</button>



                </div>

                <!--Contenedor formualrio de contacto-->
                <div class="contenedor_formulario_contacto w-50 d-flex align-content-center justify-content-center">

                    <!--Etiqueta formulario-->
                    <form class="d-flex flex-column justify-content-center align-content-center text-center w-50" id="contact_form"
                        method="post">

                        <label for="identificacion">Identificación:</label>
                        <input class="form-control mb-1" type="text" id="identificacion" name="identificacion" required>
                        <span class="error" id="identificacionError"></span>

                        <label for="nombre">Nombre:</label>
                        <input class="form-control mb-1" type="text" id="nombre" name="nombre" required>
                        <span class="error" id="nombreError"></span>

                        <label for="telefono">Teléfono:</label>
                        <input class="form-control mb-1" type="tel" id="telefono" name="telefono" required>
                        <span class="error" id="telefonoError"></span>

                        <label for="correo">Correo Electrónico:</label>
                        <input class="form-control mb-1" type="email" id="correo" name="correo" required>
                        <span class="error" id="correoError"></span>

                        <label for="">Motivo de consulta:</label>

                        <select id="tipoConsulta" name="tipoConsulta">

                            <option value="Alojamientos">Alojamientos</option>
                            <option value="Cotización">Cotización</option>
                            <option value="Politicas">Politicas</option>
                            <option value="Reservaciones">Reservaciones</option>

                        </select>

                        <label for="comentarios">Comentarios:</label>
                        <textarea class="form-control mb-2" name="comentarios" type="text" id="comentarios"
                            name="comentarios" required></textarea>
                        <span class="error" id="comentariosError"></span>

                        <button class="m-1 btn btn-dark" type="submit">Enviar</button>
                        <button class="m-1 btn btn-dark" type="reset">Limpiar</button>

                    </form>

                </div>
            </div>
        </main>

        <?php
    include "./Componentes/footer.html";
    ?>

    </div>
    <!-- Latest compiled JavaScript -->
    <script src="../JS/user-session.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../JS/contact-form.js"></script>

</body>



</html>