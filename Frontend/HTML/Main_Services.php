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
                <div class="contenedor_galeria d-flex flex-column align-items-center m-4">
                    <h1 class="mb-5" style="text-align: center;">Principales Servicios</h1>
                    <section class="mb-1" id="galeria">
                        <img class="formato_img" src="../Resources/Servicios/Estacionamiento.png" alt="">
                        <img class="formato_img" src="../Resources/Servicios/Restaurante.png" alt="">
                        <img class="formato_img" src="../Resources/Servicios/Piscina.png" alt="">
                    </section>

                    
                    <section class="diferencialesServicios">
                        <!--Contenedor Diferencial Servicios 1-->
                        <div class="difSer-uno">
                            
                            <!--cara frontal-->
                            <div class="caraSer frontalSer">
                                <h1><i>Estacionamiento</i></h1>
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
                            
                            <!--cara frontal-->
                            <div class="caraSer frontalSer">
                                <h1><i>Restaurante</i></h1>
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
                            
                            <!--cara frontal-->
                            <div class="caraSer frontalSer">
                                <h1><i>Piscina</i></h1>
                                <!--img class="formato_img2" src="../Resources/Servicios/Piscina.png" alt="piscina" style="width: 100%; height:100%;"-->
                            </div>

                            <!--cara trasera-->
                            <div class="caraSer traseraSer">
                                <h6>Contamos con una piscina ideal para compartir con todo la familia y disfruatar con tus seres queridos
                                </h6>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


            <br>
            <!--------------Finaliza seccion de los diferenciales -------------->


            <!--Servidos Adicionales-->
            <div class="contenedor_galeria d-flex flex-column align-items-center m-4">
                <h1 class="mb-5" style="text-align: center;">Servicios Adicionales</h1>
                <section class="mb-1" id="galeria">
                    <img class="formato_img" src="../Resources/Servicios/GYM.png" alt="">
                    <img class="formato_img" src="../Resources/Servicios/Senderismo.png" alt="">
                    <img class="formato_img" src="../Resources/Servicios/SPA.png" alt="">
                </section>
                
                <!--Fin-Servidos Adicionales-->
                <section class="diferencialesServicios">
                    <!--Contenedor Diferencial Servicios 1-->
                    <div class="difSer-uno">
                            
                        <!--cara frontal-->
                        <div class="caraSer frontalSer">
                            <h1><i>Gimnasio</i></h1>
                            <!--img class="formato_img2" src="../Resources/Servicios/IconoGym.png" alt="estacionamiento" style="width: 100%; height:100%;"-->
                        </div>

                        <!--cara trasera-->
                        <div class="caraSer traseraSer">
                            <h6>
                                <i>Contamos con un gimnasio equipado con todo lo necesario para no dejar el entrenamiento durante su estancia. 
                                </i>
                            </h6>
                        </div>
                    </div>

                    <!--Contenedor Diferencial Servicios 2-->
                    <div class="difSer-dos">
                            
                        <!--cara frontal-->
                        <div class="caraSer frontalSer">
                            <h1><i>Caminatas por el bosque</i></h1>    
                            <!--<img class="formato_img2" src="../Resources/Servicios/iconoCaminata.png" alt="restaurante" style="width: 100%; height:100%;"-->
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
                            
                            <!--cara frontal-->
                        <div class="caraSer frontalSer">
                        <h1><i>SPA</i></h1>
                            <!--img class="formato_img2" src="../Resources/Servicios/Piscina.png" alt="piscina" style="width: 100%; height:100%;"-->
                        </div>

                        <!--cara trasera-->
                        <div class="caraSer traseraSer">
                            <h6>
                                Contamos con una piscina ideal para compartir con todo la familia y disfruatar con tus seres queridos
                            </h6>
                        </div>
                    </div>
                </section>
            </div>

            <!--Servidos de Guarderias -->

            <div class="contenedor_galeria d-flex flex-column align-items-center m-4">
                <h1 class="mb-5" style="text-align: center;">Servicios de Guarderia</h1>

                <section class="mb-5" id="galeria">
                    <img class="formato_img" src="../Resources/Servicios/Guarderia Masc.png" alt="">
                    <img class="formato_img" src="../Resources/Servicios/Guarderia.png" alt="">
                </section>

                <section class="diferencialesServicios">
                    <!--Contenedor Diferencial Servicios 1-->
                    <div class="difSer-uno">
                            
                        <!--cara frontal-->
                        <div class="caraSer frontalSer">
                            <h1><i>Guarderia para Mascotas</i></h1>
                            <!--img class="formato_img2" src="../Resources/Servicios/IconoGym.png" alt="estacionamiento" style="width: 100%; height:100%;"-->
                        </div>

                        <!--cara trasera-->
                        <div class="caraSer traseraSer">
                            <h6>
                                <i>Sabemos que los peluditos de la casa son parte importante de la familia, por eso el Hotel Bitsú ofrece un equipo especializado en el cuidado de mascotas durante su estadia. 
                                </i>
                            </h6>
                        </div>
                    </div>

                    <!--Contenedor Diferencial Servicios 2-->
                    <div class="difSer-dos">
                            
                        <!--cara frontal-->
                        <div class="caraSer frontalSer">
                            <h1><i>Guarderia para niños y niñas</i></h1>    
                            <!--<img class="formato_img2" src="../Resources/Servicios/iconoCaminata.png" alt="restaurante" style="width: 100%; height:100%;"-->
                        </div>

                            <!--cara trasera-->
                        <div class="caraSer traseraSer">
                            <h6>
                                <i>Contamos con los mejores profesionales para cuidar de sus hijos durante su estadia.
                                </i>
                            </h6>
                        </div>
                    </div>
                </section>
            </div>

            

            <!--Fin- Servidos de Guarderias -->


            <!-------------Seccion del Carrusel Habitaciones ------------->
            <section>
                <h1 class="text-center mb-5">Habitaciones y exteriores</h1>
                <div class="contenedorRooms">
                    <h2 class="text-center mb-5"><i>Suite</i></h2>
                    <h3 class="text-center mb-5">
                        <p>La Suite es una habitacion doble con baño incluido y una hermosa vista al bosque </p>
                    </h3>

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
                </div>    
            </section>
        
