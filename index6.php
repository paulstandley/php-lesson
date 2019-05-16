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
    <h1>PHP functions</h1>
    <?php 
        $array = array("Paul", "Louise", "Kerrin", "Melissa");
        echo "Hello ".$array[0]."<br>";
        $x = 100;
        function newCalc($x) {
            $newnumber = $x * 0.75;
            echo "here is 75% of what you wrote: ".$newnumber;
        }
        $x = 1000;
        $a = 10;
        newCalc($x);
        echo "<br>";
        newCalc($a);
    ?>
    <script src="js/app.js"></script>
</body>
</html>