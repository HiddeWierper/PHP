<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body> 
  <a href="index.html">home</a>
  <h1>Opdracht 1</h1>
<form action='resultaat.php' method='POST' >
    Inlognaam <input type='text' name='inlognaam' required>
    Wachtwoord <input type='password' name='wachtwoord' required>
    <input type="submit" name="knop" >
</form>

<h1>Opdracht 2</h1>
<form action='resultaat.php' method='POST' >
  Naam <input type='text' name='naam' required>
  Adres <input type='text' name='adres' required>
  Postcode <input type='text' name='postcode' required>
  Woonplaats <input type='text' name='woonplaats' required>
  E-mail <input type='text' name='email' required>
  Wachtwoord <input type='password' name='wachtwoord' required>
  <input type="submit" name="knop" >

</body>
</html>