<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Internal Functions</h1>
    <hr>
    <?php
        $HR = "<hr>";
        echo "<h2>Hi Paul<h2>";
        echo "echo h2 tag";
        print $HR;
        print "print strlen = ";
        print strlen("<h2>Hi Paul<h2>");
        print $HR;
        echo "echo str_word_count = ";
        echo str_word_count("How many words are there");
        echo $HR;
        echo strrev("Is it or is it not");
        print "<h2> is strrev <h2>";
        echo $HR;
        echo "strpos = ";
        print strpos("HAVE A NICE DAY", "NICE");
        echo $HR;
        print "<h2>str_repalce</h2>";
        echo str_replace("bad", "greate","I am so bad its not human");
        echo $HR;
        // string
        $name = "Paul Sandley";
        // interger
        $interger = 2;
        // float
        $float = 3.1415;
        // boolean
        //true = 1
        //false = 0
        // array 
        $array = array("Paz", "Jim", "Bob");
        echo $array['0'];
        echo $HR;
        echo "int ** int = ";
        print $interger ** $interger;
        echo $HR;
        // assignment operators
        $x = 100;
        //$x = $x + 20;
        $x += 20;
        echo $x;
        echo $HR;
        // comparison operators and increment operators
        // < > <= >= == === != !== : ++$x $x++ --$y $y--
        // logical opreators
        // or ||  and &&  xor  
        $x = 2;
        $y = 10;
        if($x == 1) {
            echo "True!";
        } elseif($x == 2) {
            echo "x is two";
        } else {
            echo "False";
        }
    ?>
    <script src="app.js"></script>
</body>
</html>