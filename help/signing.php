<?php
include "db.php";
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if($username == null){
        header("Location:signuperr.php");
    }
    elseif($password == null){
        header("Location:signuperr.php");
    }
    else{
        $sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
        mysqli_query($conn, $sql);
    }

}
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