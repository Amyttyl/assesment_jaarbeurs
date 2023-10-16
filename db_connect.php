<?php
$servername = "localhost";
$db_name = "jaarbeurs_db";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$fetch_query = $conn->query("SELECT * FROM reviews");
$results_query = $fetch_query->fetchAll(PDO::FETCH_ASSOC);
?>
