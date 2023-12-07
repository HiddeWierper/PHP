<?php
$host = 'localhost';
$port = '3306';
$user = 'root';
$pass = '';
$db = 'phpschool';

try {
    // Establish a database connection
    $dbh = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if (isset($_POST['inschrijven'])) {
        // Retrieve form data
        $cursistnr = $_POST['cursistnr'];
        $naam = $_POST['naam'];
        $roepnaam = $_POST['roepnaam'];
        $straat = $_POST['straat'];
        $postcode = $_POST['postcode'];
        $plaats = $_POST['plaats'];
        $geslacht = $_POST['geslacht'];
        $geb_datum = $_POST['geb_datum'];

        // Prepare and execute the SQL INSERT statement
        $stmt = $dbh->prepare("INSERT INTO cursist (cursistnr, naam, roepnaam, straat, postcode, plaats, geslacht, geb_datum) 
                               VALUES (:cursistnr, :naam, :roepnaam, :straat, :postcode, :plaats, :geslacht, :geb_datum)");

        $stmt->bindParam(':cursistnr', $cursistnr);
        $stmt->bindParam(':naam', $naam);
        $stmt->bindParam(':roepnaam', $roepnaam);
        $stmt->bindParam(':straat', $straat);
        $stmt->bindParam(':postcode', $postcode);
        $stmt->bindParam(':plaats', $plaats);
        $stmt->bindParam(':geslacht', $geslacht);
        $stmt->bindParam(':geb_datum', $geb_datum);

        $stmt->execute();

        echo "Inschrijving succesvol toegevoegd!";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<script>
let i = 5;
const intervalId = setInterval(() => {
  if(i > 0) {
    document.body.innerHTML = `U wordt over ${i} seconden doorgestuurd naar de inschrijfpagina.`;
    i--;
  } else {
    clearInterval(intervalId);
    window.location.href = '/phps/php/005.php'; 
  }
}, 1000);
</script>


