<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Sesson</title>
</head>
<body>
    <header>
    <h1>Contact</h1>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </header>

    <?php
        //echo $_SESSION["username"];

        if(!isset($_SESSION["username"])) {
            echo "You are not logged in!";
        }else{
            echo "You are logged in!";
        }
    ?>
    <script scr="js/app.js"></script>
</body>
</html>