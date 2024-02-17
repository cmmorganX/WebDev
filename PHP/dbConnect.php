<?php
$serverName = "localhost";
$username = "cmorgan2020_ei";
$password = "8ruI5B6Mx+";
$database = "cmorgan2020_ei";

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>

