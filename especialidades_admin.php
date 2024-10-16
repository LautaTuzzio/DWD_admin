<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/especialidades_admin.css">
</head>

<body>
    <nav class="especialidades_nav">
        <button id="insertBtnEsp"> Insert </button>
        <button id="updateBtnEsp"> Update </button>
        <button id="deleteBtnEsp"> Delete </button>
    </nav>

    <main>
        <div class="container-especialidades">
            <div id="content1" style="display:none;">
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
            <div id="content2" style="display:none;">To do ?</div>

            <div id="content3" style="display:none;">
                
                <form class="form_delete" action="delete_especialidad.php" method="POST">
                    <label for="especialidad">Elige una seccion para borrar:</label>
                    <select name="especialidad_id" id="especialidad" required>
                        <?php
                        //rehacer el php
                        ?>
                    </select>
                    <br>
                    <input type="submit" value="Borrar">
                </form>
            </div>
        </div>
    </main>

    <script>
        const insertBtnEsp = document.getElementById('insertBtnEsp')
        const updateBtnEsp = document.getElementById('updateBtnEsp')
        const deleteBtnEsp = document.getElementById('deleteBtnEsp')

        const content1 = document.getElementById('content1')
        const content2 = document.getElementById('content2')
        const content3 = document.getElementById('content3')

        function hideAllContents() {
            content1.style.display = 'none'
            content2.style.display = 'none'
            content3.style.display = 'none'
        }

        insertBtnEsp.addEventListener('click', function () {
            hideAllContents()
            content1.style.display = 'block'
        })

        updateBtnEsp.addEventListener('click', function () {
            hideAllContents()
            content2.style.display = 'block'
        })

        deleteBtnEsp.addEventListener('click', function () {
            hideAllContents()
            content3.style.display = 'block'
        });
    </script>
</body>

</html>