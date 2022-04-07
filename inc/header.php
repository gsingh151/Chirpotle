<!DOCTYPE html>
<?php ob_start(); ?>
<html>
<head>
	<title>Chirpotle</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="short icon" href="images/favicon.png">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <?php include 'support/connect.php'; ?>

</head>
<body>

<header>
<div class="logo">
Chirp Chirp Chirpotle
<img src="images/chirp_logo.svg">
</div>

<form method="POST">
  <input type="text" name="email" placeholder="user">
  <input type="text" name="password" placeholder="password">
  <input type="submit" name="login">
</form>

<?php
  if(isset($_POST['login'])){
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $verify = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($verify)>0){
      echo "this user exists";
    }else{
    echo "Email or Password is incorrect";
    }
  }
?>

</header>