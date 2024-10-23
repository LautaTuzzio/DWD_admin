<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>LOG IN</h2>
            <form action="login_check.php" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Your username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Your Password" required>
                </div>
                <button type="submit" class="btn">Log In</button>
            </form>
        </div>
        <div class="image-section">
            <img src="./img/historia.jpg" alt="Tec" />
        </div>
    </div>
</body>
</html>
