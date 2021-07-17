<?php
session_start();
print("logged in as " . " " . $_SESSION['username']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="post.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
    <h1 class="post_heading">Post for HELP</h1>
    <div id="editor">

    </div>
    <form method="post" name="form">
        <br>
        <input type="checkbox" id="emergency" name="emergency">
        <label>Mark as emergency</label>
        <br>
        <br>
        <button class="submit" type="submit" name="submit">post</button>
    </form>
    <script src="https://code.jquery.com/git/jquery-3.x-git.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        document.querySelector("#emergency").addEventListener("click", checkFunction);

        function checkFunction() {
            var checkBox = document.querySelector("#emergency");
            if (checkBox.checked == true) {
                console.log("checked");
            } else {
                
            }
        }
        var quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: '<-- Make sure to provide the amount of money you want and a link to your cashapp or transaction page!--!>',
        });


        $("form").on("submit", function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'submit.php',
                data: {
                    data: document.querySelector('.ql-editor').innerHTML,
                    emergency: document.querySelector("#emergency").checked
                },
                success: function(data) {
                    alert("Posted!");
                }
            });
        })
    </script>
    <script>

    </script>
</body>

</html>