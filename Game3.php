<!-- Associative Arrays Demo

key-value pair mechanism supported


-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action = "Game3.php" method="post">
        <input type="text" name="name">
        <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php

$ages = array('Deep' =>  23, 'Meet' => 27, 'Sanjay' => 54, 'Kalpita' => 52);

// echo "Mammu's age =>".$ages['Kalpita']."<br>";
// echo "Papa's age =>".$ages['Sanjay']."<br>";
// echo "Meetu's age =>".$ages['Meet']."<br>";
// echo "My age =>".$ages['Deep']."<br>";
if(isset($_POST["submit"])){
  echo $ages[$_POST["name"]];
}

?>
