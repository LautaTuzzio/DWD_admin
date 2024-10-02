<?php

function get_images(string $imageId = null)
{
    include "sql_data.php";
    // Obtener la imagen desde la base de datos (suponiendo que tienes una columna llamada 'imagen_blob')
    $query = "SELECT `imagen` FROM imagenes WHERE id_imagen = $imageId";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Mostrar la imagen desde los datos binarios
    /*<img src="<?php include 'components/funciones.php';echo get_images(1);?>" alt="">*/
    return $row["imagen"];
    } else {
    return "Imagen no encontrada.";
    }

}

function existeImagen($url) {
    try {
        $imageData = @file_get_contents($url);
        return $imageData !== false;
    } catch (Exception $e) {
        return false;
    }
}

function get_autoridades(){
    include "sql_data.php";
    $query = $conn->query("SELECT * FROM autoridades ORDER BY orden ASC");
    $plantilla = "";
    $clase = "contenedor_carta";
    while ($row = $query->fetch_assoc()) {
        $query2 = $conn->query("SELECT * FROM rol_aut WHERE id = ".$row["id_rol"]."");
        $row2 =  $query2->fetch_assoc();
        $imagen = $row['imagen'];
       
        
        if (existeImagen($imagen) == false) {
            $imagen = "./img/sinFoto.jpg";
        }

        if($clase == "contenedor_carta reverse"){
            $clase = "contenedor_carta";
        }else{
            $clase = "contenedor_carta reverse";
        }
        $plantilla = $plantilla.'
        <div class="hidden '.$clase.'">        
            <picture class="imagen">
                <img src="'.$imagen.'" alt="imagen">
            </picture>
            <sectionc class="informacion">
                <div class="titulo">
                    <span></span>   
                    <h2>'.$row["nombre"].' '.$row["apellido"].'</h2>
                    <span></span>
                </div>
                <p class="cargo">'.$row2["rol"].'</p>
                <p>'.$row2["rol_desc"].'</p>
            </sectionc>
        </div>';
    }
    return $plantilla;
}
function get_novedades(){
    include "sql_data.php";
    $query = $conn->query("SELECT * FROM novedades ORDER BY id DESC");
    $plantilla = "";
    $clase = "noticia";
    while ($row = $query->fetch_assoc()) {
        $imagen = $row['imagen'];
        $titulo = $row['titulo'];
        $texto = $row['texto'];
        
        if (existeImagen($imagen) == false) {
            $imagen = "./img/sinFoto.jpg";
        }

        if($clase == "noticia reverse"){
            $clase = "noticia";
        }else{
            $clase = "noticia reverse";
        }
        
        $plantilla = $plantilla.'
        <div class="cont_noticia">
            <h2>'.$titulo.'</h2>
            <div class="noticia reverse">
                <p>'.$texto.'</p>
                <img src="'.$imagen.'" alt="">
            </div>
        </div>';
    }
    return $plantilla;
}
?>

