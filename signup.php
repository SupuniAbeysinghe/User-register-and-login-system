<?php
include_once 'header.php';
?>
<h2>Registration Page</h2><br>

<form action="includes/signup.inc.php" method="POST">
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br><br>
  
  <label for="name">Profile Name:</label><br>
  <input type="text" id="name" name="name"><br><br>
  
   <label for="password">Password:</label><br>
  <input type="password" id="password" name="pwd"><br><br>
  
     <label for="cpassword">Confirm Password:</label><br>
  <input type="password" id="cpassword" name="pwdrepeat"><br><br>
  
  <!-- <input type="submit" value="Login"> -->
  <button name="submit" type="submit">Register</button>
  <!-- <input type="reset" value="Clear"> -->
  <button name="submit" type="reset">Clear</button>

</form> 
<?php
include_once 'footer.php';
?>