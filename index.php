<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP</title>
</head>
<body>
    <?php
        $hs = "<h1 style='color: blue'>";
        $he = "</h1>";
        $name = "Paul Standley";
        $doing = " is learning <strong style='color: pink'>PHP</strong>";
        echo $hs.$name.$doing.$he; 
    ?>
    <hr>
    <form method="GET">
        <input type="text" name="answer">
        <button>Submit</button>
    </form>
    <?php
    // switch stament
    $x = $_GET['answer'];
    $Theansweris = "The answer is ";
    // runs without a value throws exseption
    //$x = "a number";
    switch($x) {
        case 1: echo $Theansweris.$x;
        break;
        case 2: echo $Theansweris.$x;
        break;
        case 3: echo $Theansweris.$x;
        break;
        case 4: echo $Theansweris.$x;
        break;
        default: echo $Theansweris.$x;
    }
    echo "<hr>";
    ?>
    <hr>
    <script src="app.js"></script>
</body>
</html>