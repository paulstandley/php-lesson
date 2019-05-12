<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
    <style>
        body {
            background: lightblue;
        }
        h1 {
            color: darkred;
            font-size: 2.6rem;
            text-align: center;
        }
        h2 {
            text-align: center;
        }
        hr {
            min-height: 2rem;
            background: blue;
            border: gray 0.6rem solid;
        }
        form {
            text-align: center;
        }
        strong {
            font-size: 2rem;
            color: white;
        }
        .h2class {
            color: green;
        }
    </style>
</head>
<body>
    <h1>This is a php tester</h1>
    <hr>
    <?php
        echo "<h2>Hi this is a h2 displayed with php wth echo</h2>\n";
        print "<h2 class='h2class'>This is a php print<h2>";
    ?>
    <hr>
    <h2>Input your name</h2>
    <form method="GET">
        <input type="text" name="person">
        <button>Submit</button>
    </form>
    <?php 
        $name = $_GET['person'];
        echo "<h2><strong>".$name."</strong> is a hamsom fellow!<h2>";
    ?>
</body>
</html>