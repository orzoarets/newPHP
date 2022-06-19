<?php
$dsn = 'mysql:host=localhost;dbname=practicedb';
$username = "root";
// $password = "";

try {
    $db = new PDO($dsn, $username);
    echo "connected!";
} catch (PDOException $e) {
    $error = "Database Error: ";
    $error .= $e -> getMessage();
    // include ('view/error.php');
    exit();
}



?>