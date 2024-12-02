<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Grupo 2</title>


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
            <!--Divisor-->


        </header>

        <main>

            <!-- Primera Seccion: Descripcion del hotel + video-->
            <section class="idx_main_container m-2">

                <!-- Contenedor de la descripcion del hotel -->
                <div class="nombre_hotel">
                    <h2>Hotel Bitsú</h2>
                    <p>
                        Bienvenidos al Hotel Bitsu, un refugio de tranquilidad y naturaleza en el corazón de las
                        majestuosas montañas de Costa Rica. En este paraíso escondido, cada amanecer y cada atardecer
                        ofrecen vistas inigualables de exuberantes paisajes verdes, rodeados de una abundante flora y
                        fauna que te conectan con la esencia pura del trópico. Nuestro hotel de montaña es el destino
                        ideal para quienes buscan escapar del bullicio de la ciudad y sumergirse en un ambiente sereno,
                        donde la hospitalidad costarricense y el confort moderno se combinan para brindarte una
                        experiencia inolvidable. Ya sea que desees explorar senderos naturales, disfrutar de un café
                        local en nuestras terrazas panorámicas o simplemente relajarte al sonido de la naturaleza.
                    </p>
                </div>

                <!-- Contenedor del video -->
                <div class="idx_container_video">
                    <video src="../Resources/Index/index_bg_vid.mp4" autoplay loop muted playsinline></video>
                </div>
            </section>




            <!-------------- Seccion de los diferenciales -------------->
            <br>
            <h1 style="text-align: center;">¿Porque Hotel Bitsú?</h1>

            <section class="diferenciales">

                <!--Contenedor Diferencial 1-->
                <div class="dif-uno">
                    <!--cara frontal-->
                    <div class="cara frontal">
                        <h3>Comodas habitaciones</h3>
                        <img class="rooms_logo" src="../Resources/Differentiators/room.png" alt="">
                    </div>

                    <!--cara trasera-->
                    <div class="cara trasera">
                        <h6>Habitaciones rusticas con todas las comodidades del mercado, las cuales cuentan con aire
                            acondicionado, baño privado
                            vista a la montaña, nevera privada, jacuzzi y columpios
                        </h6>

                    </div>
                </div>

                <!--Contenedor Diferencial 2-->
                <div class="dif-dos">
                    <!--cara frontal-->
                    <div class="cara frontal">
                        <h3>Experiencias <br>unicas</h3>
                        <img class="experiencias_logo" src="../Resources/Differentiators/Experiencias2.png" alt="">
                    </div>

                    <!--cara trasera-->
                    <div class="cara trasera">
                        <h6>Contamos con una ubicacion unica, rodeada de naturaleza y segura para que puedas venir
                            a disfrutar de las caminatas, de los miradores y de las especies propias de la zona
                        </h6>
                    </div>
                </div>


                <!--Contenedor Diferencial -->
                <div class="dif-tres">
                    <!--cara frontal-->
                    <div class="cara frontal">
                        <h3>Desayuno <br> incluido</h3>
                        <img class="desayuno_logo" src="../Resources/Differentiators/Desayuno.png" alt="">
                    </div>

                    <!--cara trasera-->
                    <div class="cara trasera">
                        <h6>Todas nuestras habitaciones incluye un delicioso desayuno tipico de la zona, para
                            que puedas disfrutar tus vacaciones sin tener que pensar en los detalles
                        </h6>
                    </div>
                </div>
            </section>
            <!--------------Finaliza seccion de los diferenciales -------------->




            <!-------------Seccion del Carrusel------------->
            <section>


                <h2 class="text-center mb-5">Habitaciones y exteriores</h2>


                <div id="carouselExample" class="carousel slide mx-auto p-2" style="width: 80%;">
                    <div class="carousel-inner">
                        <!--Contenedor Imagen #1-->
                        <div class="carousel-item active" style="height: 600px;">
                            <img src="../Resources/Carrusel/Monte Verde.jpg" class="d-block w-100 h-100"
                                style="object-fit: cover">
                        </div>
                        <!--Contenedor Imagen #2-->
                        <div class="carousel-item" style="height: 600px;">
                            <img src="../Resources/Carrusel/Monte Verde2.jpg" class="d-block w-100 h-100"
                                style="object-fit: cover">
                        </div>
                        <!--Contenedor Imagen #3-->
                        <div class="carousel-item" style="height: 600px;">
                            <img src="../Resources/Carrusel/Monte Verde3.jpg" class="d-block w-100 h-100"
                                style="object-fit: cover">
                        </div>
                        <!--Contenedor Imagen #4-->
                        <div class="carousel-item" style="height: 600px;">
                            <img src="../Resources/Carrusel/Monte Verde4.jpg" class="d-block w-100 h-100"
                                style="object-fit: cover">
                        </div>
                        <!--Contenedor Imagen #5-->
                        <div class="carousel-item" style="height: 600px;">
                            <img src="../Resources/Carrusel/Monte Verde5.jpg" class="d-block w-100 h-100"
                                style="object-fit: cover">
                        </div>
                    </div>
                    <!--Boton anterior-->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <!--Boton siguiente-->
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>
        </main>
        <!-----------Finaliza la Seccion del Carrusel----------->

        <!-----------------------Seccion de testimonios----------------------->

        <h2 class="m-5">Reseñas</h2>

        <section>
    <div class="reseñas">
        <div class="d-flex justify-content-evenly mt-5 mb-5">
            <div id="carouselComments" class="carousel slide mx-auto p-2" style="width: 80%;">
                <div class="carousel-inner">
                    <!--Contenedor Imagen #1-->
                    <div class="carousel-item active" style="height: 600px;">
                        <div class="d-flex justify-content-center">
                            <div class="card" style="width: 18rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                <img src="../Resources/Comments/Sofia.jpg" class="card-img-top" alt="..." style="object-fit: cover; height: 300px;">
                                <div class="card-body" style="flex-grow: 1;">
                                    <h2>Sofía G.</h2>
                                    <p class="card-text">El mejor hotel en el que me he hospedado. Las habitaciones son amplias, modernas y con una vista espectacular al mar. El personal siempre fue amable y atento a cada detalle. Sin duda, volveré en mis próximas vacaciones.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Contenedor Imagen #2-->
                    <div class="carousel-item" style="height: 600px;">
                        <div class="d-flex justify-content-center">
                            <div class="card" style="width: 18rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                <img src="../Resources/Comments/Carlos.jpg" class="card-img-top" alt="..." style="object-fit: cover; height: 300px;">
                                <div class="card-body" style="flex-grow: 1;">
                                    <h2>Carlos M.</h2>
                                    <p class="card-text">Pasé una semana aquí con mi familia y fue una experiencia increíble. Mis hijos disfrutaron mucho de la piscina y las actividades organizadas. El restaurante ofrece una variedad deliciosa de platillos locales e internacionales. ¡Recomendado al 100%!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Contenedor Imagen #3-->
                    <div class="carousel-item" style="height: 600px;">
                        <div class="d-flex justify-content-center">
                            <div class="card" style="width: 18rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                                <img src="../Resources/Comments/Laura.png" class="card-img-top" alt="..." style="object-fit: cover; height: 300px;">
                                <div class="card-body" style="flex-grow: 1;">
                                    <h2>Laura P.</h2>
                                    <p class="card-text">Un lugar de ensueño. La tranquilidad del hotel, combinado con la naturaleza que lo rodea, hizo de nuestra estancia algo mágico. El spa es excelente, perfecto para relajarse después de un día explorando la zona. ¡Volveré pronto!</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Boton anterior-->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselComments" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <!--Boton siguiente-->
                <button class="carousel-control-next" type="button" data-bs-target="#carouselComments" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>




        <!-----------------------Finaliza seccion de testimonios----------------------->







        <?php
        include "./Componentes/footer.html";
        ?>

    </div>

    <script src="../JS/user-session.js"></script>
    <!-------Script de bootstrap(Al final para que cargue despues de cargar todo lo visual)-------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>




</html>