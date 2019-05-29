<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/form.css">
  <title>Document</title>
</head>
<body>
  <header>
    <h1>SIGNUP</h1>
  </header>
  <form action="signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <input type="text" name="last" placeholder="Lastname">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" name="submit">Signup</button>
  </form>
  <?php 
  /*
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if(strpos($fullUrl, "signup=empty") == true) {
      echo "<h2 class='error'>You did not fill in all fields!</h2>";
      exit();
    }
    elseif(strpos($fullUrl, "signup=char") == true) {
      echo "<h2 class='error'>You used invlid characters!</h2>";
      exit();
    }
    elseif(strpos($fullUrl, "signup=email") == true) {
      echo "<h2 class='error'>You used an invalid email!</h2>";
      exit();
    }
    elseif(strpos($fullUrl, "signup=success") == true) {
      echo "<h2 class='success'>You have been signed up!</h2>";
      exit();
    }
    */
    if(!isset($_GET['signup'])) {
      exit();
    }else{
      $signupCheck = $_GET['signup'];
      if($signupCheck == "empty") {
        echo "<h2 class='error'>You did not fill in all fields!</h2>";
        exit();
      }
      elseif($signupCheck == "char") {
        echo "<h2 class='error'>You used invlid characters!</h2>";
        exit();
      }
      elseif($signupCheck == "email") {
        echo "<h2 class='error'>You used an invalid email!</h2>";
        exit();
      }
      elseif($signupCheck == "success") {
        echo "<h2 class='success'>You have been signed up!</h2>";
        exit();
      }
    }
  ?>
</body>
</html>