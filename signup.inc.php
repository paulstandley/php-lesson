<?php
// check if user has clicked the signup button
  if(!isset($_POST['submit'])) {
    header("Location: index.php");
    exit();
  }else{
    // include the database connection
    include_once '../includes/dbh.inc.php';
    // get data from signup form
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    // check if inputs are empty
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
      header("Location: index.php?signup=empty");
      exit();
    }else{
      // check if input charactors are valid
      if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: index.php?signup=char");
        exit();        
      }else{
        // check if email is valid
        if(!filter_has_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location: index.php?signup=email&first=$first&last=$last&uid=$uid");
          exit();
        }else{
          header("Location: index.php?signup=success");
          exit();
        }
      }
    }
  }
?>