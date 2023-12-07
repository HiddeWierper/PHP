<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="index.html">home</a>

  <?php
  echo "<h1>Opdracht 1</h1>";
  if (isset($_POST["celsius"])) {
    $celsius = $_POST["celsius"];
    function convert($celsius){
      $fahrenheit = $celsius * 1.8 + 32;
      return $fahrenheit;
    }
    $fahrenheit = convert($celsius);
   
   
  }
  ?>
<p>celcius to fahrenheit converter</p>
<form name="form" action="" method="post">
    <input type="number" name="celsius" id="subject">
    <input type="submit" name="submit" id="">
  </form>
  <?php
   echo $fahrenheit;
  ?>

  <h1>Opdracht 2</h1>
  <p>Check if the number is divisible by 3</p>
  <form action="" method="post">
    <input type="number" name="number" id="">
    <input type="submit" name="submit" id="">
  </form>

  <?php
  if (isset($_POST["number"])) {
      $number = $_POST["number"];
      if ($number % 3 == 0) {
          echo "true";
      } else {
          echo "false";
      }
  }
  ?>
<h1>Opdracht 3</h1>
<p>reverse String</p>
<form action="" method="post">
  <input type="text" name="text" id="">
  <input type="submit" name="submit" id="">
</form>

<?php
function reverseString($string){
  return strrev($string);
}

if (isset($_POST["text"])) {
  $string = $_POST["text"];
  echo reverseString($string);
}
?>

</body>
</html>