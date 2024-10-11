<?php  

$host = "localhost";
$user = "root";
$password = "";
$dbname = "pdo_methods";
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);

?>