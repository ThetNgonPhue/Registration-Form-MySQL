<?php
$host = "localhost:4306";
$db = "registeration";
$user = "root";
$password = "";


$dsn = "mysql:host=$host;dbname=$db";


try {
  //db connection
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //echo "connection successful";
} catch (PDOException $e) {
    //echo "database doesn't exist!";
  throw new PDOException($e->getMessage());
}
require_once "crud.php";
$crud = new crud($pdo);

?>
