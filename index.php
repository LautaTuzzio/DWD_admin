<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/LogoEESTN1.png" type="image/x-icon">
    <!-- Estilos css -->
    <link rel="stylesheet" href="css/globalStyle.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/inicio/main.css">
    <link rel="stylesheet" href="css/inicio/slider.css">
    <title>Escuela de Educación Tecnica N°1 Vicente Lopez</title>
</head>

<body>
    <?php
    include 'menu.php';
    get_active("ini");
    ?>
    <!-- genera un espacio para que al inicio el menu no se sobreponga sobre la información -->

    <!-- Cuerpo de la pagina -->
    <main>
        <!-- En esta parte se pondra un carrusel de imagenes -->
        <div class="contenedor__carrusel" >
            <div class="carrusel">
                <div class="contenedor__items">
                    <?php
                    include "components/sql_data.php";
                    $consulta_slider = $conn->query("SELECT imagen FROM imagenes WHERE nombre_img = 'carrusel'");
                    $consulta_historia = $conn->query("SELECT imagen FROM imagenes WHERE nombre_img = 'historia'");
                    $r_historia = $consulta_historia->fetch_assoc();
                    while ($r_slider = $consulta_slider->fetch_assoc()) {
                    ?>
                    <section class="items">
                        <img src="<?php echo $r_slider['imagen']; ?>">
                    </section>
                    <?php } ?>  
                </div>
            </div>
            <div class="contenedor__botones">
                <div id="boton__anterior">
                    <i class="fa-solid fa-angle-left"></i>
                </div>
                <div id="boton__siguiente">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>

        <!-- Un contenedor para pones una imagen de la escuela y su historia -->
        <div class="cont_historia_escolar">

            <!-- Zona para cargar la imagen -->
            <div class="cont_img">
                <img src="<?php echo $r_historia['imagen']; ?>">
            </div>

            <!-- Contenedor para la historia -->
            <div class="cont_historia">

                <!-- El titulo -->
                <div class="cont_titulo">
                    <div class="linea"></div>
                    <h1>NUESTRA HISTORIA</h1>
                    <div class="linea"></div>
                </div>

                <!-- Zona para cargar la información de la escuela -->
                <div class="cont_info hidden">
                    <p>El edificio se construyó sobre los terrenos donados por la Sra. Elisa Schulze de Ader y Ana Elisa
                        Ader de Grümbaum, esposa e hija de don Bernardo Ader,
                        ya fallecido, y que fueron aceptados por la Municipalidad mediante la Ordenanza N°644 del año
                        1934. La idea de la construcción de una escuela industrial
                        surgió del integrante del Club de Leones, Ceferino Fernández, al comprobar la necesidad de un
                        establecimiento de este tipo en la zona de Villa Adelina.</p>
                    <p>Así, a fines del año 1983, el Club de Leones de Villa Aadelina hizo entrega de la escuela a las
                        autoridades Municipales. La escuela abrió sus puertas el
                        16 de abril de 1984 en un predio de 800 m², con un total de 72 alumnos. Con el correr de los
                        años, la escuela fue creciendo y, en la actualidad, la matrícula
                        es aproximadamente de 700 alumnos que cursan en turno mañana,tarde y noche, distribuidos en
                        catorce divisiones de ciclo básico y once divisiones de ciclo
                        superior secundario.</p>
                    <p>La escuela cuenta, hoy en dia, con 20 aulas, las cuales 9 son para realizar los talleres y las
                        materias de laboratorio. La Asociación Cooperadora, que
                        funciona desde la fundación de la escuela, ha sido de gran ayuda para el mantenimiento edilicio
                        y la provisión de todos los insumos necesarios. El director
                        de la escuela es el Lic. Omar Brandan y los vicedirectores son los Pf. Ezequiel Torres y Pf.
                        Daniel Segnini.</p>
                    <p>La escuela de Educacion Técnica N°1 "Eduardo Ader" sostiene como ideario la formacion en valores,
                        el crecimiento como ciudadanos y, a partir de esa base,
                        acompañar a los alumnos para que logren construir un proyecto de vida personal y profesional.
                    </p>
                </div>
            </div>
        </div>

    </main>


    <!-- Footer -->
    <footer>
        <div class="escuela">
            <div class="linea"></div>
            <p>Escuela de Educación Tecnica N°1 Eduardo Ader</p>
            <div class="linea"></div>
        </div>
        <div class="cont_footer">
            <p>Copyright © 2023 - Programación 6to 3ra</p>
        </div>
    </footer>

    <script src="./js/slider.js"></script>
</body>

</html>
<script>  
    song = 0
    function sonido(){
        sonido = document.getElementById("sonido")
        if(song == 1){
            sonido.pause()
            song = 0
        }else{
            sonido.play()
            song = 1
        }
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if(entry.isIntersecting){
                entry.target.classList.add('show')
            }
        })
    })
    const hiddenElements = document.querySelectorAll('.hidden')
    hiddenElements.forEach((el) => observer.observe(el))
</script>
