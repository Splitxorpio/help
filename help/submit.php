<?php 
    include 'db.php';
    session_start();
    echo json_encode($_POST['data']);
    $data = $_POST['data'];
    $emergency = $_POST['emergency'];
    $username = $_SESSION['username'];
    $sql = "INSERT INTO posts (post, user, emergency) VALUES ('$data', '$username', '$emergency')";
    mysqli_query($conn, $sql);
?>