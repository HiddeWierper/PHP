<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>003</title>
  <link rel="stylesheet" href="styles/style.css"> 
</head>
<body>
  <a href="index.html">home</a>
<?php
  echo "<h1>Opdracht 1</h1>";

  for ($number = 1; $number <= 9; $number++) {
    $aap = "/phps/images/apen/apen/aap$number.jpg";
    echo "<img src='$aap'>";
  }

  echo "<h1>Opdracht 2</h1>";

  $bomen = array("img_0050.jpg", "lillypilly1.jpg", "Maranchery_Biyyam_Kayal_kandal.jpg", "weeping-elm.jpg", "weeping-elm0091.jpg");

  foreach ($bomen as $boom) {
      echo "<img src='images/bomen/bomen/" . $boom . "'>";
  }

  echo "<h1>Opdracht 3</h1>";
    for ($i = 1; $i <= 10; $i += 2) {
        $spaces = str_repeat("&nbsp;", (10 - $i) / 2);
        $stars = str_repeat("*", $i);
        echo $spaces . $stars . "<br>";
    }

  echo "<h1>Opdracht 4</h1>";

  for($x = 35; $x >= 25; $x--) {
    echo 'hoppelepee';
    echo "<br>";
  }	
  ?>
</body>
</html>