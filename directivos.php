<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/LogoEESTN1.png" type="image/x-icon">
    <!-- Estilos css -->
    <link rel="stylesheet" href="css/globalStyle.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/directivos/main.css">
    <title>Escuela de Educación Tecnica N°1 Vicente Lopez</title>
</head>
<body>
    <?php
        include 'menu.php';
        get_active("dir"); 
    ?>
    <div class="espacio_menu"></div> <!-- genera un espacio para que al inicio el menu no se sobreponga sobre la información -->

    <!-- Cuerpo de la pagina -->
    <main>
        <!-- Esta parte es el recangulo azul claro que contiene el nombre de la sacción que se este viendo -->
        <div class="cont_presentacion">
            <div class="cont_linea">
                <div class="linea1"></div>
                <div class="linea2"></div>
            </div>
            <h2>Nuestros Directivos</h2>
        </div>

        <section class="cuerpo">
            <?php
                include "components/funciones.php";
                echo get_autoridades();
            ?>
        </section>
    </main>

    </body>
    </html>
    <script src="js/navegacion.js"></script>