<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Game8.php" method="post">
      <label for="num1">Number 1 :</label>
      <input type="number" step="0.0001" name="num1"><br><br>
      <label for="num2">Number 2 :</label>
      <input type="number" step="0.0001" name="num2"><br><br>
      <label for="opt">Operator :</label>
      <input type="text" name="opt"><br><br>
      <input type="submit" name="act" value="Get Set Go!"><br><br>
    </form>
  </body>
</html>
<?php

  if(isset($_POST["act"])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $opt = $_POST["opt"];

    if ($opt == "+"){
      $r = $num1 + $num2;
      echo "<h2>Result is : $r</h2>";
    }else if ($opt == "-"){
      $r = $num1 - $num2;
      echo "<h2>Result is : $r</h2>";
    }else if ($opt == "*"){
      $r = $num1 * $num2;
      echo "<h2>Result is : $r</h2>";
    }else if ($opt == "/"){
      $r = $num1 / $num2;
      echo "<h2>Result is : $r</h2>";
    }else if ($opt == "%"){
      $r = $num1 % $num2;
      echo "<h2>Result is : $r</h2>";
    }else{
      echo "Invalid Operator!!!";
    }
  }


?>
