<?php
include 'db.php';
ob_start();
session_start();
$username = $_POST['user'];
$password = $_POST['pass'];
$_SESSION['valid'] = true;
$_SESSION['timeout'] = time();
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
print("Logged in as "." ".$_SESSION['username']);

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' and password = '$password'")
    or die("Failed to query database" . mysqli_error($link));
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
</head>

<body>
    <div class="container" style="top: 40%; position:absolute;">
        <div class="item">
            <h1 class="">
                <?php
                if ($row['username'] == $username && $row['password'] == $password) {
                    echo "👋 Hello " . $row['username'] . "!";
                } else {
                    header("Location:signingerr.php");
                }
                ?>
            </h1>
            <br>
            <hr>
            <br>
            <a href="post.php" class="signup">Set up a Helpost!</a>
            <br>
            <br>
            <a href="feed.php" class="signup">Help someone out today!</a>
            <br>
            <br>
            <form method="POST" action="index.php">
                <input class="signup" type="submit" name="logout" value="Sign Out!">
            </form>
        </div>
    </div>
</body>

</html>