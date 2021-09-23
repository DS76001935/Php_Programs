<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Math Calculator</title>
  </head>
  <body>
    <form action="Calculator.php" method="post">
      <label for="num1">Number 1 : </label>
      <input type="number" name="num1" /><br>
      <label for="num2">Number 2 : </label>
      <input type="number" name="num2" /><br>
      + : <input type="radio" name="operator" value="plus">
      - : <input type="radio" name="operator" value="minus">
      * : <input type="radio" name="operator" value="multiply">
      / : <input type="radio" name="operator" value="divide"><br><br>
      <input type="submit" name="save" value="Save"><br><br>
    </form>
  </body>
</html>
<?php
    if (isset($_POST["save"])) {
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $operator = $_POST["operator"];

      switch ($operator) {
        case 'plus':
          $result = $num1 + $num2;
          echo "Your result is : $result";
          break;
        case 'minus':
          $result = $num1 - $num2;
          echo "Your result is : $result";
          break;
        case 'multiply':
          $result = $num1 * $num2;
          echo "Your result is : $result";
          break;
        case 'divide':
          $result = $num1 / $num2;
          echo "Your result is : $result";
          break;
        default:
          $result = "Invalid Action!";
          break;
      }
    }
?>
