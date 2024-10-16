<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/directivos_admin.css">
</head>
<body>
            <div id="directivos">
                <div class="opciones">
                    <button>
                        <span class="button_top" id="update-btn"> Update </span>
                    </button>

                    <button>
                        <span class="button_top" id="delete-btn"> Delete </span>
                    </button>

                    <button>
                        <span class="button_top" id="insert-btn"> insert </span>
                    </button>
                </div>

                <div class="cambios">
                    <div class="update_d" id="update_d" style="display: none;">
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "sitio_web_institucional";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql_autoridades = "SELECT id, nombre FROM autoridades";
                            $result_autoridades = $conn->query($sql_autoridades);

                            $sql_trayectorias = "SELECT id, trayectoria_laboral FROM trayectoria";
                            $result_trayectorias = $conn->query($sql_trayectorias);

                            $sql_roles = "SELECT id, rol FROM rol_aut";
                            $result_roles = $conn->query($sql_roles);
                        ?>

                        <form class="form_update" action="update_directivos.php" method="POST">
                            <label for="autoridad">Elige una autoridad para actualizar:</label>
                            <select name="autoridad_id" id="autoridad">
                                <?php
                                if ($result_autoridades->num_rows > 0) {
                                    while ($row = $result_autoridades->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No hay opciones disponibles</option>";
                                }
                                ?>
                            </select>
                            <br><br>

                            <label for="orden">Orden:</label>
                            <input type="number" id="orden" name="orden" required>
                            <br><br>

                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required>
                            <br><br>

                            <label for="apellido">Apellido:</label>
                            <input type="text" id="apellido" name="apellido" required>
                            <br><br>

                            <label for="imagen_url">URL de la imagen:</label>
                            <input type="url" id="imagen_url" name="imagen_url">
                            <br><br>

                            <label for="anos_activo">Años Activo:</label>
                            <input type="number" id="anos_activo" name="anos_activo" required>
                            <br><br>

                            <label for="id_trayectoria">ID Trayectoria:</label>
                            <select name="id_trayectoria" id="id_trayectoria">
                                <?php
                                if ($result_trayectorias->num_rows > 0) {
                                    while ($row = $result_trayectorias->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>ID: " . $row['id'] . " - " . $row['trayectoria_laboral'] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No hay opciones disponibles</option>";
                                }
                                ?>
                            </select>
                            <br><br>

                            <label for="id_rol">ID Rol:</label>
                            <select name="id_rol" id="id_rol">
                                <?php
                                if ($result_roles->num_rows > 0) {
                                    while ($row = $result_roles->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>ID: " . $row['id'] . " - " . $row['rol'] . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No hay opciones disponibles</option>";
                                }
                                ?>
                            </select>
                            <br><br>

                            <input type="submit" value="Actualizar">
                        </form>

                    </div>

                    <div class="delete_d" id="delete_d" style="display:none;">

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

                    <div class="insert_d" id="insert_d" style="display:none;">
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "sitio_web_institucional";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql_trayectorias = "SELECT id, trayectoria_laboral FROM trayectoria";
                            $result_trayectorias = $conn->query($sql_trayectorias);

                            $sql_roles = "SELECT id, rol FROM rol_aut";
                            $result_roles = $conn->query($sql_roles);
                        ?>
                        <div>
                            <h2>Insertar Autoridad</h2>
                            <form action="insert_directivos.php" method="POST">

                                <label for="orden">Orden:</label>
                                <input type="number" id="orden" name="orden" required>

                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" required>

                                <label for="apellido">Apellido:</label>
                                <input type="text" id="apellido" name="apellido" required>

                                <label for="imagen_url">URL de la imagen:</label>
                                <input type="url" id="imagen_url" name="imagen_url">

                                <label for="anos_activo">Años Activo:</label>
                                <input type="number" id="anos_activo" name="anos_activo" required>

                                <label for="id_trayectoria">ID Trayectoria:</label>
                                <select name="id_trayectoria" id="id_trayectoria" required>
                                    <option value="">Seleccione una trayectoria</option>
                                    <?php
                                    if ($result_trayectorias->num_rows > 0) {
                                        while ($row = $result_trayectorias->fetch_assoc()) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['trayectoria_laboral'] . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>No hay trayectorias disponibles</option>";
                                    }
                                    ?>
                                </select>

                                <label for="id_rol">ID Rol:</label>
                                <select name="id_rol" id="id_rol" required>
                                    <option value="">Seleccione un rol</option>
                                    <?php
                                    if ($result_roles->num_rows > 0) {
                                        while ($row = $result_roles->fetch_assoc()) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['rol'] . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>No hay roles disponibles</option>";
                                    }
                                    ?>
                                </select>

                                <input type="submit" value="Insertar">
                            </form>
                        </div>


                    </div>
                </div>

            </div>
</body>
<script>
        const updateBtn = document.getElementById('update-btn')
        const deleteBtn = document.getElementById('delete-btn')
        const insertBtn = document.getElementById('insert-btn')

        const updateSection = document.getElementById('update_d')
        const deleteSection = document.getElementById('delete_d')
        const insertSection = document.getElementById('insert_d')

        function hideAllSections() {
            updateSection.style.display = 'none'
            deleteSection.style.display = 'none'
            insertSection.style.display = 'none'
        }

        updateBtn.addEventListener('click', function() {
            hideAllSections()
            updateSection.style.display = 'block'
        })

        deleteBtn.addEventListener('click', function() {
            hideAllSections()
            deleteSection.style.display = 'block'
        })

        insertBtn.addEventListener('click', function() {
            hideAllSections()
            insertSection.style.display = 'block' 
        })
    </script>
</html>