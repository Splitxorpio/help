<?php
include 'db.php';
$myArray = array();
if ($result = $conn->query("SELECT * FROM posts")) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELP</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="post.css"> -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Funding Posts</h1>
        <hr>
        <br>
    </div>
    <?php foreach ($myArray as $post) {  ?>
        <!-- Keyword == emergency (keyword will only be set if box in post.php is checked, else do not set the variable) -->
        <!-- If keyword in $post, print it first -->
        <div class="container">
            <br>
            <?php if ($post['emergency'] === 'true') { ?>
                <div class="item">
                    <p style="color: red;">Emergency Post:</p>
                    <br>
                    <p><?php echo $post['user'] ?></p>
                    <hr>
                    <?php echo $post['post'] ?>
                </div>
            <?php } else { ?>
                <div class="item">
                    <p><?php echo $post['user'] ?></p>
                    <hr>
                    <?php echo $post['post'] ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>

    <script src="https://code.jquery.com/git/jquery-3.x-git.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


</body>

</html>