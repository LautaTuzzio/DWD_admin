<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/novedades_admin.css">
</head>

<body>
    <nav class="especialidades_nav">
        <button id="insertBtnNov"> Insert </button>
        <button id="updateBtnNov"> Update </button>
        <button id="deleteBtnNov"> Delete </button>
    </nav>

    <main>
        <div class="container-novedades">
            <div id="insertNov" style="display:none;">
                <h2>Insertar Novedad</h2>
                <br>
                <form class="form_insert" action="insertar_novedades.php" method="POST">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" id="titulo" required>

                    <label for="texto">Texto:</label>
                    <textarea name="texto" id="texto" rows="4" required></textarea>

                    <label for="imagen">URL de la Imagen:</label>
                    <input type="url" name="imagen" id="imagen" required>

                    <br>
                    <input type="submit" value="Insertar">
                </form>
            </div>
            <div id="updateNov" style="display:none;">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sitio_web_institucional";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT id, titulo FROM novedades";
                $result = $conn->query($sql);
                ?>
                <form class="form_update" action="update_novedades.php" method="POST">
                    <label for="novedad">Elige una novedad para actualizar:</label>
                    <select name="novedad_id" id="novedad" required>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['titulo'] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No hay opciones disponibles</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <label for="titulo">Titulo:</label>
                    <input type="text" id="titulo" name="titulo" required>
                    <br><br>

                    <label for="texto">Texto:</label>
                    <input type="text" id="texto" name="texto" required>
                    <br><br>

                    <label for="imagen_url">Imagen:</label>
                    <input type="text" id="imagen_url" name="imagen_url" required>
                    <br><br>
                    <input type="submit" value="Actualizar">
                </form>
            </div>

            <div id="deleteNov" style="display:none;">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sitio_web_institucional";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT id, titulo FROM novedades";
                $result = $conn->query($sql);
                ?>

                <h2>Borrar Novedad</h2>
                <form class="form_delete" action="borrar_novedades.php" method="POST">
                    <label for="novedad">Elige una novedad para borrar:</label>
                    <select name="novedad_id" id="novedad" required>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['titulo'] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No hay opciones disponibles</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <input type="submit" value="Borrar">
                </form>
            </div>
        </div>
    </main>

    <script>
        const insertBtnNov = document.getElementById('insertBtnNov');
        const updateBtnNov = document.getElementById('updateBtnNov');
        const deleteBtnNov = document.getElementById('deleteBtnNov');

        const insertNov = document.getElementById('insertNov');
        const updateNov = document.getElementById('updateNov');
        const deleteNov = document.getElementById('deleteNov');

        function hideNovContent() {
            insertNov.style.display = 'none';
            updateNov.style.display = 'none';
            deleteNov.style.display = 'none';
        }

        insertBtnNov.addEventListener('click', function () {
            hideNovContent();
            insertNov.style.display = 'block';
        });

        updateBtnNov.addEventListener('click', function () {
            hideNovContent();
            updateNov.style.display = 'block';
        });

        deleteBtnNov.addEventListener('click', function () {
            hideNovContent();
            deleteNov.style.display = 'block';
        });
    </script>
</body>

</html>