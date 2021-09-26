<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Game5.php" method="post">
      <label for="num1">Enter a number :</label>
      <input type="number" name="num1"><br>
      <input type="submit" name="submit" value="Submit" />
    </form>
  </body>
</html>
<?php
  function cube($num){
    echo "Helo...<br>";//it will print because it is over the return statement
    return $num*$num*$num; // last line of the function
    echo "Hello"; // ignored because this is a statement after the return statement
  }
  if(isset($_POST["submit"])){
    $num1 = $_POST["num1"];
    echo $r;
    $r = cube($num1);
  }
?>
