<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <h1>Log in</h1>
        <form class="form" method="POST" action="login_check.php">
        <span class="input-span">
            <label class="label">Username</label>
            <input type="text" name="username" id="username"
        /></span>
        <span class="input-span">
            <label for="password" class="label">Password</label>
            <input type="password" name="password" id="password"/></span>
        <input class="submit" type="submit" value="Log in" />
        </form>
    </div>

</body>
</html>