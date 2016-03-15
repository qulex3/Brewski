<?php

$db_server = "mysql:host=localhost;dbname=brewski2520";
$db_username = "root";
$db_password = "root";

try {
  $conn = new PDO($db_server, $db_username, $db_password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

?>