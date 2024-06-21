<?php 


$servername = "localhost";
$username = "root";
$password = "root";

try {
  //$databaseConnexion = new PDO("mysql:host=$servername;dbname=car_rental", $username, $password);
  $databaseConnexion = new PDO('pgsql:host=localhost;port=5432;dbname=car_rental;user=postgres;password=passer123');

  // set the PDO error mode to exception
  $databaseConnexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully"; 
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>