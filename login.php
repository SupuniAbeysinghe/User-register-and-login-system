<?php
include_once 'header.php';
?>
<div class="form">
<h2>Login Page</h2><br>

<form action="includes/login.inc.php" method="POST">

  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br><br>


  <label for="password">Password:</label><br>
  <input type="password" id="password" name="pwd"><br><br>



  <!-- <input type="submit" value="Login"> -->
  <button name="submit" type="submit">Log in</button>
  <!-- <input type="reset" value="Clear"> -->
  <button name="submit" type="reset">Clear</button>


</form>
</div>

<?php
include_once 'footer.php';
?>