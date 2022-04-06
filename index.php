<?php include 'inc/header.php' ?>
<div class="content">


<div class="benifit_wrapper">

  <div class="benifit1">
  Follow your interests.  
  </div>
  <div class="benifit2">
  Instant updates from your friends, industry experts, favorite celebrities, and what's happening around the world.
  </div>

</div>

<form class="register" method="POST">
  <input type="text" name="username" placeholder="username" required>
  <input type="text" name="first_name" placeholder="first name" required>
  <input type="text" name="last_name" placeholder="last name" required>
  <input type="text" name="email" placeholder="email" required>
  <input type="text" name="password" placeholder="password" required>
  <input type="submit" name="register" value="SIGN UP">
</form>

<?php
if (isset($_POST['register'])){

$host = "localhost";
$user = "root";
$password = "";
$database = "db_chirpotle";

$conn = mysqli_connect($host, $user, $password, $database);

  $username = $_POST['username'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sign_up_date = date('Y-m-d');

  $verify = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email'");
  if ($mysqli_num_rows($verify) > 0){
    echo "this user exists";
  }else{
    echo "this user does not exist";
    $sql = "INSERT INTO `users`(`username`, `password`, `first_name`, `last_name`, `email`, `sign_up_date`) VALUES ('$username', '$password', '$first_name', '$last_name', '$email', '$sign_up_date')";
    $query = mysqli_query($conn, $sql);
    echo "Username and Password Submitted!";
  }
}
?>

</div>
<?php include 'inc/footer.php' ?>