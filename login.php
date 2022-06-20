<?php 

require_once "inc/Koneksi.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/login.css">
</head>

<body>
    <div class="login">

        <div class="avatar">
        </div>
        
        <form action="proses.php" method="post">
            <h2>Login Form</h2>

            <div class="box-login">
                <input type="username" name="username"  placeholder="username" required>
            </div>

            <div class="box-login">
                <input type="password" name="password" placeholder="password" required>
            </div>

            <button type="submit" name="login" class="btn-login">Login</button>
            <div class="bottom">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
            </div>
        </form>
    </div>

</body>

</html>