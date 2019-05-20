<?php
    include_once "includes/dbh.inc.php";
?>
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
    <header>
        <h1>MySQL Database</h1>
    </header>
    <?php 
        $sql = "SELECT * FROM users;";
        $results = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($results);
        if($resultCheck > 0) {
            while($row = mysqli_fetch_assoc($results)) {
                echo $row['user_first'] . " " . $row['user_last'] . "<br>";
            }

        }
    ?>
    <script src="js/app.js"></script>
</body>
</html>