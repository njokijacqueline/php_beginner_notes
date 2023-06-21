<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/
if (isset ($_POST['submit'])) {
  //$name = $_POST['email'];
  //$email = $_POST['email'];

  // htmlspecialchars() - Convert special characters to HTML entitites
  // $name =htmlspecialchars($_POST['name']);
  // $email =htmlspecialchars($_POST['email']);
  // filter_var() -Sanitize data
  //$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  //$email = filter_var($POST['email'], FILTER_SANITIZE_EMAIL);
  //filter_input() -Sanitize inputs
  $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
    //FILTER_SANITIZE_STRING - Conver string to string only with alphanumeric, whitespace, and the following characters-_.:/
    //FILTER_SANITIZE_EMAIL - Convert string to a valid email addres
    //FILTER_SANITIZE_URL - Convert string to a valid URL
    //FILTER_SANITIZE_NUMBER_INT - Convert a string to an integer
    //FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float
    //FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most other characters
  } ?>
  <!-- Pass data through a form -->
  <!-- php_self can be used for xss -->
  <form action= 
  "<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
  <div>
    <label>Name: </label>
    <input type="text" name="name">
  </div>
  <br>
  <?php echo $email; ?>
  <div>
    <label>Email: </label>
    <input type="email" name="email">
  </div>
  <br>
  <input type="submit" name="submit" value="Submit">
  </form>
