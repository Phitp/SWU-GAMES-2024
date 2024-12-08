<?php

if ($open_connect != 1) {
  die(header('Location: index.php'));
}

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = 'swugames2024';
// $sport = NULL;
// $socket = NULL;

$servername = "localhost";
$username = "ameennav_swugame2024";
$password = "E70hG1WJi7";
$database = 'ameennav_swugame2024';
$sport = NULL;
$socket = NULL;

// Create connection
$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error($connect));
} else {
  mysqli_set_charset($connect,'utf8');
}

?>