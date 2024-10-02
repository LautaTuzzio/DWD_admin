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
    <link rel="stylesheet" href="css/especialidades/main.css">
    <title>Escuela de Educación Tecnica N°1 Vicente Lopez</title>
</head>
<body>
    <?php
        include 'menu.php';
        get_active("esp");
    ?>
    <div class="espacio_menu"></div> <!-- genera un espacio para que al inicio el menu no se sobreponga sobre la información -->

    <!-- Cuerpo de la pagina -->
    <main>
        <input type="radio" name="especialidad" id="programacion" checked>
        <input type="radio" name="especialidad" id="electronica">

        <!-- Esta parte es el recangulo azul claro que contiene el nombre de la sacción que se este viendo -->
        <div class="cont_presentacion">
            <div class="cont_linea">
                <div class="linea1"></div>
                <div class="linea2"></div>
            </div>
            <h2>Especialidades de nuestra Institución</h2>
        </div>
        
        <!-- Contenedor de los botones -->
        <div class="cont_btn_epecialidad">

            <!-- Los input radio los usaremos para que el usuario elija ver la información de la especialidad que seleccione -->
            <!-- PROGRAMACIÓN -->
            <label for="programacion" class="especialidad programacion">
                <div class="cont_linea">
                    <div class="linea1"></div>
                    <div class="linea2"></div>
                </div>
                <h3>Programación</h3>   
                <div class="cont-icon">
                    <img src="./img/icon-prog.png">
                    <img src="./img/torres.png" alt="">
                </div>
            </label>

            <!-- Los input radio los usaremos para que el usuario elija ver la información de la especialidad que seleccione -->
            <!-- ELECTRONICA -->
            <label for="electronica" class="especialidad electronica">
                <div class="cont_linea">
                    <div class="linea1"></div>
                    <div class="linea2"></div>
                </div>
                <h3>Electronica</h3>
                <div class="cont-icon">
                    <img src="./img/icon-elec.png">
                </div>
            </label>            
        </div>


        <!-- Contenido a mostrar -->
        <div class="contenedor_programacion">
            <div class="nav_lateral">
                <a class="hidden" href="#objetivoProg">Objetivos</a>
                <a class="hidden" href="#materiasProg">Materias</a>
                <a class="hidden" href="#perfilProg">Perfil academico del/a egresado/a</a>
                <a class="hidden" href="#planEstProg">Estructura del plan de estudio</a>
                <a class="hidden" href="#DiOrProg">Diseño y organizacion curricular</a>
                <a class="hidden" href="#ContMiniProg">Contenidos minimos</a>
                <a class="hidden" href="#proyectosProg">Proyectos realizados</a>
             </div>
             <div class="contenido">
                <section id="objetivoProg">
                    <div class="cont hidden">
                        <h3>Objetivo</h3>
                        <p>La carrera de programación se centra en la adquisición de habilidades para desarrollar software y aplicaciones informáticas. Los estudiantes aprenden a programar en diferentes lenguajes de programación, como Javascript, Python, C++, entre otros. Se enfatiza la resolución de problemas, la lógica de programación y el diseño de algoritmos. Los graduados están preparados para trabajar como programadores, desarrolladores de software o en roles relacionados en la industria de la tecnología.</p>
                    </div>
                    <img src="./img/icon-prog.png" alt="imagen de la especialidad">
                </section>
                <section id="materiasProg">
                    <div class="cont">
                        <h3 class="hidden">Materias de la especialidad</h3>
                        <div class="cont_materias">
                            <p class="hidden">Materias de 4to</p>
                            <div class="curso hidden">
                                <?php
                                    include "components/funcionMaterias4toProg.php";
                                    echo get_materias4to();
                                ?>
                                                        <br>

                            </div>
                            <p class="hidden">Materias de 5to</p>
                            <div class="curso hidden">
                            <?php
                                    include "components/funcionMaterias5toProg.php";
                                    echo get_materias5to();
                            ?>
                                                        <br>
                            </div>
                            <p class="hidden">Materias de 6to</p>
                            <div class="curso hidden">
                            <?php
                                    include "components/funcionMaterias6toProg.php";
                                    echo get_materias6to();
                            ?>
                                                        <br>

                            </div>
                            <p class="hidden">Materias de 7mo</p>
                            <div class="curso hidden">
                            <?php
                                    include "components/funcionMaterias7moProg.php";
                                    echo get_materias7mo();
                            ?>
                                                        <br>

                            </div>
                        </div>
                    </div>
                </section>
                <div id="perfilProg">

                </div>
                <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "sitio_web_institucional";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Error de conexión: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM especialidades WHERE especialidad = 'programacion' ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $results = $result->fetch_all(MYSQLI_ASSOC);
                        foreach ($results as $row) {
                            echo <<< espe
                            <section class="hidden" id="planEstProg">
                                <div class="cont">
                                    <h3> {$row["nombre"]} </h3>
                                    <p>{$row["descripcion"]}</p>
                                </div>
                            </section>
                            espe;
                        }
                    } else {
                        echo "No hay resultados.";
                    }

                    $conn->close();
                ?>
             </div>
        </div>
        <div class="contenedor_electronica">
            <div class="nav_lateral">
                <a href="#objetivoElec">Objetivos</a>
                <a href="#materiasElec">Materias</a>
                <a href="#perfilElec">Perfil academico del/a egresado/a</a>
                <a href="#planEstElec">Estructura del plan de estudio</a>
                <a href="#DiOrElec">Diseño y organizacion curricular</a>
                <a href="#ContMiniElec">Contenidos minimos</a>
                <a href="#proyectosElec">Proyectos realizados</a>
             </div>
             <div class="contenido">
                <section class="hidden" id="objetivoElec">
                    <div class="cont">
                        <h3>Objetivo</h3>
                        <p>La carrera de electrónica se enfoca en la electrónica y la tecnología de circuitos electrónicos. Los estudiantes aprenden a diseñar, construir y reparar dispositivos electrónicos, circuitos y sistemas. Se enseñan conceptos de electrónica analógica y digital, así como también sistemas de control y automatización. Los graduados están capacitados para trabajar en la industria de la electrónica, en mantenimiento de equipos electrónicos, desarrollo de circuitos y sistemas, o como técnicos de reparación de dispositivos electrónicos.</p>
                    </div>
                    <img src="./img/icon-elec.png" alt="imagen de la especialidad">
                </section>
                <section class="hidden" id="materiasElec">
                    <div class="cont">
                        <h3>Materias de la especialidad</h3>
                        <div class="cont_materias">
                            <p class="hidden">Materias de 4to</p>
                            <div class="hidden" class="curso">
                                <?php
                                    include "components/funcionMaterias4toElec.php";
                                    echo get_materias4toElec();
                                ?>
                                <br>
                            </div>
                        <div class="cont_materias">
                        <p class="hidden">Materias de 5to</p>
                        <div class="hidden" class="curso">
                            <?php
                                include "components/funcionMaterias5toElec.php";
                                echo get_materias5toElec();
                            ?>
                            <br>
                        </div>
                        <div class="cont_materias">
                            <p class="hidden">Materias de 6to</p>
                            <div class="hidden" class="curso">
                                <?php
                                    include "components/funcionMaterias6toElec.php";
                                    echo get_materias6toElec();
                                ?>
                                <br>
                            </div>
                        <div class="cont_materias">
                        <p class="hidden">Materias de 7mo</p>
                        <div class="hidden" class="curso">
                            <?php
                                include "components/funcionMaterias7moElec.php";
                                echo get_materias7moElec();
                            ?>
                            <br>
                        </div>
                    </div>

                </section>
                
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "sitio_web_institucional";

                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Error de conexión: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM especialidades WHERE especialidad = 'electronica' ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $results = $result->fetch_all(MYSQLI_ASSOC);
                        foreach ($results as $row) {
                            echo <<< espe
                            <section class="hidden" id="planEstProg">
                                <div class="cont">
                                    <h3> {$row["nombre"]} </h3>
                                    <p>{$row["descripcion"]}</p>
                                </div>
                            </section>
                            espe;
                        }
                    } else {
                        echo "No hay resultados.";
                    }

                    $conn->close();
                    ?>
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


   
    </body>
    <script>
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
    </html>