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

<form class="register">
  <input type="text" name="username" placeholder="username" required autocomplete="off">
  <input type="text" name="first_name" placeholder="first name" required autocomplete="off">
  <input type="text" name="last_name" placeholder="last name" required autocomplete="off">
  <input type="text" name="email" placeholder="email" required autocomplete="off">
  <input type="text" name="password" placeholder="password" required autocomplete="off">
  <input type="submit" name="register" value="SIGN UP">
</form>

<?php
if (isset($_GET['username'])){
  $wallet = $_GET['username'];
  echo $wallet;
}else{
  echo "it's not set";
}
?>



</div>
<?php include 'inc/footer.php' ?>