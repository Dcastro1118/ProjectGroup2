<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>


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
                $currentPage = 'services';
                include "./Componentes/menu.php";
                ?>

        </header>

        <main>
            <div>
                <br>
                <!-------------- Seccion de los diferenciales -------------->
                <h1 style="text-align: center;">Principales Servicios</h1>

                <section class="diferencialesServicios">
                    <!--Contenedor Diferencial Servicios 1-->
                    <div class="difSer-uno">
                        <h3><i>Estacionamiento</i></h3>
                        <!--cara frontal-->
                        <div class="caraSer frontalSer">
                            <img class="formato_img2" src="../Resources/Servicios/Estacionamiento.png" alt="estacionamiento" style="width: 100%; height:100%;">
                        </div>

                        <!--cara trasera-->
                        <div class="caraSer traseraSer">
                            <h6>
                                <i>Contamos con un amplio estacionamientoal aire libre, el cual es monitoriado las 24 horas 
                                    del día por nuestro personal de seguridad altamente capacitado
                                </i>
                            </h6>
                        </div>
                    </div>

                    <!--Contenedor Diferencial Servicios 2-->
                    <div class="difSer-dos">
                        <h3><i>Restaurante</i></h3>
                        <!--cara frontal-->
                        <div class="caraSer frontalSer">
                            
                            <img class="formato_img2" src="../Resources/Servicios/Restaurante.png" alt="restaurante" style="width: 100%; height:100%;">
                        </div>

                        <!--cara trasera-->
                        <div class="caraSer traseraSer">
                            <h6>
                                <i>Dentro de las instalaciones tenemos nuestro exquisito restaurante con un hermosa vista en 
                                    dirección a la naturaleza
                                </i>
                            </h6>
                        </div>
                    </div>


                    <!--Contenedor Diferencial Servicios 3-->
                    <div class="difSer-tres">
                        <h3><i>Piscina</i></h3>
                        <!--cara frontal-->
                        <div class="caraSer frontalSer">
                            <img class="formato_img2" src="../Resources/Servicios/Piscina.png" alt="piscina" style="width: 100%; height:100%;">
                        </div>

                        <!--cara trasera-->
                        <div class="caraSer traseraSer">
                            <h6>Contamos con una piscina ideal para compartir con todo la familia y disfruatar con tus seres queridos
                            </h6>
                        </div>
                    </div>
                </section>
            </div>


            <br>
            <!--------------Finaliza seccion de los diferenciales -------------->


            <!--Servidos Adicionales-->
            <div class="contenedor_galeria d-flex flex-column align-items-center m-4">
                <h1 class="mb-5" style="text-align: center;">Servicios Adicionales</h1>

            <section class="mb-5" id="galeria">
                <img class="formato_img" src="../Resources/Servicios/GYM.png" alt="">
                <img class="formato_img" src="../Resources/Servicios/Senderismo.png" alt="">
                <img class="formato_img" src="../Resources/Servicios/SPA.png" alt="">
            </section>
            </div>
            <!--Fin-Servidos Adicionales-->

            <!--Servidos de Guarderias -->

            <div class="contenedor_galeria d-flex flex-column align-items-center m-4">
                <h1 class="mb-5" style="text-align: center;">Servicios de Guarderia</h1>

            <section class="mb-5" id="galeria">
                <img class="formato_img" src="../Resources/Servicios/Guarderia Masc.png" alt="">
                <img class="formato_img" src="../Resources/Servicios/Guarderia.png" alt="">
            </section>
            </div>

            <!--Fin- Servidos de Guarderias -->


            <!-------------Seccion del Carrusel------------->
            <section>
                <h1 class="text-center mb-5">Habitaciones y exteriores</h1>

                <h2 class="text-center mb-5">Suite</h2>
                <p>La Suite es una habitacion doble con baño incluido y una hermosa vista al bosque </p>


                <div id="carouselExample" class="carousel slide mx-auto p-2" style="width: 80%;">
                    <div class="carousel-inner">
                        <!--Contenedor Imagen #1-->
                        <div class="carousel-item active" style="height: 600px;">
                            <img src="../Resources/Servicios/Habitaciones/Suite.png" class="d-block w-100 h-100 formato_img2"
                                style="object-fit: cover">
                        </div>
                        <!--Contenedor Imagen #2-->
                        <div class="carousel-item" style="height: 600px;">
                            <img src="../Resources/Servicios/Habitaciones/SuiteBaño.png" class="d-block w-100 h-100 formato_img2"
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

            <!--Junior Suite-->
            <section>
                <br>
                <h2 class="text-center mb-5">Junior Suite</h2>
                <p>La Suite Junior es una habitacion doble con baño incluido junto con una pequeño salón y 
                    una hermosa vista al bosque 
                </p>


                <div id="carouselExample" class="carousel slide mx-auto p-2" style="width: 80%;">
                    <div class="carousel-inner">
                        <!--Contenedor Imagen #1-->
                        <div class="carousel-item active" style="height: 600px;">
                            <img src="../Resources/Servicios/Habitaciones/SuiteJunior.png" class="d-block w-100 h-100"
                                style="object-fit: cover">
                        </div>
                        <!--Contenedor Imagen #2-->
                        <div class="carousel-item" style="height: 600px;">
                            <img src="../Resources/Servicios/Habitaciones/SuiteJuniorBaño.png" class="d-block w-100 h-100"
                                style="object-fit: cover">
                        </div>
                        <!--Contenedor Imagen #3-->
                        <div class="carousel-item" style="height: 600px;">
                            <img src="../Resources/Servicios/Habitaciones/SuiteJuniorSaliata.png" class="d-block w-100 h-100"
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

                        
            <!-----------Finaliza la Seccion del Carrusel----------->



        </main>
        <?php
    include "./Componentes/footer.html";
    ?>
    </div>

    <!-- Latest compiled JavaScript -->
    <script src="../JS/user-session.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>



</html>