<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "<h1>Resultaat formulier 1</h1>";
	echo "<p>Inlognaam: " . $_POST["inlognaam"] . "</p>";
	echo "<p>Wachtwoord: " . $_POST["wachtwoord"] . "</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "<h1>Resultaat formulier 2</h1>";
	echo "<p>Naam: " . $_POST["naam"] . "</p>";
	echo "<p>Adres: " . $_POST["adres"] . "</p>";
	echo "<p>Postcode: " . $_POST["postcode"] . "</p>";
	echo "<p>Woonplaats: " . $_POST["woonplaats"] . "</p>";
	echo "<p>E-mail: " . $_POST["email"] . "</p>";
	echo "<p>Wachtwoord: " . $_POST["wachtwoord"] . "</p>";
}

?>
