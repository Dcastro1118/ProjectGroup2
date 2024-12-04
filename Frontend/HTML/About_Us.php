

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>


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
                $currentPage = 'about';
                include "./Componentes/menu.php";
                ?>

        </header>

        <main>
            <h1 class="m-5">Hotel Bitsú</h1>
            <img class="imagenAbout" src="../Resources/General/Imagen_Sobre nosotros.png" alt="hotel">
            <br>
            
            <h2 class="m-4">Destacado por...</h2>
            <div class="aboutUs_hotel m-auto">
                <p>
                    <b> Ser un refugio de paz con vistas a las impresionantes montañas de Costa Rica, rodeado por un vasto paisaje de bosques nubosos y tropicales lluviosos, el cual
                        ofrece diferentes paquetes turísticos con actividades al aire libre como senderismo, ciclismo, kayak y rafting, entre muchas otras actividades, además 
                        cuenta con instalaciones como un gimnasio, aguas termales y áreas verde para hacer fogatas y mirar las estrellas por la noche. 
                        Su arquitectura innovadora con detalles en madera y piedra crean una atmósfera acogedora y cálida, perfecta para relajarse después de un día de aventuras. 
                        El hotel cuenta con habitaciones, amplias y luminosas, decoradas con textiles suaves y colores neutros que evocan la serenidad de la montaña, cada una ofrece
                        vistas espectaculares hacia el bosque con las montañas estampadas de fondo, sin duda alguna, una de las mejores vistas que ofrece el país.  
                        El Hotel Bitsú es, sin dudas,  el destino ideal para aquellos que buscan reconectar con la naturaleza, tambien aquellos que buscan una aventura durante 
                        el día pero un momento de paz y calma durante la noche, escuchando los suaves sonidos de la naturaleza. 
                    </b>
                </p>
            </div>
            <br>

            <h2 class="m-4">Misión</h2>
            <div class="aboutUs_hotel m-auto">
                <p>
                    <b>"Nuestra misión es brindarle a nuestros huéspedes una experiencia única de descanso y aventura en un entorno natural, ofreciendo alojamiento e instalaciones de alta  
                        calidad así como innovadoras, servicios personalizados y actividades al aire libre que permitan a nuestros huéspedes desconectar del estrés diario 
                        y disfrutar de la belleza y la tranquilidad de la naturaleza.""
                    </b>
                </p>
            </div>
            <br>

            <h2 class="m-4">Visión</h2>
            <div class="aboutUs_hotel m-auto mb-5">
                <p> 
                    <b>"Nuestra visión es ser el destino preferido de los aventureros que buscan una escapada en la montaña para encontrar el equilibrio perfecto entre la relajación, 
                        la aventura y la conexión con la naturaleza, destacándonos por nuestra arquitectura innovadora, nuestra excelencia de servicio y un compromiso constante con el 
                        bienestar de nuestros huéspedes."
                    </b>    
                </p>
            </div>


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