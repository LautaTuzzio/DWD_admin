<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <header>
        <div class="logo">Admin site</div>
        <nav>
            <ul>
                <li><a href="index.php">Log out</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <aside class="botonera">
            <div class="div-botonera">
                <button>
                    <span class="button_top" onclick=show_directivos() > Directivos </span>
                </button>

                <button>
                    <span class="button_top" onclick=show_especialidades() > Especialidades </span>
                </button>

                <button>
                    <span class="button_top" onclick=show_novedades() > Novedades </span>
                </button>
            </div>
        </aside>
        <div>
            <div id="directivos">
                <div class="opciones">
                    <button>
                        <span class="button_top" onclick="show_update_d()"> Update </span>
                    </button>

                    <button>
                        <span class="button_top" onclick="show_delete_d()"> Delete </span>
                    </button>

                    <button>
                        <span class="button_top" onclick="show_create_d()"> create </span>
                    </button>
                </div>

                <div class="cambios">
                    <div class="update_d" id="update_d">
                        
                    </div>

                    <div class="delete_d" id="delete_d">

                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "sitio_web_institucional";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT id, nombre FROM autoridades";
                            $result = $conn->query($sql);
                        ?>

                        <form class="form_delete" action="delete_directivos.php" method="POST">
                            <label for="autoridad">Elige una autoridad para eliminar:</label>
                            <select name="autoridad_id" id="autoridad">
                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No hay opciones disponibles</option>";
                                }
                                ?>
                            </select>
                            <br><br>
                            <input type="submit" value="Eliminar">
                        </form>
                    </div>

                    <div class="create_d" id="create_d">

                    </div>
                </div>

            </div>


            <div id="especialidades" >
                <h1>b</h1>
            </div>
            <div id="novedades">
                <h1>c</h1>
            </div>
        </div>
    </main>
</body>
<script src="./js/admin.js"></script>
</html>