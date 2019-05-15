<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>PHP</title>
</head>
<body>
<?php 
    // https://www.w3schools.com/php/func_date_date.asp
    $dayofweek = date("w");   
    switch($dayofweek) {
        case 0: echo "it is Sunday";
        break;
        case 1: echo "it is Monday";
        break;
        case 2: echo "it is Tuesday";
        break;
        case 3: echo "it is Wednesday";
        break;
        case 4: echo "it is Thursday";
        break;
        case 5: echo "it is Friday";
        break;
        case 6: echo "it is Saturday";
        break;
        default: "No day";
    }
    $hr = "<hr>";
    $br = "<br>";
    $colorArray = array("red", "pink", "blue", "green");
    echo $hr;
    $x = 0;
    echo "<h2>while loop</h2>";
    while($x <= 3) {
        echo "<h3 style='color: $colorArray[$x]'>$colorArray[$x]</h3>";
        echo "<h4 style='color: $colorArray[$x]'>Loop ".$x."</h4>".$br;
        $x++;
    }
    echo $hr;
    $z = 3;
    echo "<h2>do while loop</h2>";
    do {
        echo "<h3 style='color: $colorArray[$z]'>$colorArray[$z]</h3>";
        echo "<h4 style='color: $colorArray[$z]'>Loop ".$z."</h4>".$br;
        $z--;
    }while($z >= 0);
    echo $hr;
    echo "<h2>For loop</h2>";
    for($i = 0; $i <= 3; $i++) {
        echo "<h3 style='color: $colorArray[$i]'>$colorArray[$i] $i</h3>";
    }
    echo $hr;
    echo "<h2>Foreach array loop</h2>";
    foreach($colorArray as $loopdata) {
        echo "<h3 style='color: $loopdata'>My color is $loopdata</h3>";
    }
    echo $hr;
?>
    <script src="js/app.js"></script>
</body>
</html>