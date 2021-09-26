<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><?php sayHi("Deep",23,90); ?></h1>
    <h2><?php sayHi("Pranjal",20,70); ?></h2>
    <h3><?php sayHi("Ankit",23,80); ?></h3>
  </body>
</html>
<?php

  function sayHi($name,$age,$marks){
    echo "Hey ".$name, ", you are ".$age." years old and you got ".$marks."% .";
  }


?>