<br>
            <!--Junior Suite-->
            <section >
                <div class="contenedorRooms">
                    <h2 class="text-center mb-5"><i>Junior Suite</i></h2>
                    <h3 class="text-center mb-5">
                        <p>
                        La Suite Junior es una habitacion doble con baño incluido junto con una pequeño salón y 
                        una hermosa vista al bosque 
                        </p>
                    </h3>
                    <div id="carouselExample2" class="carousel slide mx-auto p-2" style="width: 80%;">
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                    
                        <!--Boton siguiente-->
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>  
                </div>
            </section>
<br>
            <!--HoneyMoon-->
            <section >
                <div class="contenedorRooms">
                    <h2 class="text-center mb-5"><i>Honeymoon</i></h2>
                    <h3 class="text-center mb-5">
                        <p>
                        La habitacion Honeymonn crea una atmósfera romántica, relajante y exclusiva ideal para una pareja que celebra su boda. La habitacio es doble cuenta con un baño y una sala con jacuzzi, decoracion personalizada y una hermosa vista al bosque.
                        </p>
                    </h3>
                    <div id="carouselExample3" class="carousel slide mx-auto p-2" style="width: 80%;">
                        <div class="carousel-inner">
                            <!--Contenedor Imagen #1-->
                            <div class="carousel-item active" style="height: 600px;">
                                <img src="../Resources/Servicios/Habitaciones/Honeymoon.jpg" class="d-block w-100 h-100"
                                    style="object-fit: cover">
                            </div>
                            <!--Contenedor Imagen #2-->
                            <div class="carousel-item" style="height: 600px;">
                                <img src="../Resources/Servicios/Habitaciones/HoneymoonBaño.png" class="d-block w-100 h-100"
                                    style="object-fit: cover">
                            </div>
                            <!--Contenedor Imagen #3-->
                            <div class="carousel-item" style="height: 600px;">
                                <img src="../Resources/Servicios/Habitaciones/HoneymonJacuzzi.png" class="d-block w-100 h-100" 
                                    style="object-fit: cover">
                            </div>
                        </div> 
                    
                        <!--Boton anterior-->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                    
                        <!--Boton siguiente-->
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>  
                </div>
            </section>
<br>
                        
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