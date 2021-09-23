<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Game 1</title>
  </head>
  <body>
    <?php
    if (isset($_POST["save"])) {
      $devName = $_POST["devName"];
      $Exp = $_POST["Exp"];
      $Tech = $_POST["Tech"];
      $weakness = $_POST["weakness"];
      $strength = $_POST["strength"];
      $company = $_POST["company"];
      $town = $_POST["town"];
      $area = $_POST["area"];
      $position = $_POST["position"];

      echo "<p><b>Hey dearest $devName,</b><br><br>
          You are a respected $position in $Tech stream where you did your best in order to improvise every fundamental concept.
          Other than that, You have been gained $Exp amount of official work experience in $company organization which is situated at $area in $town.
          Furthermore, You also tried a lot to overcome your weakness i.e, $weakness as well as build a strength i.e, $strength during your respected
          experience in our company.<br><br><b>The whole team are very very thankfull to you for having you as a great member in it as well as being a pivotal part of this enterprise.</b>
          <br><br><br>
          <b>Thank you.</b>

    </p>";
  }?>

    <form action="Game1.php" method="post">
      <label for="position">Your Position : </label>
      <input type="text" name="position" /><br>
        <label for="devName">Your Good Name : </label>
        <input type="text" name="devName" /><br>
        <label for="Exp">Your Experience : </label>
        <input type="text" name="Exp" /><br>
        <label for="Tech">Name Of Stream : </label>
        <input type="text" name="Tech" /><br>
        <label for="company">Organization Name : </label>
        <input type="text" name="company" /><br>
        <label for="town">Your Town : </label>
        <input type="text" name="town" /><br>
        <label for="area">Your Area Name : </label>
        <input type="text" name="area" /><br>
        <label for="weakness">Your Weakness : </label>
        <input type="text" name="weakness" /><br>
        <label for="strength">Your Strength</label>
        <input type="text" name="strength" /><br>
        <input type="submit" name="save" value="Save"><br><br>
    </form>
  </body>
</html>
