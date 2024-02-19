<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";

$mysqli = new mysqli($servername, $username, $password);
// Check connection
if ($mysqli->connect_error) {
  printf("Connection failed: " . $conn->connect_error);
  exit();
}

printf("connected successfully");
$mysqli->close();

/*
try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}*/

/*$servername = "localhost";
$database = "kontento2";
$uid = "";
$password = "";
$connection = [
    "Database" => "kontento2",
    "Uid" => "",
    "PWD" => ""
];

$conn = sqlsrv_connect($serverName, $connection);*/

/*try 2
<!DOCTYPE html>
<html>
<head>
<title>Configuration</title>
</head>
<body>
<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'kontento';

$conn = mysqli_connect($hostname,  $username,  $password, $database) or die('Connecting to MySQL failed');

echo 'database connected';
?>
</body>
</html>/*

?>