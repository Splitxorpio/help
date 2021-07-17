<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" style="top: 30%; position:absolute;">
        <h1>Sign In</h1>
        <br>
        <p style="color:red;">Wrong username or password. Please try again.</p>
        <br>
        <form class="item" action="process.php" method="POST">
            <p class="">
                <label>Username:</label>
                <input style="padding:5px;" class="item" type="text" id="user" name="user"></input>
            </p>
            <br>
            <p class="">
                <label>Password:</label>
                <input style="padding:5px;" class="item" type="password" id="pass" name="pass"></input>
            </p>
            <br>
            <p>
                <input class="signup" type="submit" id="btn" value="Login"></input>
            </p>
        </form>
    </div>
</body>

</html>