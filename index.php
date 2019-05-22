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
    <form action="includes/signup.inc.php" method="POST" style="background: rgb(252, 222, 222);">
        <input type="text" name="first" placeholder="Firstname">
        <br>   
        <input type="text" name="last" placeholder="Lastname">
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="text" name="uid" placeholder="Username">
        <br>
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">Sign Up</button>
        </form>
    <?php
    /*
        $sql = "SELECT * FROM users WHERE user_uid='Admin';";
        $results = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($results);
        if($resultCheck > 0) {
            while($row = mysqli_fetch_assoc($results)) {
                echo $row['user_first'] . " " . $row['user_last'] . "<br>";
            }
        }
    */
    /*
    $sql = 'INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ("Jim","Bob","jimbob@jimbob.co.uk","jimbo1696","test127");';
    mysqli_query($conn, $sql);
    */
        $data = "Mollymow";
        // Create a template
        $sql = "SELECT * FROM users WHERE user_uid=?;";
        // Create a prepard statement
        $stmt = mysqli_stmt_init($conn);
        // Prepare preperd statement
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed";
        }else{
           // Bind parameters to the placeholder the s is the data type string eg i = int b = blob d = double
           mysqli_stmt_bind_param($stmt, "s", $data);
           // Runpsrameters inside database
           mysqli_stmt_execute($stmt);
           // get results from database
           $results = mysqli_stmt_get_result($stmt);
           // Display
           while($row = mysqli_fetch_assoc($results)) {
                echo $row['user_first'] . " " . $row['user_last'] . "<br>";
            }
        }

    ?>
</body>
</html>