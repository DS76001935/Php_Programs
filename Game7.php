<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="Game7.php" method="post">
      <label for="num1">Number 1 :</label>
      <input type="number" name="num1"><br><br>
      <label for="num2">Number 2 :</label>
      <input type="number" name="num2"><br><br>
      <label for="num3">Number 3 :</label>
      <input type="number" name="num3"><br><br>
      <input type="submit" name="submit" value="Submit"><br><br>
    </form>
    <?php
    if (isset($_POST["submit"])){
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $num3 = $_POST["num3"];
    $r =getMin($num1,$num2,$num3); ?>
    <h1><?= $r ?></h1>
  <?php } ?>
  </body>
</html>
<?php

function getMax($n1,$n2,$n3){
  if ($n1 >= $n2 && $n1 >= $n3)
    return $n1;
  elseif($n2 >= $n1 && $n2 >= $n3)
    return $n2;
  else
    return $n3;
}
function getMin($n1,$n2,$n3){
  if ($n1 <= $n2 && $n1 <= $n3)
    return $n1;
  elseif($n2 <= $n1 && $n2 <= $n3)
    return $n2;
  else
    return $n3;
}

// function getMax($n1,$n2){
//   if ($n1 > $n2)
//     return $n1;
//   else
//     return $n2;
//
// }

  // function getMin($n1,$n2){
  //   if ($n1 < $n2)
  //     return $n1;
  //   else
  //     return $n2;
  // }

  // echo min($num1,$num2);

?>
