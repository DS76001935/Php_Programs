<!--Swutch Statement -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Game9.php" method="post">
      <label for="grade">How's your grade?</label>
      <select name="grade">
        <option value="Select the valid Grade">Select the valid Grade</option>
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="C+">C+</option>
        <option value="D+">D+</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select><br><br>
      <input type="submit" name="proceed" value="Proceed"><br><br>
    </form>
    <span><b>ACKNOWLEDGEMENT : </b></span>
  </body>
</html>
<?php

  if (isset($_POST["proceed"])) {
    $grade = $_POST["grade"];

    switch ($grade) {
      case 'A+':
        echo "<h3>Congratulations, you are ranked number 1 in the whole class :-)</h3>";
        break;
      case 'B+':
        echo "<h3>You did great job :-)</h3>";
        break;
      case 'C+':
        echo "<h3>Good, but you need much hard work in such subjects :-|</h3>";
        break;
      case 'D+':
        echo "<h3>You did soo bad, please be serious upon your academics :-(</h3>";
        break;
      case 'E':
        echo "<h3>You are fail out of all great graded candidates in the whole class :-(</h3>";
        break;
      default:
        echo "<h3>Invalid String!!!</h3>";
        break;
    }
  }


?>
