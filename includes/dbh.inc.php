<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "kontento";
$port = 3306;

$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

/*if($conn)
  echo "connection ok";
else
  echo "connection tak ok";
*/

if(mysqli_connect_errno()){
  echo "Failed to connect!";
  exit();
}
  echo "Connection success!";


/*
try{
  $conn = new PDO("mysql: host=$host; port=3306; dbname=$dbname", $user, $pass);
  
  $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection Success";
} catch (PDOException $e){
  echo "Error in connection" . $e -> getMessage();
}
*/


?>
