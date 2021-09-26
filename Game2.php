<!-- Arrays Concept in PHP

=> Arrays starts from 0th index
=> Arrays actually means a collection of single kind of values
=> i.e, name_of_array[index]; -syntex-
=>we can also modify values via the action of assignment like this,

$ARRAY_NAME = "2,3,4";

$ARRAY_NAME[2] = "5";

OUTPUT IS:
$ARRAY_NAME = [2,3,5]

=> We can also access individual element from an array.
=>count() function is used to count how many elements contained in an array.
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Game Part 2</title>
  </head>
  <body>
    <form action="Game2.php" method="post">
      <label for="apples">Apples</label>
      <input type="checkbox" name="fruits[]" value="apples">
      <label for="bananas">Bananas</label>
      <input type="checkbox" name="fruits[]" value="bananas">
      <label for="graps">Graps</label>
      <input type="checkbox" name="fruits[]" value="graps"><br><br>
      <input type="submit" name="save" value="Save"><br><br>
    </form>
  </body>
</html>
<?php

if(isset($_POST["save"])){
  $fruits = $_POST["fruits"];
  // foreach ($fruits as $key => $value) {
  //   while ($key != count($fruits)-1) {
  //     echo "$value"." => ";
  //   }
  $size = count($fruits);
  $extra = $size - 1;
  for ($i=0; $i < $size ; $i++) {
    if($i == $extra){
      echo $fruits[$i];
    }else{
      echo $fruits[$i].", ";
    }
  }
    // echo "Size of fruits array => ".count($fruits);
}

?>
