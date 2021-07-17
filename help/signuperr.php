<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" style="top: 30%; position:absolute;">
        <h1 class="">Sign Up</h1>
        <br>
        <p style="color:red;">Please provide a proper username or password.</p>
        <br>
        <hr style="width: 20%;">
        <br>
        <div class="item">
            <form action=" register.php" method="post" class="">
                <label class="">Username</label>
                <input style="padding:5px;" class="item" type=" text" name="username" id="username" alt="Username" placeholder="Username">
                <br>
                <br>
                <label class="">Password</label>
                <input style="padding:5px;" class="item" type="password" name="password" id="password" alt="Username" placeholder="Password">
                <br>
                <br>
                <input style="padding:5px;" class="signup" type="submit" name="register" value="Sign Up"></input>
            </form>
            <br>
            <p>Already have an account? <a href="signing.php" class="signup">Sign In!</a></p>
        </div>
    </div>
</body>

</html>