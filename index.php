<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <style>
    body {
        background: #ababba;
        text-align: center;
        color: #111333; 
    }
    </style>
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
        $interger = 46;
        // float
        $float = 3.1415;
        // boolean
        //true = 1
        //false = 0
        // array 
        $array = array("Paz", "Jim", "Bob");
        echo $array['0'];
    ?>
</body>
</html>