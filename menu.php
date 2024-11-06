
<input type="checkbox" id="nav_celular">

<input type="checkbox" id="nav_celular">

<label for="nav_celular" class="contenedor_nav_celular">
</label>
<nav class="cont_nav_lateral">
    <div class="cont_btn_salir">
        <h2>EEST N°1 VL</h2>
        <label for="nav_celular">
            <i class="fa-solid fa-xmark"></i>
        </label>
    </div>
    <div id="ini2" class="nav"><a href="index.php">Inicio</a></div>
    <div id="dir2" class="nav"><a href="directivos.php">Directivos</a></div>
    <div id="esp2" class="nav"><a href="especialidades.php">Especialidades</a></div>
    <div id="nov2" class="nav"><a href="novedades.php">Novedades</a></div>
    <input type="checkbox" id="sub_nav_celular">
    <div class="nav">
        <label for="sub_nav_celular">Campus<i class="fa-solid fa-chevron-down"></i></label>
        <div class="cont_sub_nav">
            <div class="sub_nav"><a href="https://eest.tecnica1vl.org/tecmood/login/index.php" target="_blank">Moodle</a></div>
            <div class="sub_nav"><a href="http://crmtec1vl.blogspot.com/" target="_blank">Blog</a></div>
        </div>
    </div>          
    </div>
    <div id="sed2" class="nav"><a href="sedes.php">Sedes</a></div>
    <div id="con2" class="nav"><a href="contactos.php">Contactos</a></div>
    <div id="ins2"class="nav"><a href="inscripciones.php">Inscripción 2024</a></div>  
</nav>
<header>
    <picture>
        <img src="img/LogoEESTN1.png" alt="">
    </picture>
    <nav class="cont_nav">
        <div id="ini" class="nav "><a href="index.php">Inicio</a></div>
        <div id="dir" class="nav"><a href="directivos.php">Directivos</a></div>
        <div id="esp" class="nav"><a href="especialidades.php">Especialidades</a></div>
        <div id="nov" class="nav"><a href="novedades.php">Novedades</a></div>
        <div class="nav">
            <p>Campus<i class="fa-solid fa-chevron-down"></i></p>
            <div class="cont_sub_nav">
                <div class="sub_nav"><a href="https://eest.tecnica1vl.org/tecmood/login/index.php" target="_blank">Moodle</a></div>
                <div class="sub_nav"><a href="http://crmtec1vl.blogspot.com/" target="_blank">Blog</a></div>
            </div>
        </div>            
        </div>
        <div id="sed" class="nav"><a href="sedes.php">Sedes</a></div>
        <div id="con" class="nav"><a href="contactos.php">Contactos</a></div>
        <div id="ins" class="nav"><a href="inscripciones.php">Inscripción 2024</a></div>
    </nav>
    <div class="cont_btn_nav_lateral">
        <label for="nav_celular">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>
</header>

<script src="https://kit.fontawesome.com/45f45403cb.js" crossorigin="anonymous"></script>


<?php
function get_active($nombre){
    echo '<script>document.getElementById("'.$nombre.'").className = "nav active"; document.getElementById("'.$nombre.'2").className = "nav active";</script>';

}
?>