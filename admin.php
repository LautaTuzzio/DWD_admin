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
        <div class="logo">ADMIN</div>
        <nav>
            <form action="logout.php">
                <ul>
                    <li><button class="button_top" id="logoutBtn">Cerrar Sesión</button></li>
                </ul>
            </form>
        </nav>

    </header>
    <main>
        <?php
        session_start();
        if ($_SESSION['status'] != "logued") {
            header("Location: index.php");
        }
        ?>
        <aside class="botonera">
            <div class="div-botonera">
                <button>
                    <span class="button_top" onclick=show_directivos()> Directivos </span>
                </button>


                <button>
                    <span class="button_top" onclick=show_especialidades()> Especialidades </span>
                </button>

                <button>
                    <span class="button_top" onclick=show_novedades()> Novedades </span>
                </button>
            </div>
        </aside>

        <script>
            document.querySelectorAll('.button_top').forEach(button => {
                button.addEventListener('click', function (e) {
                    document.querySelectorAll('.button_top').forEach(btn => {
                        btn.classList.remove('active');
                    });
                    e.target.classList.add('active');
                });
            });
        </script>
        <div class="default" id="default">
            <div class="svg">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M4 12L10 6M4 12L10 18M4 12H14.5M20 12H17.5" stroke="#fff" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>
            <h3 class="animated-text"></h3>
        </div>

        <script>
            const text = "Elige una opción";
            const container = document.querySelector('.animated-text');

            text.split('').forEach(letter => {
                const span = document.createElement('span');
                if (letter === ' ') {
                    span.textContent = '\u00A0'; 
                    span.classList.add('space');
                } else {
                    span.textContent = letter;
                }
                container.appendChild(span);
            });
        </script>
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
                        <span class="button_top" onclick="show_create_d()"> insert </span>
                    </button>
                </div>

                <div class="cambios">
                    <div class="update_d" id="update_d">
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

                    <div class="insert_d" id="create_d">
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


            <div id="especialidades">
                <div class="opciones">

                    <button onclick="show_update_e()">
                        <span class="button_top"> Update </span>
                    </button>

                    <button onclick="show_delete_e()">
                        <span class="button_top"> Delete </span>
                    </button>

                    <button onclick="show_insert_e()">
                        <span class="button_top"> insert </span>
                    </button>
                </div>

                <div class="cambios">
                    <div class="insert_e update_d" id="insert_e">
                        <form class="form_update" action="procesar_formulario.php" method="POST">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required>

                            <label for="descripcion">Descripción:</label>
                            <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea>
                            <br>

                            <label for="especialidad">Especialidad:</label>
                            <select id="especialidad" name="especialidad" required>
                                <option value="">Seleccione una especialidad</option>
                                <option value="programación">Programación</option>
                                <option value="electrónica">Electrónica</option>
                            </select>

                            <button type="submit" class="btn">Guardar Especialidad</button>
                        </form>
                    </div>
                    <div class="update_e" id="update_e">

                    </div>
                    <div class="delete_e" id="delete_e">

                    </div>
                </div>
            </div>
            <div id="novedades">
                <div class="opciones">
                    <button>
                        <span class="button_top" onclick="show_update_n()"> Update </span>
                    </button>

                    <button>
                        <span class="button_top" onclick="show_delete_n()"> Delete </span>
                    </button>

                    <button>
                        <span class="button_top" onclick="show_insert_n()"> insert </span>
                    </button>
                </div>
                <div class="cambios">
                    <div class="update_n" id="update_n">
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


                    <div class="delete_n" id="delete_n">
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

                    <div class="insert_n" id="insert_n">

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
                </div>
            </div>
        </div>
    </main>
</body>
<script src="./js/admin.js"></script>

</html>