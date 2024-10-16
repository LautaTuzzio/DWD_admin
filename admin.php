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
        <nav>
            <a href="index.php">Cerrar sesion</a>
        </nav>
    </header>

    <div class="container">
        <div class="btn-holder">
            <button id="btn1">Directivos</button>
            <button id="btn2">Especialidades</button>
            <button id="btn3">Novedades</button>
        </div>
        <div class="content-holder">
            <div id="directivos" style="display: none;"><?php include_once "directivos_admin.php"; ?></div>
            <div id="especialidades" style="display: none;"> <?php include_once "especialidades_admin.php"; ?></div>
            <div id="novedades" style="display: none;"><?php include_once "novedades_admin.php"; ?></div>
        </div>
    </div>
    <script>
    console.log("tes");
    
    document.getElementById('btn1').addEventListener('click', function() {
        showSection('directivos');
    });

    document.getElementById('btn2').addEventListener('click', function() {
        showSection('especialidades');
    });

    document.getElementById('btn3').addEventListener('click', function() {
        showSection('novedades');
    });

    function showSection(sectionId) {
        document.getElementById('directivos').style.display = 'none';
        document.getElementById('especialidades').style.display = 'none';
        document.getElementById('novedades').style.display = 'none';
        
        document.getElementById(sectionId).style.display = 'block';
    }
</script>
</body>

</html>