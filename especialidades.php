<?php
include 'components/database_handler.php';
include 'menu.php';
get_active("esp");

// Obtener información de las especialidades
$programacion = getEspecialidadInfo('Programación');
$electronica = getEspecialidadInfo('Electrónica');

// Obtener secciones de las especialidades
$seccionesProgramacion = getEspecialidadSecciones('Programación');
$seccionesElectronica = getEspecialidadSecciones('Electrónica');
?>
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
    <div class="espacio_menu"></div>

    <main>
        <input type="radio" name="especialidad" id="programacion" checked>
        <input type="radio" name="especialidad" id="electronica">

        <div class="cont_presentacion">
            <div class="cont_linea">
                <div class="linea1"></div>
                <div class="linea2"></div>
            </div>
            <h2>Especialidades de nuestra Institución</h2>
        </div>
        
        <div class="cont_btn_epecialidad">
            <label for="programacion" class="especialidad programacion">
                <div class="cont_linea">
                    <div class="linea1"></div>
                    <div class="linea2"></div>
                </div>
                <h3>Programación</h3>   
                <div class="cont-icon">
                    <img src="img/icon-prog.png" alt="">
                </div>
            </label>

            <label for="electronica" class="especialidad electronica">
                <div class="cont_linea">
                    <div class="linea1"></div>
                    <div class="linea2"></div>
                </div>
                <h3>Electrónica</h3>
                <div class="cont-icon">
                    <img src="img/icon-elec.png" alt="">
                </div>
            </label>            
        </div>

        <div class="contenedor_programacion">
            <div class="nav_lateral">
                <?php foreach ($seccionesProgramacion as $seccion): ?>
                    <a href="#<?php echo $seccion['id']; ?>"><?php echo $seccion['titulo']; ?></a>
                <?php endforeach; ?>
                <a href="#materiasProg">Materias</a>
            </div>
            <div class="contenido">
                <?php foreach ($seccionesProgramacion as $seccion): ?>
                    <section id="<?php echo $seccion['id']; ?>">
                        <div class="cont">
                            <h3><?php echo $seccion['titulo']; ?></h3>
                            <p><?php echo $seccion['contenido']; ?></p>
                        </div>
                    </section>
                <?php endforeach; ?>
                
                <!-- La sección de materias se mantiene sin cambios -->
                <section id="materiasProg">
                    <div class="cont">
                        <h3>Materias de la especialidad</h3>
                        <div class="cont_materias">
                            <p>Materias de 4to</p>
                            <div class="curso">
                                <?php
                                    include "components/funcionMaterias4toProg.php";
                                    echo get_materias4to();
                                ?>
                            </div>
                            <p>Materias de 5to</p>
                            <div class="curso">
                            <?php
                                    include "components/funcionMaterias5toProg.php";
                                    echo get_materias5to();
                            ?>
                            </div>
                            <p>Materias de 6to</p>
                            <div class="curso">
                            <?php
                                    include "components/funcionMaterias6toProg.php";
                                    echo get_materias6to();
                            ?>
                            </div>
                            <p>Materias de 7mo</p>
                            <div class="curso">
                            <?php
                                    include "components/funcionMaterias7moProg.php";
                                    echo get_materias7mo();
                            ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="contenedor_electronica">
            <div class="nav_lateral">
                <?php foreach ($seccionesElectronica as $seccion): ?>
                    <a href="#<?php echo $seccion['id']; ?>"><?php echo $seccion['titulo']; ?></a>
                <?php endforeach; ?>
                <a href="#materiasElec">Materias</a>
            </div>
            <div class="contenido">
                <?php foreach ($seccionesElectronica as $seccion): ?>
                    <section id="<?php echo $seccion['id']; ?>">
                        <div class="cont">
                            <h3><?php echo $seccion['titulo']; ?></h3>
                            <p><?php echo $seccion['contenido']; ?></p>
                        </div>
                    </section>
                <?php endforeach; ?>
                
                <!-- La sección de materias se mantiene sin cambios -->
                <section id="materiasElec">
                    <div class="cont">
                        <h3>Materias de la especialidad</h3>
                        <div class="cont_materias">
                            <p>Materias de 4to</p>
                            <div class="curso">
                                <?php
                                    include "components/funcionMaterias4toElec.php";
                                    echo get_materias4toElec();
                                ?>
                            </div>
                            <p>Materias de 5to</p>
                            <div class="curso">
                                <?php
                                    include "components/funcionMaterias5toElec.php";
                                    echo get_materias5toElec();
                                ?>
                            </div>
                            <p>Materias de 6to</p>
                            <div class="curso">
                                <?php
                                    include "components/funcionMaterias6toElec.php";
                                    echo get_materias6toElec();
                                ?>
                            </div>
                            <p>Materias de 7mo</p>
                            <div class="curso">
                                <?php
                                    include "components/funcionMaterias7moElec.php";
                                    echo get_materias7moElec();
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

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
</html>