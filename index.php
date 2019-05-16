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
    <h1>Superglobals</h1>
    <?php 
        /**
         * $GLOBALS
         * $_POST
         * $_GET
         * https://www.youtube.com/watch?v=jort8_4U-88&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=27
         * $_COOKIE
         * $_SESSION
         */
        $globalscope = "<h2>I'm global</h2>";
        function functionscope() {
            $inside = "<h2>I'm inside function scope</h2>";
            echo $GLOBALS['globalscope'];
            echo "<br>";
            echo $inside;
        }
        //functionscope();
        //echo $_POST['postname'];
        //echo $_GET['getname'];
    ?>
    <form method="POST">
        <input type="hidden" name="postname" value="notintheurl">
        <button type="submit">POST ME!</button>
    </form>
    <form method="GET">
        <input type="hidden" name="getname" value="intheurl">
        <button type="submit">GET ME!</button>
    </form>
    <script src="js/app.js"></script>
</body>
</html>