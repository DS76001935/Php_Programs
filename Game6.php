<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Game6.php" method="post">
      <label for="ask">Write your valid sex :</label>
      <select name="ask">
        <option value="SELECT">Select your valid Sex</option>
        <option value="MALE">Male</option>
        <option value="FEMALE">Female</option>
      </select><br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
</html>
<?php
  if(isset($_POST["submit"])){
    $ask = $_POST["ask"];
    if($ask == "MALE"){
      $flag = 1;
    }else if($ask == "FEMALE"){
      $flag = 2;
    }else{
      $flag = 3;
    }
    if($flag == 1){
      echo "Hey Gentleman...";
    }else if($flag == 2){
      echo "Hey GentleWoman...";
    }else{
      echo "Invalid Action!!!";
    }
  }
?>
