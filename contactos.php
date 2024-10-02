<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/LogoEESTN1.png" type="image/x-icon">
    <link rel="stylesheet" href="css/globalStyle.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contacto/main.css">
    <title>Escuela de Educación Tecnica N°1 Vicente Lopez</title>
</head>
<body>
    <?php
        include 'menu.php';
        get_active("con"); 
    ?>
    <div class="espacio_menu"></div> <!-- genera un espacio para que al inicio el menu no se sobreponga sobre la información -->

    <!-- Cuerpo de la pagina -->
    <input type="checkbox" name="mensajes" id="mensajes">
    <main>
        <!-- Esta parte es el recangulo azul claro que contiene el nombre de la sacción que se este viendo -->
        <div class="cont_presentacion">
            <div class="cont_linea">
                <div class="linea1"></div>
                <div class="linea2"></div>
            </div>
            <h2>Datos de contacto</h2>
        </div>

        <div class="contenedor_contacto">
            <div class="alineacion">
                <section class="contacto">
                    <div class="ubicacion">
                        <h3>UBICACION</h3>
                        <p>Cerrito 3966 - Villa Adelina Ciudad de Vicente López - Buenos Aires R.P.V: 4735-0174</p>
                    </div>
                    <div class="redes">
                        <h3>SIGUENOS</h3>
                        <div class="icons">
                            <a href="https://www.facebook.com/tecnicauno.vicentelopez"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.instagram.com/tecnica1_vicente_lopez/"><i class="fa-brands fa-instagram"></i></a>
                            <a href="mailto:inscripcion@tecnica1vl.org"><i class="fa-regular fa-envelope"></i></a>
                        </div>
                    </div>
                </section>
                <form target="_blank" action="https://formsubmit.co/candela.molinari.t1vl@gmail.com" method="POST">
                <input type="text" name="name" id="nombre" placeholder="Nombre completo" required>
                    <input type="email" name="email" id="mail" placeholder="Correo electronico" required>
                    <textarea placeholder="Mensaje" id="mensaje" class="mensaje" name="message" rows="10" required></textarea>
                    <div class="cont_btn">
                        <input type="submit" value="ENVIAR">
                    </div>
            </div>
        </div>
    </main>

    <section class="contenedor_ventana">
        <label for="mensajes"><div></div></label>
        <div class="contenedor_mensajes">
            <div class="cont_mensaje">
                <?php
                include "components/sql_data.php";
                $consulta_contacto = $conn->query("SELECT * FROM contacto");
                while ($r_contacto = $consulta_contacto->fetch_assoc()) {
                ?>
                <div class="carta_mensaje">
                    <p class="nombre">Mensaje de <?php echo $r_contacto['nombre']; ?></p>
                    <div class="cont">
                        <p class="texto_mensaje"><?php echo $r_contacto['mensaje']; ?></p> 
                        <p class="mail">mail: <?php echo $r_contacto['email']; ?></p> 
                        <p class="numero">numero: <?php echo $r_contacto['numero']; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
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
    </html>