<!DOCTYPE html>
<html lang="en">
<head>
    <link href="login.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <button class="btn" type="submit">Login</button>
    </form>
</body>
</html>

<?php

session_start();
if ($_SESSION["loggedin"] === true) {
    header("location: admin.php");
    exit;
}

try {
  $host = '192.168.1.111';
  $port='3306';
  $user = 'root';
  $pass = 'Wierper1411';
  $db= 'login';
  $dbh = new PDO('mysql: host=' . $host.'; dbname='.$db
                .'; port=' . $port, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database Connection successful<br><br>";
} catch (PDOException $e) {
    echo "Database Connection failed: " . $e->getMessage() . "<br><br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM inlog WHERE username = :username AND password = :password";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        try {
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if (count($result) > 0) {
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                header("location: admin.php");
                exit;
            } else {
                echo "<script>alert('Incorrect username or password')</script>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Please enter a username and password";
    }
}
?>
