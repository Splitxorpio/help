 <?php
    if (isset($_POST['logout'])) {
        session_start();
        session_destroy();
        print("logged out!");
    } else {
        session_start();
        if (isset($_SESSION['username'])) {
            print("logged in as " . " " . $_SESSION['username']);
        } else {
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
 </head>

 <body>
     <div class="container">
         <img class="logo" src="HELP.png">
         <h1>Healthy Environment & Life Protection</h1>
         <br>
         <hr class="hr">
         <br>
         <div class="item">
             <h2>Earth is unfortunately not a perfect place..</h2>
             <p>That is why you can help us make it a better place for every human being.</p>
             <br>
             <a class="signup" href="signup.php">Start Now!</a>
         </div>
         <br>
         <div class="row item">
             <img src="https://th.bing.com/th/id/OIP.lEIsXpY8spoJ0yHv15p53wHaGN?w=211&h=180&c=7&o=5&pid=1.7&adlt=strict">
             <div class="container2">
                 <h1>Help People Out</h1>
                 <p>Help people out by giving them money that can help them with debt, emergency, or many other things!</p>
             </div>
         </div>
         <br>
         <div class="row item">
             <div class="container2">
                 <h1>Loan</h1>
                 <p>Loan people things that they need for a dedicated amount of time!</p>
             </div>
             <img src="https://th.bing.com/th/id/OIP.kPOjwJlkgr3m02tN8wBB2QHaE5?w=263&h=180&c=7&o=5&pid=1.7&adlt=strict">
         </div>
         <br>
         <div class="row item">
             <img src="https://th.bing.com/th/id/OIP.dZ2d7F9Jut4H8I3IWw7yNgHaFs?w=230&h=180&c=7&o=5&pid=1.7&adlt=strict">
             <div class="container2">
                 <h1>Emergency</h1>
                 <p>Is it an emergency? Post it as an emergency post!</p>
             </div>
         </div>
         <br>
     </div>
 </body>

 </html>