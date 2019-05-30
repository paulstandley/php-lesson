<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Password</title>
</head>
<body>
  <?php
    $input = "tester1234";
    $hash = password_hash($input, PASSWORD_DEFAULT); 
    echo $input."<br>";
    echo $hash."<br>";
    echo password_verify($input, $hash);
  ?>
</body>
</html>