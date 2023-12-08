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
</form>

<h1>Opdracht 3</h1>
<form method="POST">
  <select name="apen[]" id="apen" multiple>
    <option selected value="">select</option>
    <option value="aap1">aap1</option>
    <option value="aap2">aap2</option>
    <option value="aap3">aap3</option>
    <option value="aap4">aap4</option>
    <option value="aap5">aap5</option>
    <option value="aap6">aap6</option>
    <option value="aap7">aap7</option>
    <option value="aap8">aap8</option>
    <option value="aap9">aap9</option>
  </select>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['apen'])) { 
  $selectedApen = $_POST['apen']; 
  foreach ($selectedApen as $aap) {
    $number = substr($aap, 3);
    echo "<img src='/school_php/images/apen/apen/aap{$number}.jpg' alt=''>";
  }
}
?>

<h1>Opdracht 4</h1>
<?php
$host = '192.168.1.111';
$port='3306';
$user = 'root';
$pass = 'Wierper1411';
$db= 'schoolschool';
$dbh = new PDO('mysql: host=' . $host.'; dbname='.$db
              .'; port=' . $port, $user, $pass);

$stmt = $dbh->query("SELECT * FROM cursist");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
  echo "<li>";
  echo "Cursistnr: {$row['cursistnr']} &nbsp;";
  echo "Naam: {$row['naam']}&nbsp;";
  echo "Roepnaam: {$row['roepnaam']}&nbsp;";
  echo "Straat: {$row['straat']}&nbsp;";
  echo "Postcode: {$row['postcode']}&nbsp;";
  echo "Plaats: {$row['plaats']}&nbsp;";
  echo "Geslacht: {$row['geslacht']}&nbsp;";
  echo "Geboortedatum: {$row['geb_datum']}&nbsp;";
  echo "</li>";
}
?>
<h1>Opdracht 5</h1>

<h1>Inschrijving nieuwe cursist</h1>
<form action="inschrijving.php" method="post">
  <label for="cursistnr">Cursistnummer</label><br>
    <input type="number" id="cursistnr" name="cursistnr"><br>
  <label for="naam">Achternaam:</label><br>
    <input type="text" id="naam" name="naam"><br>
  <label for="roepnaam">Roepnaam:</label><br>
    <input type="text" id="roepnaam" name="roepnaam"><br>
  <label for="straat" >Straat:</label><br>
    <input type="text" id="straat" name="straat"><br>
  <label for="postcode">Postcode:</label><br>
    <input type="text" id="postcode" name="postcode"><br>
  <label for="plaats">Plaats:</label><br>
    <input type="text" id="plaats" name="plaats"><br>
  <label for="geslacht">Geslacht:</label><br>
    <select id="geslacht" name="geslacht">
      <option value="M">Man</option>
      <option value="V">Vrouw</option>
      <option value="N">Anders</option>
    </select>
  <br>
  <label for="geb_datum">Geboortedatum (YYYY-MM-DD)</label><br>
    <input type="text" id="geb_datum" name="geb_datum"><br>
    <input type="submit" name="inschrijven" value="Inschrijven">
</form>



</body>
</html>