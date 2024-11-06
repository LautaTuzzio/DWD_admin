<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Ingresar</h2>
            <form action="login_check.php" method="POST">
                <div class="input-group">
                    <label for="username">Nombre</label>
                    <input type="text" id="username" name="username" placeholder="Tu nombre" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Tu contraseña" required>
                </div>
                <button type="submit" class="btn">Ingresar</button>
            </form>
        </div>
        <div class="image-section">
            <img src="./img/historia.jpg" alt="Tec" />
        </div>
    </div>
</body>
</html>
